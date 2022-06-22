<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('products', [
        'heading' => "Products",
        'products' => Product::all()
    ]);
});

Route::get('/products/{id}', function ($id){
    return view('product', [
        'product' => Product::find($id)
    ]);
});