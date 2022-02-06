<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteOneController extends Controller
{
    public function index()
    {
        return view('site1.index');
    }


    public function about()
    {
        return view('site1.about');
    }


    public function services()
    {
        return view('site1.services');
    }


    public function contact()
    {
        return view('site1.contact');
    }

}
