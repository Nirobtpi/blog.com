<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function index (){
        $categories=Category::orderBy('id','DESC')->simplePaginate(2);
        return view('backend.category.category-list', compact('categories'));
    }

    function add_category(){
        return view('backend.category.add-category');
    }

    function insert_category(Request $request){
        
        $request->validate([
            'name'=>['required','unique:categories,name'],
            'slug'=>['required','unique:categories,slug']
        ],[
            'name.required'=>'Category Name Is Required',
            'name.unique'=>'Please Enter A Unique Category Name',
            'slug.required'=>'Slug Is Required',
            'slug.unique'=>'Please Enter A Unique Slug',
        ]);

        $slug=strtolower(str_replace(' ','-',$request->slug));

        Category::create([
            'name'=>$request->name,
            'slug'=>$slug,
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
        ]);

        return back()->with('success','Category Created Successfully');
    }

    function category_edit($id){
        $category=Category::findOrFail($id);
        return view('backend.category.edit-category',compact('category'));
    }
    function edit($id, Request $request){
        $request->validate([
            'name'=>['required','unique:categories,name,'.$id],
            'slug'=>['required','unique:categories,slug,'.$id]
        ],[
            'name.required'=>'Category Name Is Required',
            'name.unique'=>'Please Enter A Unique Category Name',
            'slug.required'=>'Slug Is Required',
            'slug.unique'=>'Please Enter A Unique Slug',
        ]);

         $slug=strtolower(str_replace(' ','-',$request->slug));

        Category::findOrFail($id)->update([
            'name'=>$request->name,
            'slug'=>$slug,
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
        ]);
         return back()->with('success','Category Updated Successfully');
    }

    function delete($id){
        Category::findOrFail($id)->delete();
        return back()->with('success','Category Deleted Successfully');

    }

    function restore_list(){
        $categories=Category::onlyTrashed()->simplePaginate(1);
        return view('backend.category.deleted-category-list',compact('categories'));
    }

    function restore($id){
        Category::onlyTrashed()->findOrFail($id)->restore();

        return back()->with('success','Category Restore Successfully');

    }

    function force_delete($id){
         Category::onlyTrashed()->findOrFail($id)->forceDelete();

        return back()->with('success','Category Parmanent Deleted Successfully');
    }
}
