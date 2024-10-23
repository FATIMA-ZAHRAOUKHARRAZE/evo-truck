<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // code pour index.product
    public function index($id)
{
    // Récupérer les produits qui appartiennent à la catégorie spécifiée
    $products = Product::where('category_id', $id)->get();
    // Passer les produits à la vue
    return view('product.index', compact('products'));
}
}