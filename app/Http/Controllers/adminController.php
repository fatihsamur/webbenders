<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Blogs;
use App\Categories;


class adminController extends Controller
{
    // pages
    // admin home page
    public function index(){
        $blogs = Blogs::orderBy('id','asc')->get();
        return view('admin.home',compact('blogs'));
    }
     // admin new post page
    public function createBlog(){
        return view('admin.create');
    }
     // admin edit post page
    public function editBlogPage($id){
        $blog = Blogs::find($id);
        
        return view('admin.edit',compact('blog'));
    }

    // methods
    // create new post
    public function storeCreateBlog(Request $request){
        $blog = new Blogs;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->author = $request->author ;
        $blog->category_id = $request->category_id ;
        $blog->save();
        $image = $request->image;
        $imageName = $blog->id.'.jpg';
        $image->move(public_path('blog_images'), $imageName);

        return redirect()->route('adminHome');
    }

    // delete post
    public function deleteBlog($id){
        $blog = Blogs::find($id);
        $blog->delete();
        $imgFile = public_path('blog_images').'\\'.$id.'.jpg';
        File::delete($imgFile);

        return redirect()->route('adminHome');
    }
    // edit post
    public function editBlog(Request $request, $id){
        $blog = Blogs::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->author = $request->author ;
        $blog->category_id = $request->category_id ;
        $blog->update();

        $imgFile = public_path('blog_images').'\\'.$id.'.jpg';
        File::delete($imgFile);

        $image = $request->image;
        $imageName = $blog->id.'.jpg';
        $image->move(public_path('blog_images'), $imageName);
       
        return redirect()->route('adminHome');
    }


}
