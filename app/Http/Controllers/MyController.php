<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class MyController extends Controller
{  public function index(){
    $posts=Post::orderby('postdate','Desc')->get();
    return view ('welcome',compact('posts'));
}   
   /* public function index($id)
  {    
       $post=Post::FindOrFail($id); 
            return view('welcome',['post' =>$post]);
      //return view('welcome',['name'=>$slug]);
   } */
    /*public function index($slug)
    {   // dd($slug);
        return view('welcome',['name' =>$slug]);
        //return view('welcome');
    
    } */
}

  