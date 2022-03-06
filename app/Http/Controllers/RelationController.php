<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function one_to_one()
    {
        $user = User::find(1);


        dd($user->insurance);
    }
}
