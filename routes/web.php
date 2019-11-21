<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return 'welcome';
    return view('welcome');
    //return redirect('welcome');
});
//Route::get('welcome',function(){
//    return'welcome';
//});

Route::get('say/{name?}',['as'=>'hello.index',function($name='Everybody'){
    return view('welcome');
}]);

Route::get('hi/{name?}',function($name = 'Everybody'){
    return'hi,'.$name;
});

Route::get('dashboard',function(){
    return'dashboard';
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return'admin dashboard';
    });
});

