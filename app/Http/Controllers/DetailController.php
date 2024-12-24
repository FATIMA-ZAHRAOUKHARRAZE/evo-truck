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
    'Taille des particules d\'alimentation',
    'Capacité de traitement',
    'Poids de la machine',
    'Poids en ordre de marche (kg)', 
    'Capacité du godet (m³)', 
    'Puissance nominale (kW)', 
    'Charge nominale (kg)', 
    'Charge du godet (m³)', 
    'Lame semi-U (m³)', 
    'Largeur de voie (mm)', 
    'Capacité de levage nominale (t)', 
    'Flèche allongée (m)', 
    'Puissance du moteur (kW/tr/min)', 
    'Capacité de levage maximale (t)', 
    'Portée de travail maximale et charge de pointe (m/t)', 
    'Hauteur maximale autoportante (m)', 
    'Profondeur de forage (m)', 
    'Diamètre max. du sol de travail (mm)', 
    'Type de lecteur', 
    'Masse à vide (kg)', 
    'Poids total en charge (kg)', 
    'Poids (t)', 
    'Longueur/Inclure le deuxième convoyeur (mm)', 
    'Plaque de rampe (mm)', 
    'Surface de couverture opérationnelle maximale (m²)', 
    'Hauteur de fonctionnement maximale (mm)', 
    'Largeur de travail maximale (mm)', 
    'Dimensions de transport (mm)', 
    'Poids à vide (t)', 
    'Rayon de braquage minimum (mm)', 
    'Poids total (kg)', 
    'Charge utile nominale (kg)', 
    'Vitesse max. (km/h)', 
    'Poids à vide (kg)', 
    'Volume de la poubelle (m³)', 
    'Dimension du contour (mm)', 
    'Type de conduite', 
    'Châssis', 
    'Volume d\'agitation (m³)', 
    'Poids total max. (kg)', 
    'Capacité théorique (m³/h)', 
    'Capacité du mélangeur (m³)', 
    'Capacité installée (kW)', 
    'Modèle de moteur', 
    'Rayon de placement max. (m)', 
    'Hauteur autoportante (m)', 
    'Plage de pivotement', 
    'Flèche entièrement déployée (m)', 
    'Puissance nominale du moteur (kW/tr/min)', 
    'Capacité de levage nominale maximale (t)', 
    'Puissance nominale du moteur (KW/r/min)', 
    'Capacité de levage max. (kg.m)', 
    'Hauteur de travail max. (m)', 
    'Rayon de travail max. (m)', 
    'Modèle', 
    'Puissance nominale (kW/r/min)', 
    'Force de traction/poussée maximale (kN)', 
    'Profondeur du mur (m)', 
    'Épaisseur de paroi (mm)', 
    'Force de traction max. du piston (kN)', 
    'Puissance (kW/tr/min)', 
    'Puissance (kW)', 
    'Largeur de la tranchée (mm)', 
    'Profondeur max. du mur (m)', 
    'Longueur de la tranchée (mm)', 
    'Couple de sortie max. (kN﹒m)', 
    'Capacité nominale (kg)', 
    'Puissance nominale (tr/min)', 
    'Émission de scène', 
    'Émission', 
    'Hauteur de levage maximale (mm)', 
    'Transmission', 
    'Capacité de charge (kg)', 
    'Capacité de charge de la plate-forme étendue (kg)', 
    'Capacité maximale d\'occupation (—)', 
    'Hauteur max. de la plateforme (m)', 
    'Portée de travail max. (m)', 
    'Capacité maximale d\'occupation', 
    'Longueur totale (mm)', 
    'Hauteur totale (mm)', 
    'Largeur hors tout (mm)', 
    'Puissance/vitesse nominale (kW/tr/min)', 
    'Diamètre de serrage (mm)', 
    'Capacité de la pelle (m³)', 
    'Capacité de levage max. (kg)', 
    'Hauteur de levage (mm)', 
    'Charge du godet (kg)', 
    'Poids max. avec contrepoids (kg)', 
    'Charge linéaire statique (N/cm)', 
    'Charge par essieu, avant (kg)', 
    'Charge par essieu, arrière (kg)', // Missing
    'Volume du silo (m³)', // Missing
    'Capacité du réservoir d\'asphalte (L)', // Missing
    'Capacité du réservoir d\'eau (L)', // Missing
    'Volume du silo à poudre (m³)', // Missing
    'Largeur d\'épandage (mm)', // Missing
    'Densité d\'épandage (kg/m²)', // Missing
    'Fabricant', // Missing
    'Largeur de pulvérisation max. (m)', // Missing
    'Quantité d\'asphalte à pulvériser (kg/m²)', // Missing
    'Écart de la quantité de pulvérisation (kg/m²)', // Missing
    'Taper', // Missing
    'Marcher derrière', // Missing
    'Contrepoids total (kg)', // Missing
    'Poids maximal en ordre de marche (kg)', // Missing
    'Fabricant de moteurs', // Missing
    'Puissance nominale (kW/tr/min)', // Missing
    'Largeur maximale du joint (m)', // Missing
    'Quantité de gravier (L/m²)', // Missing
    'Productivité nominale (t/h)', // Missing
    'Agrégat(%)', // Missing
    'Poudre(%)', // Missing
    'Capacité de mélange (kg/patch)', // Missing
    'Asphalte(%)', // Missing
    'Longueur totale de l\'unité (mm)', // Missing
    'Largeur totale de l\'unité (mm)', // Missing
    'Hauteur totale de l\'unité (mm)', // Missing
    'L*l*H (mm)', // Missing
    'Modèle de châssis', // Missing
    'Taille des particules d\'alimentation' // Missing
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