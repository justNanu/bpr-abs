<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::take(4)->get();

        return view('welcome', compact('products'));
    }

    public function products()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function product(Product $product)
    {
        return view('product', [
            'product' => $product,
            'products' => Product::take(3)->get(),
        ]);
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function simulasi()
    {
        return view('simulasi');
    }
}
