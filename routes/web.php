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
    return view('content.welcome');
});
Route::get('/welcome', function(){
    return view("content.welcome");
});
Route::get('/menu', function () {
    return view('content.menu');
});
Route::get('/about', function(){
    return view("content.AboutUs");
});
Route::get('/contact', function(){
    return view("content.ContactUs");
});
Route::get('/content/breakfast', function(){
    return view("content.breakfast");
});
Route::get('/content/lunch', function(){
    return view("content.lunch");
});
Route::get('/content/dinner', function(){
    return view("content.dinner");
});
Route::get('/content/readymeals', function(){
    return view("content.readymeals");
});
Route::get('/profile', function(){
    return view("content.profile");
});
Route::get('/editmenu', function(){
    return view("content.editmenu");
});
Route::get('/showallusers', 'UsersController@showallusers');
Route::get('/showallmenu', 'itemsController@showallmenu');
Route::get('/logout',function(){
    Auth::logout();
    return view('/content.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','UsersController');
Route::resource('items','ItemsController');

