<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        //? Kalo Mau Menambahkan data ke database
        //? Product::create() artinya memanggil methode dari Model Product dengan methode yang bernama create
        Product::create([
            'name' => $request->name,
            'description' => $request->descript,
            'price' => $request->price,
        ]);

        return redirect('/product');
    }

    public function edit(Product $product)
    {

        return view('product.edit', compact('product'));
    }

    function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->description = $request->descript;
        $product->price = $request->price;
        $product->save();
        return redirect('/product');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/product');
    }
}
