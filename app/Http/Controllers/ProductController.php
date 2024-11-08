<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Detail;
use App;
use Session;
class ProductController extends Controller
{
    // code pour index.product
    public function index($id)
    {
        // Récupérer les produits qui appartiennent à la catégorie spécifiée
        $products = Product::where('category_id', $id)->get();
        $categories = Category::all();

        // Récupérer les détails pour tous les produits récupérés
        $details = Detail::whereIn('product_id', $products->pluck('id'))->get();

        // Liste de toutes les colonnes de la table
        $columns = [
            'poids', 'capacite_godet', 'model_moteur', 'fabricant',
            'puissance_nominal', 'dimension_contour', 'type_conduite', 'chassis',
            'poids_total', 'charge_utile', 'vitesse_max', 'profondeur_forage',
            'diametere_max', 'capacite_large', 'couple_sortie', 'capacite_nominal',
            'hauteur_levage_maximal', 'model', 'LH', 'modele_chasis', 'longeur_total',
            'hauteur_total', 'logeur_deux_convoyeur', 'plaque_rampe', 'logueur_hors_tout',
            'hauteur_max_travail', 'hauteur_max_platforme', 'portee_travail_max',
            'charge_godet', 'charge_nominal', 'posse_max'
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

        // Passer les produits et leurs détails à la vue
        return view('product.index', compact('categories', 'filteredDetails','id'));
    }
    public function googleTranslateChange(Request $request)
    {

        App::setLocale($request->lang);

        Session::put('locale',$request->lang);

        return redirect()->back();
    }

   public function filter($id , $productname = null)
{
    $categories = Category::all();

    // Récupérer les produits qui appartiennent à la catégorie spécifiée ou dont le nom correspond
    // $products = Product::when($id, function ($query, $id) {
    //         return $query->orWhere('category_id', $id);
    //     })
    //     ->when($name, function ($query, $name) {
    //         return $query->orWhere('nom_pro', 'like', '%' . $name . '%');
    //     })
    //     ->get();

   $query = Product::where('category_id', $id);

    if ($productname) {
        // Use 'like' for partial matching and 'lower' for case-insensitive comparison
        $query->where('nom_pro', 'like', $productname . '%')
              ->orWhereRaw('LOWER(nom_pro) = ?', [strtolower($productname)]);
    }

    $products = $query->get();


    $categories = Category::all();

    // Récupérer les détails pour tous les produits récupérés
    $details = Detail::whereIn('product_id', $products->pluck('id'))->get();

    // Liste de toutes les colonnes de la table
    $columns = [
        'poids', 'capacite_godet', 'model_moteur', 'fabricant',
        'puissance_nominal', 'dimension_contour', 'type_conduite', 'chassis',
        'poids_total', 'charge_utile', 'vitesse_max', 'profondeur_forage',
        'diametere_max', 'capacite_large', 'couple_sortie', 'capacite_nominal',
        'hauteur_levage_maximal', 'model', 'LH', 'modele_chasis', 'longeur_total',
        'hauteur_total', 'logeur_deux_convoyeur', 'plaque_rampe', 'logueur_hors_tout',
        'hauteur_max_travail', 'hauteur_max_platforme', 'portee_travail_max',
        'charge_godet', 'charge_nominal', 'posse_max'
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

    return view("product.filtered", compact('id', 'categories', 'filteredDetails'));
}
    }

