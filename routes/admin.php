<?php

use Illuminate\Support\Facades\Route;







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
