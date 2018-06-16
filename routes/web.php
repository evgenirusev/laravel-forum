<?php
Route::resource('posts', 'PostsController');
Route::resource('comments', 'CommentsController');

Route::get('/', 'PostsController@index')->name('home');
Route::get('contact', function() { return view('contact'); })->name('contact');
Route::get('about', function() { return view('about'); })->name('about');

Route::get('/register', 'RegisterController@create')->name('register');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');

Route::get('/contact', 'ContactController@create')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');
