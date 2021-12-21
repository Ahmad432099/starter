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

//Route::get('/', function () {
////    -> with('data',2)
////    ->with(['string' => 'Ahmad' , 'Age' =>23])
//
//    return view('welcome')  ;
//});
//
//Route::get('/test',function () {
//    return 'Hello';
//});
//
//// route parmetres
//Route::get('/show-number/{id}',function ($id){
//   return $id;
//}) -> name('a');
//
//Route::get('/show-string/{id?}',function (){
//    return 'welcom';
//}) -> name('b');/*
//Route::namespace('Front')-> group(function (){
//
//    // alla route only access controller or method in folder name Front
//    Route::get('users','UserController@showAdminName');
//});
//
//Route::group(['prefix' => 'users1' ,'middleware' => 'auth' ],function (){
//    Route::get('/',function (){
//       return 'Work' ;
//    });
//
//    Route::get('show','UserController::@showname');
//    Route::delete('show','UserController::@showname');
//    Route::get('show','UserController::@showname');
//    Route::put('show','UserController::@showname');
//}
//);*/

//Route::get('check',function(){
//    return 'middleware';
//}) -> middleware('auth');
//
//
//Route::group(['namespace' => 'admin'],function (){
//
//    Route::get('second','SecondControllre@ShowString');
//    Route::get('users2','SecondControllre@ShowString0')-> middleware('auth');
//    Route::get('users3','SecondControllre@ShowString1');
//    Route::get('users4','SecondControllre@ShowString2');
//
//});
//Route::get('login',function (){
//   return'Must Be Login To Access this Route' ;
//})-> name('login');



//Route::get('index','Front\UserController@getIndex');
//Route::get('landing',function(){
//   return view('landing') ;
//});

Route::get('about',function(){
    return view('about') ;
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')-> middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
