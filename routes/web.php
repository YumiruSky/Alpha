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
    return view('welcome',['name'=>"Visitor"]);
})->name('default');

Route::view('Yumiru','welcome',['name'=>"Yumiru"])->name('welYmr');

Route::get('myHome','Mycontroller@index')->middleware('token');

Route::get('redirect',function(){
    return redirect()->route('default');
})->name('redirectTest');

Route::get('test02','TestCtrl02@index')->name('test02');
Route::get('test03','TestCtrl03@index')->name('test03');

//Route::get('user','UserController@showAll');
Route::get('user/{id}','UserController@show');

Route::get('member','MemberController@index');
Route::get('pdtContent','PdtContentController@index');
Route::get('category','CategoryController@index');
Route::get('pdtImage','PdtImageController@index');
Route::get('product','ProductController@index');

Route::get('master',function(){
    return view('master');
});