<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteOneController extends Controller
{
    public function index()
    {
        $title = "About Us From Controller";
        $body = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis in facere voluptates amet voluptas delectus natus quibusdam excepturi. Omnis, amet officiis. Porro, tempore cupiditate ipsa facere architecto omnis iure doloremque!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis in facere voluptates amet voluptas delectus natus quibusdam excepturi. Omnis, amet officiis. Porro, tempore cupiditate ipsa facere architecto omnis iure doloremque!";
        // return view('site1.index')->with('title',$title)->with('body',$body);
        return view('site1.index',compact('title','body'));
        // return view('site1.index',[
        //     'title' => $title,
        //     'body' => $body
        // ]);

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
