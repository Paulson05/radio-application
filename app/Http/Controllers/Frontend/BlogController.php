<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogList(){
        $posts = Post::all();

        return view('frontend.pages.blog', ['posts'=>$posts]);
    }

    public function singleBlog(){
        return view('frontend.pages.singleblog');
    }


    function index(Request $request){
        // $posts=Post::orderBy('id','desc')->simplePaginate(1);
        if($request->has('q')){
            $q=$request->q;
            $posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(2);
        }else{
            $posts=Post::orderBy('id','desc')->paginate(2);
        }
        return view('frontend.pages.blog',['posts'=>$posts]);
    }
}
