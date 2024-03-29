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

Route::get('/', function (){
  return view('auth.register');
});

Route::post('/', function (){
  return view('auth.login');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/newsfeed', 'HomeController@newsfeed');
