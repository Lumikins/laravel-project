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
// display all products
Route::get('/', function () {
    return view('products', [
        'heading' => "Products",
        'products' => Product::all()
    ]);
});

// single product display
Route::get('/products/{product}', function (Product $product){
    return view('product', [
        'product' => $product
    ]);
});