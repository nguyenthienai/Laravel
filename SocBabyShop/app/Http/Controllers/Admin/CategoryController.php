<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use App\Category;

class CategoryController extends Controller
{
    public function listCategory()
    {
    	$categories = Category::all();
    	return view ('backend.category', compact('categories'));
    }

    public function createCategory(AddCategoryRequest $request)
    {
    	 $attribute = request()->all();
        Category::create($attribute);
    	return back();
    }

    public function editCategory(Category $category)
    {
    	return view ('backend.editcategory', compact('category'));
    }

     public function storeCategory(Category $category)
    {
    	$attribute = request()->all();
        $category->update($attribute);
    	return redirect (route('category.list'));
    }

    public function deleteCategory(Category $category)
    {
    	$category->delete();
    	return back();
    }
}
