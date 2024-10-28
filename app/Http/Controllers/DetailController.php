<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Parametre;
class DetailController extends Controller
{
    public function index($id){
            $product = Product::find($id);
        $categories = Category::all();
        $details = Detail::where('product_id', $product->id)->get();
        $parametres=Parametre::where('product_id', $product->id)->get();
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
        $filteredDetails = $details->map(function ($detail) use ($columns) {
            // Filtrer les colonnes non nulles
            $nonNullColumns = collect($columns)->filter(function ($column) use ($detail) {
                return !is_null($detail->{$column});
            });
            // Retourner toutes les colonnes non nulles pour cet enregistrement
            return $detail->only($nonNullColumns->toArray());
        })->filter(); // Filtrer les résultats non nuls

        // Passer les données à la vue
        return view('product.ProductDetail', compact('product', 'categories', 'filteredDetails','parametres'));

    }
}