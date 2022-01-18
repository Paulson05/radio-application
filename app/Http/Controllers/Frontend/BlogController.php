<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogList(){
        return view('frontend.pages.blog');
    }

    public function singleBlog(){
        return view('frontend.pages.singleblog');
    }
}
