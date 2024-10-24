<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class OrderController extends Controller
{
    public function index (){
        
        $categories = Category::all();
        return view('order.Form',compact('categories'));
        
    }
}
