<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SCategorie;
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

        $scategories = Category::find($id)->SCategory;

        // Récupérer les détails pour tous les produits récupérés
        $details = Detail::whereIn('product_id', $products->pluck('id'))->get();

        // Liste de toutes les colonnes de la table
 $allColumns = DB::getSchemaBuilder()->getColumnListing('details');

// Exclure les colonnes "id" et "product_id"
$columns = collect($allColumns)->reject(function ($column) {
    return in_array($column, ['id', 'product_id']);
})->toArray();
        // Créer une collection pour les détails filtrés
        $filteredDetails = [];

        // Parcourir chaque produit pour obtenir ses détails
        foreach ($products as $product) {
    $productDetails = $details->where('product_id', $product->id);

    // Parcourir chaque enregistrement de détails pour sélectionner les colonnes non nulles
    $finalDetail = $productDetails->map(function ($detail) use ($columns) {
        // Filtrer les colonnes non nulles
        $nonNullColumns = collect($columns)->filter(function ($column) use ($detail) {
            return !is_null($detail->{$column});
        });

        // Si on a au moins une colonne non nulle
        if ($nonNullColumns->count() >= 1) {
            // Limiter au maximum 3 colonnes non nulles aléatoires (ou toutes si moins de 3)
            $selectedColumns = $nonNullColumns->take(3)->toArray();
            // Retourner uniquement les colonnes sélectionnées pour cet enregistrement
            return $detail->only($selectedColumns);
        }
        return null; // Sinon, ne retourne rien
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
        return view('product.index', compact('categories', 'filteredDetails','id','scategories'));
    }
    public function googleTranslateChange(Request $request)
    {

         
        App::setLocale($request->lang);

        Session::put('locale',$request->lang);

        return redirect()->back(); 
    }

  public function filter($cid, $id, $productname = null)
{
    // Fetch all categories
    $categories = Category::all();

    // Get the subcategories for the given category ID
    $scategories = Category::find($id)->SCategory;

    // Start building the product query by filtering on scategorie_id
    $query = Product::where('scategorie_id', $cid);

    // Add the product name filter if provided
    if ($productname) {
        $query->where(function ($query) use ($productname) {
            $query->where('nom_pro', 'like', '%' . $productname . '%')
                  ->orWhereRaw('LOWER(nom_pro) = ?', [strtolower($productname)]);
        });
    }

    // Execute the query
    $products = $query->get();

    // Fetch product details for the retrieved products
    $details = Detail::whereIn('product_id', $products->pluck('id'))->get();

    $allColumns = DB::getSchemaBuilder()->getColumnListing('details');

// Exclure les colonnes "id" et "product_id"
$columns = collect($allColumns)->reject(function ($column) {
    return in_array($column, ['id', 'product_id','created_at','updated_at']);
})->toArray();

    // Prepare the filtered details
    $filteredDetails = [];

    foreach ($products as $product) {
        $productDetails = $details->where('product_id', $product->id);

        $finalDetail = $productDetails->map(function ($detail) use ($columns) {
            // Filter columns with non-null values
            $nonNullColumns = collect($columns)->filter(function ($column) use ($detail) {
                return !is_null($detail->{$column});
            });

            // Select 3 random columns if there are at least 3 non-null values
            if ($nonNullColumns->count() >= 3) {
                $randomColumns = $nonNullColumns->random(3)->toArray();
                return $detail->only($randomColumns);
            }
            return null;
        })->filter();

        // Limit to 3 records
        $finalDetails = $finalDetail->take(3);

        // Store the final details for this product
        $filteredDetails[$product->id] = [
            'product' => $product,
            'details' => $finalDetails
        ];
    }

    return view("product.filtered", compact('id','cid', 'categories', 'filteredDetails', 'scategories'));
}
}

