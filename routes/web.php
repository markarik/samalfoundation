<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});



Auth::routes();
Route::get('/','User\WelcomeController@index')->name('user.home');

Route::get('/home', 'HomeController@index')->name('home');
