<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Blogs;

class catController extends Controller
{
    public function getCategory($category_id)
    {
        $category = Categories::find($category_id);
        $blogs = Blogs::where('category_id','=',$category_id)->paginate(3);
        return view('client.catBlog', compact('blogs','category_id'));        
    }
}