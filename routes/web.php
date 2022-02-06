<?php

use App\Http\Controllers\siteOneController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

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

// Route::prefix('admin')->group(function(){
// Route::get('/',function(){
//     return "Welcome admin";
// });
// Route::get('/posts',function(){
//     return 'admin Posts';
// });
// Route::get('/articles',function(){
//     return 'admin articles';
// });
// Route::get('/users  ',function(){
//     return 'admin users';
// })->name('admin_user');
// });



// Route::prefix('admin15')->group(function(){
//     Route::get('/',function(){
//         return "admin 15";
//     });
// });


// Route::prefix('test')->group(function(){
//     Route::get('/',[testController::class , 'index'])->name('testPage');
//     //Route::get('/text2', 'textController@index');    هذا الشكل قبل الاصدار 8

//     Route::get('index2' , [testController::class,'index2'])->name('index2');
//     Route::get('index3' , [testController::class,'index3'])->name('index3');
//     Route::get('index4' , [testController::class,'index4'])->name('index4');
//     Route::get('index5' , [testController::class,'index5'])->name('index5');
//     Route::get('index6/{name?}' , [testController::class,'index6'])->name('index6');
// });

Route::prefix('/site1')->group(function(){
    Route::get('/',[siteOneController::class,'index'])->name('indexSite1');
    Route::get('/about',[siteOneController::class,'about'])->name('aboutSite1');
    Route::get('/services',[siteOneController::class,'services'])->name('servicesSite1');
    Route::get('/contact',[siteOneController::class,'contact'])->name('contactSite1');
});





