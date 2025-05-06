<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderFormMail;
class OrderController extends Controller
{
    public function index ($id,$name){

        $categories = Category::all();
        $spesificcat = Category::where('id','=',$id)->first()->nom_cat;
        return view('order.Form',compact('categories','spesificcat','name'));

    }



	public function insert(Request $req)
	{
	    $filed = $req->validate([
	        'prod_cat' => 'required|string',
	        'prod_mod' => 'required|string',
	        'name' => 'required|string|max:255',
	        'phone' => 'required|string|max:15',
	        'email' => 'required|email',
	        'country' => 'required|string|max:100',
	        'message' => 'nullable|string|max:1000',
	        'société' => 'required|string|max:255',
	        'activité' => 'required|string|max:255',
	    ]);
	
	    // Enregistrer en base
	    Order::create($filed);
	
	    // Envoyer l'e-mail
	    Mail::to('contact@evo-machinery.com')->send(new OrderFormMail($filed));
	
	    return redirect()->back()->with('success', 'Demande envoyée et enregistrée avec succès !');
	}

}
