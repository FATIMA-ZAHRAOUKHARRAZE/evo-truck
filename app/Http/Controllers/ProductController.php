<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    // code pour index.product
    public function index($id)
{
    // Récupérer les produits qui appartiennent à la catégorie spécifiée
    $products = Product::where('category_id', $id)->get();
     $categories=Category::all();
    // Passer les produits à la vue
    return view('product.index', compact('products','categories'));
}
}