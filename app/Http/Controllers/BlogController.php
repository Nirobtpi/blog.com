<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function blog_list(){
        return view('backend.blog.blog-list');
    }

    function blog(){
        $categories=Category::get();
        return view('backend.blog.add-blog',compact('categories'));
    }
}
