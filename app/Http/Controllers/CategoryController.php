<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showAddCategoryForm()
    {
        return view('admin.category.add-category-form');
    }
    public function showManageCategoryForm()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view('admin.category.manage-category-form',['categories'=>$categories]);
    }
    public function saveNewCategory(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/category/add-category')->with('message','Category Add successfully !!');
    }

    public function unpublishedNewsCategory($id){
        $unpublishedCategoryById = Category::find($id);
        $unpublishedCategoryById->publication_status = 0;
        $unpublishedCategoryById->save();
        return redirect('/category/manage-category')->with('message','Category Unpublished successfully !!');
    }

    public function publishedNewsCategory($id){
        $publishedCategoryById = Category::find($id);
        $publishedCategoryById->publication_status = 1;
        $publishedCategoryById->save();
        return redirect('/category/manage-category')->with('message','Category published successfully !!');


    }
    public function editCategoryForm($id){
        $categoryById = Category::find($id);
        return view('admin.category.edit-category-form',['category'=>$categoryById]);

    }
    public function updateCategory(Request $request){
        $category = new Category();
        $categoryById = $category->find($request->category_id);
        $categoryById->category_name = $request->category_name;
        $categoryById->category_description = $request->category_description;
        $categoryById->publication_status = $request->publication_status;
        $categoryById->save();
        return redirect('/category/manage-category')->with('message','Category update successfully !!');
    }
    public function deleteNewsCategory($id){
        $deleteCategoryById = Category::find($id);
        $deleteCategoryById->delete();
        return redirect('/category/manage-category')->with('message','Category delete successfully !!');
    }

}
