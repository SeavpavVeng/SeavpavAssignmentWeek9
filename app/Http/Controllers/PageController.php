<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutPage(){
        return view('pages.about');
    }

    public function propertyPage(){
        return view('pages.property');
    }

    public function blogPage(){
        return view('pages.blog');
    }

    public function contactPage(){
        return view('pages.contact');
    }

    public function estatePage(){
        return view('pages.estate');
    }

  


}
