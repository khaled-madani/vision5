<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return 'Homepage';
});


Route::get('news',function(){
    return 'News Page';
});

Route::get('news/{num}',function($num){
    return 'Singel News Page :' . $num;
});


Route::get('users/{name?}',function($name){
    return "Welcome : $name";
});















