<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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

Route::get('/product/{id}', [ProductController::class, 'index'])->name('product');
Route::get('/', [WelcomeController::class,'index']);
Route::get('/ProductDetail/{id}',[DetailController::class , 'index'])->name('ProductDetail');
Route::get('/order',[OrderController::class , 'index'])->name('order');
Route::get('/product/liste', [ProductController::class, 'liste'])->name('product.liste');