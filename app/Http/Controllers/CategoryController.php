<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;

class CategoryController extends Controller
{

    public function showCategory()
    {
        $categories = Category::all();
        return view('category.list', compact('categories'));
    }


    public function createCategory()
    {
        $categories = Category::all();
        return view('category.create', compact('categories'));
    }


    public function store(CreateCategoryRequest $request)
    {
        $categorie = new Category();
        $categorie->name = $request->name;
        $categorie->status = $request->status;
        $categorie->save();
        return redirect()->route('show.category');

    }


    public function updateCategory($id)
    {
        $categorie = Category::findOrFail($id);
        return view('category.update', compact('categorie'));
    }

    public function editCategory(Request $request, $id)
    {
        $categorie = Category::findOrFail($id);
        $categorie->name = $request->name;
        $categorie->status = $request->status;
        $categorie->save();
        return redirect()->route('show.category');
    }


    public function deleteCategory(Request $request, $id)
    {
        $categorie = Category::findOrFail($id);
        $categorie->delete();
        return redirect()->route('show.category');

    }
}
