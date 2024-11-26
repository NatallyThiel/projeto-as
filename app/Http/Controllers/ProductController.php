<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {

        if (!Gate::authorize('create', Product::class))
        {
            return redirect('products');
        }


        $categories = Category::all();
        return view('products.create', compact('categories'));

    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('products')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {   

        if (!Gate::authorize('update', Product::class))
        {
            return redirect('products');
        }

        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));

    }

    public function update(Request $request, $id)
    {       
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect('products')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {

        if (!Gate::authorize('destroy', Product::class))
        {
            return redirect('products');
        }

        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('products')->with('success', 'Product deleted successfully.');
    }

}
