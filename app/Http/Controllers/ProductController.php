<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;
    $products = Product::where('name', 'like', "%$search%")->get();
    return view('products.index', compact('products'));
}

    public function create(){
      return view('products.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => ['required', 'max:255'],
        'price' => ['required', 'numeric'],
        'category' => ['required', 'in:Electronics,Clothes,Accessories'],
        'description' => ['nullable']
    ]);

    Product::create($validated);
    return redirect('/products');
}

}
