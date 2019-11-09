<?php


Auth::routes();

//web
Route::get('/', 'HomeController@index')->name('home');

Route::view('/sobre-nosotros', 'web.parts.about._about');
Route::view('/contacto', 'web.parts.about._contact');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', 'BlogController@post')->name('blog.post');

Route::get('/producto/{provider_id}/{slug}', 'ProviderController@index')->name('provider.index');
Route::get('/item/{slug}', 'ProductController@item')->name('product.item');



//admin
Route::view('/admin/dashboard', 'admin.admin')->name('dashboard');
Route::get('/admin/listado-noticias', 'Admin\NewsController@listNews')->name('list.news');
    Route::view('/admin/agregar-noticia', 'admin.parts.news._add')->name('add.news');
    Route::post('/admin/add-news', 'Admin\NewsController@addNews')->name('addNew.news');
    Route::get('/admin/editar-noticias/{id}', 'Admin\NewsController@editNews')->name('edit.news');
    Route::post('/admin/update-noticias/{id}', 'Admin\NewsController@updateNews')->name('update.news');
    Route::get('/admin/desactivar/{id}', 'Admin\NewsController@desactiveNews')->name('desactive.news');
    Route::get('/admin/activar/{id}', 'Admin\NewsController@activeNews')->name('active.news');
    Route::get('/admin/eliminar/{id}', 'Admin\NewsController@destroyNews')->name('destroy.news');
