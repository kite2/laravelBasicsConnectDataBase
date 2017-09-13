<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;

class CategoryController extends Controller
{
    public function listAllCategories() {
        $categories = Category::all();
        return view("categories.list", ["categories" => $categories]);
    }

    public function showFormAddCategory() {
        return view('categories.add');
    }

    public function createCategory(Request $request) {
        $this->validate($request,[
            'category_name' => 'required|unique:categories,category_name|min :2|max:10',
        ]);
        $category = new Category();
        $category->category_name = $request->input("category_name");
        $category->save();
        return redirect(route("category.list"));
    }

    public function showFormEditCategory(Request $request, $id){
        $category = Category::find($id);
        return view("categories.edit", ["category" => $category]);
    }

    public function updateCategory(Request $request, $id){
        $category = Category::find($id);
        $category->category_name = $request->input("category_name");
        $request->validate([
            "category_name" => "required|unique:categories|max:10",
        ]);
        $category->save();
        return redirect(route("category.list"));
    }

    public function showFormDeleteCategory(Request $request, $id) {
        $category = Category::find($id);
        return view("categories.delete", ["category" => $category]);
    }

    public function deleteCategory(Request $request, $id){
        $category = Category::find($id);
        $category->delete();
        return redirect(route("category.list"));
    }

    //
}
