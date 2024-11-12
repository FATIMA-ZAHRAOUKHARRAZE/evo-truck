<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\SCategorieController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// page about
Route::get('/about',[AboutController::class,'index']);
// page welcome
Route::get('/', [WelcomeController::class,'index']);
//liste de produit pour chaque categorie
Route::get('/product/{id}', [ProductController::class, 'index'])->name('product');
// detail de produit
Route::get('/ProductDetail/{id}',[DetailController::class , 'index'])->name('ProductDetail');
//prendre un ordre pour un produit
Route::get('/form/order/{categoryId}/{productName}',[OrderController::class , 'index'])->name('order');
// liste des category
Route::get('/category', [CategoryController::class, 'liste'])->name('category.liste');
// chercher sur un produit
Route::get('/category/search', [CategoryController::class, 'search'])->name('category.search');
// envoyer les donneés du formulaire d'ordre
Route::post('/form/order', [OrderController::class, 'insert'])->name('order.inser');
// filtrer les produit par category
Route::get('/product/filter/{id}/{cid}/{productname?}', [ProductController::class, 'filter'])->name('product.filter');
// traduction de navbar
Route::get('/translate/change',[ProductController::class,'googleTranslateChange'])->name('translate.change');
// solution page
Route::get('/solution', [SolutionController::class, 'index'])->name('Solution');



