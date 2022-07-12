<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Http\Request;

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
Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth');

// store product data
Route::post('/products', [ProductController::class, 'store'])->middleware('auth');

// edit form
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->middleware('auth');

// update product
Route::put('/products/{product}', [ProductController::class, 'update'])->middleware('auth');

// delete product
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->middleware('auth');

// manage products
Route::get('/products/manage', [ProductController::class, 'manage'])->middleware('auth');

// single product display
Route::get('/products/{product}', [ProductController::class, 'show']);

// logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// user login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
