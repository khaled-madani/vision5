<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        return 'This is index page5';
    }
    public function index2()
    {
        return 'index2 page';
    }

    public function index3()
    {
        return 'index3 page';
    }

    public function index4()
    {
        return 'index4 page';
    }


    public function index5()
    {
        return 'index5 page';
    }
    public function index6($name = null)
    {
        return 'index6 page : ' .  $name;
    }
}
