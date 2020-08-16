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
    return view('welcome');
});
Route::get('/welcome', function(){
    return view("welcome");
});
Route::get('/about', function(){
    return view("content.AboutUs");
});
Route::get('/contact', function(){
    return view("content.ContactUs");
});

Route::get('/logout',function(){
    Auth::logout();
    return view('/welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

