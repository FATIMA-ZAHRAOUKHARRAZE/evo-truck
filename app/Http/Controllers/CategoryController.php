<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Detail;
class CategoryController extends Controller
{
    public function liste()
    {
        $categories = Category::all();

        return view('category.liste', compact('categories'));
    }
    public function search (Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('nom_pro', 'LIKE', '%' . $query . '%')->get();
        $categories = Category::all();

        // Récupérer les détails pour tous les produits récupérés
        $details = Detail::whereIn('product_id', $products->pluck('id'))->get();

        // Liste de toutes les colonnes de la table
            $columns = [
        'Poids en ordre de marche (kg)','Capacité du godet (m³)','Puissance nominale (kW)','Charge nominale (kg)','Charge du godet (m³)',
        'Lame semi-U (m³)','Largeur de voie (mm)','Capacité de levage nominale (t)','Flèche allongée (m)','Puissance du moteur (kW/tr/min)'
    ];

        // Créer une collection pour les détails filtrés
        $filteredDetails = [];

        // Parcourir chaque produit pour obtenir ses détails
        foreach ($products as $product) {
            $productDetails = $details->where('product_id', $product->id);

            // Parcourir chaque enregistrement de détails pour choisir trois colonnes non nulles
            $finalDetail = $productDetails->map(function ($detail) use ($columns) {
                // Filtrer les colonnes non nulles
                $nonNullColumns = collect($columns)->filter(function ($column) use ($detail) {
                    return !is_null($detail->{$column});
                });

                // Si on a au moins 3 colonnes non nulles, on en choisit 3 aléatoirement
                if ($nonNullColumns->count() >= 3) {
                    // Convertir les clés en tableau
                    $randomColumns = $nonNullColumns->random(3)->toArray();
                    // Retourner uniquement les colonnes sélectionnées pour cet enregistrement
                    return $detail->only($randomColumns);
                }
                return null; // Sinon, on ne retourne rien
            })->filter(); // Filtrer les résultats non nuls

            // Limiter à 3 enregistrements
            $finalDetails = $finalDetail->take(3);

            // Ajouter les détails filtrés pour ce produit dans le tableau
            $filteredDetails[$product->id] = [
                'product' => $product,
                'details' => $finalDetails
            ];
        }

          return view('category.search', compact('products', 'filteredDetails','categories'));
    }
}
