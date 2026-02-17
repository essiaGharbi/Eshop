<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('guest.home')->with('categories', $categories)->with('products', $products);
    }

    public function shop()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('guest.shop')->with('categories', $categories)->with('products', $products);
    }

    public function details($id)
    {
        $prod = Product::all();
        $products = Product::findOrFail($id);
        $product = Product::where('id', '!=', $id)->get();
        $categories = Category::all();
        return view('guest.productdetails', compact('categories', 'products', 'product', 'prod'));
    }
}
