<?php


Auth::routes();

//web
Route::get('/', 'HomeController@index')->name('home');

Route::view('/sobre-nosotros', 'web.parts.about._about');
Route::view('/contacto', 'web.parts.about._contact');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', 'BlogController@post')->name('blog.post');

Route::get('/producto/{provider_id}/{slug}', 'ProviderController@index')->name('provider.index');
Route::get('/item/{id}', 'ProductController@item')->name('product.item');