<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
    public function index()
    {
        $title= 'khaled madani';
        $body = "This is new website";
        return view('site2.index',compact('title','body'));
    }

    public function about()
    {
        return view('site2.about');
    }

    public function post()
    {
        return view('site2.post');
    }

    public function contact()
    {
        return view('site2.contact');
    }
}
