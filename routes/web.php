<?php

use App\Http\Controllers\ProductController;
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
Route::get('/', [ProductController::class, 'index']);

// create form
Route::get('/products/create', [ProductController::class, 'create']);

// store product data
Route::post('/products', [ProductController::class, 'store']);

// edit form
Route::get('/products/{product}/edit', [ProductController::class, 'edit']);

// update product
Route::put('/products/{product}', [ProductController::class, 'update']);

// delete product
Route::delete('/products/{product}', [ProductController::class, 'destroy']);

// single product display
Route::get('/products/{product}', [ProductController::class, 'show']);