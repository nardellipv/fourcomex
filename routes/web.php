<?php


Auth::routes();

//web
Route::get('/', 'HomeController@index')->name('home');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', 'BlogController@post')->name('blog.post');

