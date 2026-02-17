<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ResourceBundle;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;

        if ($category->save()) {
            return redirect()->back();
        } else {
            echo "Error";
        }
    }

    public function delete($id)
    {
        $category = Category::find($id);

        if ($category->delete()) {
            return redirect()->back();
        } else {
            echo "Error";
        }
    }

    public function edit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $id = $request->id_category;
        $categorie = Category::find($id);
        $categorie->name = $request->name;
        $categorie->description = $request->description;

        if ($categorie->update()) {
            return redirect()->back();
        } else {
            echo "Error";
        }
    }
}
