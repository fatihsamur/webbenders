<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;


class layoutController extends Controller
{
    public function index(){
        $blogs = Blogs::orderBy('id', 'desc')->get();
        return view('client.home',compact('blogs'));
    }
    public function about(){
        return view('client.about');
    }
    public function blog(){
        $blogs = Blogs::orderBy('id','desc')->paginate(3);
        return view('client.blog',compact('blogs'));
    }
    public function blogDetail($id){
        $blogs = Blogs::orderBy('id', 'desc')->get();
        $blog = Blogs::find($id);
        return view('client.blogDetail',compact('blog', 'blogs'));
    }
    public function contact(){
        return view('client.contact');
    }
    public function services(){
        return view('client.services');
    }
    public function portfolio(){
        return view('client.portfolio');
    }
    public function portfolioDetail(){
        return view('client.portfolioDetail');
    }
}
