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

    public function post($text2)
    {
        // return $text;
        return view('site2.post')->with('text2',$text2);
    }

    public function contact()
    {
        return view('site2.contact');
    }
}
