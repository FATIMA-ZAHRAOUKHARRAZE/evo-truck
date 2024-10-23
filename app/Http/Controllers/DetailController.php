<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class DetailController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        $categories=Category::all();
         return view('product.ProductDetail',compact('product','categories'));
    }
}