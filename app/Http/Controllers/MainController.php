<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    //about
    public function about() {
        return view('about');
    }

    //services
    public function services()
    {
        return view('services');
    }

    //contact
    public function contact()
    {
        return view('contact');
    }

    //news
    public function news()
    {
        return view('news');
    }

    //news bulletin
    public function newsBulletin()
    {
        return view('news-single');
    }

    //get quote
    public function getQuote()
    {
        return view('getQuote');
    }
    
}
