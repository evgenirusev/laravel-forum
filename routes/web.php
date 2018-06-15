<?php
Route::resource('posts', 'PostsController');
Route::resource('comments', 'CommentsController');

Route::get('/', 'PostsController@index')->name('home');
Route::get('contact', function() { return view('contact'); })->name('contact');
Route::get('about', function() { return view('about'); })->name('about');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');
