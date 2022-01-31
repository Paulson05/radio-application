<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogList(){
        $posts = Post::all();
        $categories=Category::orderBy('id','desc')->get();
        $tags = Tags::all();
        return view('frontend.pages.blog', ['posts'=>$posts, 'categories'=>$categories , 'tags'=>$tags]);
    }




    function index(Request $request){
        // $posts=Post::orderBy('id','desc')->simplePaginate(1);
        if($request->has('q')){
            $q=$request->q;
            $posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(2);
        }else{
            $posts=Post::orderBy('id','desc')->paginate(2);
        }
        $categories=Category::orderBy('id','desc')->get();


        return view('frontend.pages.blog',['posts'=>$posts, 'categories'=>$categories]);
    }

    function detail(Request $request,$slug,$postId){
        // Update post count

//        Post::find($postId)->increment('views');

        $detail=Post::find($postId);
        $tags = Tags::all();
        return view('frontend.pages.singleblog',['detail'=>$detail, 'tags'=>$tags]);
    }

    function category(Request $request,$cat_slug,$cat_id){
        $category=Category::find($cat_id);
        $posts=Post::where('categories_id',$cat_id)->orderBy('id','desc')->paginate(2);
        return view('frontend.pages.category',['posts'=>$posts,'category'=>$category]);
    }

}
