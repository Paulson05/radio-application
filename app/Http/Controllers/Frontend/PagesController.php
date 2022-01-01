<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about()
    {
    return view('frontend.pages.about');
    }
     public function contactUs(){
        return view('frontend.pages.contact-us');
     }

     public function  scheduler(){
        return view('frontend.pages.scheduler');
     }
}
