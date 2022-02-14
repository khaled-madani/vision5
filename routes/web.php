<?php

use App\Http\Controllers\formesController;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\siteOneController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

Route::get('/',function(){
    return view('welcome');
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


Route::prefix('/site2')->group(function(){
    Route::get('/',[Site2Controller::class,'index'])->name('indexSite2');
    Route::get('/about',[Site2Controller::class,'about'])->name('aboutSite2');
    Route::get('/post/{text}',[Site2Controller::class,'post'])->name('postSite2');
    Route::get('/contact',[Site2Controller::class,'contact'])->name('contactSite2');
});


Route::prefix('/form')->group(function (){
    Route::get('/form1',[formesController::class,'form1']);
    Route::post('/form1',[formesController::class,'form1Submit'])->name('form1');


    Route::get('/form2',[formesController::class,'form2']);
    Route::post('/form2',[formesController::class,'form2Submit'])->name('form2');


    Route::get('/form3',[formesController::class,'form3']);
    Route::post('/form3',[formesController::class,'form3Submit'])->name('form3');


    Route::get('/form4',[formesController::class,'form4']);
    Route::post('/form4',[formesController::class,'form4Submit'])->name('form4');
});

