<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategoryForm()
    {
        return view('backend.category.create');
    }

    public function categoryStore(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = str_replace('-', ' ', strtolower($request->name));
        $category->save();
        session()->flash('success', 'Category Added');
        return redirect()->back();
    }

    public function manageCategory()
    {
        $categories = Category::get();
        return view('backend.category.list', compact('categories'));
    }

    public function editCategoryForm($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = str_replace('-', ' ', strtolower($request->name));
        $category->save();
        session()->flash('success', 'Category Updated');
        return redirect()->back();
    }

    public function deleteCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('success', 'Category Deleted');
        return redirect('manage/category');
    }
}
