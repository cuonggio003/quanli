<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;


class ProductController extends Controller
{

    public function showProduct()
    {
        $products = Product::all();
        return view('products.list', compact('products'));

    }


    public function createProduct()
    {
        $products = Product::all();
        return view('products.create', compact('products'));
    }


    public function store(CreateProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->amount = $request->amount;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;

        }
        $product->status = $request->status;
        $product->save();
        return redirect()->route('show.product');
    }

    public function updateProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('products.update', compact('product'));
    }

    public function editProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->amount = $request->amount;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;

        }
        $product->status = $request->status;
        $product->save();
        return redirect()->route('show.product');
    }



    public function deleteProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();
        return redirect()->route('show.product');
    }
}
