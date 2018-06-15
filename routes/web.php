<?php

Route::resource('posts', 'PostsController');
Route::resource('comments', 'CommentsController');

Route::get('/', 'PostsController@index');
Route::get('contact', function() { return view('contact'); })->name('contact');
Route::get('about', function() { return view('about'); })->name('about');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
