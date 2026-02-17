<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products.index')->with('products', $products)->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'picture' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
        ]);

        $product = new Product();
        $product->category_id = $request->category;
        $product->name = $request->name;
        $newname = uniqid();
        $picture = $request->file('picture');
        $newname .= "." . $picture->getClientOriginalExtension();
        $destinationPath = 'uploads';
        $picture->move($destinationPath, $newname);
        $product->picture = $newname;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;

        if ($product->save()) {
            return redirect()->back();
        } else {
            echo "Error";
        }
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if ($product->delete()) {
            return redirect()->back();
        } else {
            echo "Error";
        }
    }

    public function edit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'picture' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
        ]);

        $id = $request->id_product;
        $product = Product::find($id);
        $product->category_id = $request->category;
        $product->name = $request->name;
        if ($request->file('picture')) {
            $file_path = public_path() . '/uploads/' . $product->picture;
            unlink($file_path);
            $newname = uniqid();
            $picture = $request->file('picture');
            $newname .= "." . $picture->getClientOriginalExtension();
            $destinationPath = 'uploads';
            $picture->move($destinationPath, $newname);
            $product->picture = $newname;
        }
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;

        if ($product->update()) {
            return redirect()->back();
        } else {
            echo "Error";
        }
    }
}
