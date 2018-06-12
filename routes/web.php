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

Route::get('/', 'PostsController@index');
Route::resource('posts', 'PostsController');

Route::get('contact', function() {
  return view('contact');
})->name('contact');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
