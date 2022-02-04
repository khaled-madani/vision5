<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return 'Homepage';
});


Route::get('news',function(){
    return 'News Page';
});



// Route::get('users/{name?}',function($name = 'khaled'){
//     return "Welcome : $name";
// });
Route::get('news/{num}',function($num){
    return 'Singel News Page :' . $num;
})->whereNumber('num');   // helper method laravel  فقط يكون ارقام


Route::get('users/{name?}',function($name){
    return "Welcome : $name";
})->whereAlpha('name');  // تقبل فقط حروف


Route::get('users2/{name?}',function($name){
    return "Welcome : $name";
})->whereAlphaNumeric('name');   //  تقبل فقط حروف و ارقام



// Route::get('users/{name?}',function($name){
//     return "Welcome : $name";
// });


Route::get('profile/{name?}',function($name3 = null){
    return "Welcome : $name3";
});

// Route::get('admin/post',function(){
//     return "Welcome admain";
// });

Route::prefix('admin')->group(function(){
Route::get('/',function(){
    return "Welcome admin";
});
Route::get('/posts',function(){
    return 'admin Posts';
});
Route::get('/articles',function(){
    return 'admin articles';
});
Route::get('/users  ',function(){
    return 'admin users';
})->name('admin_user');
});













