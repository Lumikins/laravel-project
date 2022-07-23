<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
  // show all products 
  public function index()
  {
    return view('products.index', [
      'products' => Product::latest()->paginate(6) // can also use simplePaginate for just prev/next buttons
    ]);
  }

  // show single product
  public function show(Product $product)
  {
    return view('products.show', [
      'product' => $product
    ]);
  }

  // create from
  public function create()
  {
    return view('products.create');
  }

  // store product data
  public function store(Request $request)
  {
    $formFields = $request->validate([
      'name' => ['required', Rule::unique('products', 'name')],
      'price' => 'required',
      'is_sale' => 'required',
      'is_published' => 'required',
      'category_id' => 'required',
      'size' => 'required',
      'reference' => ['required', Rule::unique('products', 'reference')],
      'description' => 'required',
    ]);

    if ($request->hasFile('image')) {
      $formFields['image'] = $request->file('image')->store('images', 'public');
    }
    $formFields['user_id'] = auth()->id();
    Product::create($formFields);
    return redirect('/')->with('message', 'Produit ajouté à la base de données');
  }

  // show edit form
  public function edit(Product $product)
  {
    return view('products.edit', ['product' => $product]);
  }

  // update product data
  public function update(Request $request, Product $product)
  {
    // check if logged in user is owner
    if ($product->user_id != auth()->id()) {
      abort(403, 'Action non autorisée');
    }

    $formFields = $request->validate([
      'name' => 'required',
      'price' => 'required',
      'is_sale' => 'required',
      'is_published' => 'required',
      'category_id' => 'required',
      'size' => 'required',
      'reference' => 'required',
      'description' => 'required',
    ]);

    if ($request->hasFile('image')) {
      $formFields['image'] = $request->file('image')->store('images', 'public');
    }

    $product->update($formFields);
    return back()->with('message', 'Produit mis à jour avec succès');
  }

  // delete product
  public function destroy(Product $product)
  {

    // check if logged in user is owner
    if ($product->user_id != auth()->id()) {
      abort(403, 'Action non autorisée');
    }
    $product->delete();
    return redirect('/')->with('message', 'Produit supprimé avec succès');
  }

  // manage product
  public function manage()
  {
    return view('products.manage', ['products' => Product::all()]);
  }
}
