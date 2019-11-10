<?php


Auth::routes();

//web
Route::get('/', 'HomeController@index')->name('home');

Route::get('/sobre-nosotros', 'HomeController@about')->name('about.view');
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

Route::get('/admin/categoria', 'Admin\CategoryController@listCategory')->name('list.category');
    Route::get('/admin/categoria/{id}', 'Admin\CategoryController@editCategory')->name('edit.category');
    Route::post('/admin/categoria-actualizar/{id}', 'Admin\CategoryController@updateCategory')->name('update.category');
    Route::get('/admin/categoria-eliminar/{id}', 'Admin\CategoryController@deleteCategory')->name('delete.category');
    Route::get('/admin/agregar-categoria', 'Admin\CategoryController@addCategory')->name('add.category');
    Route::post('/admin/agregar-categoria', 'Admin\CategoryController@storeCategory')->name('store.category');

Route::get('/admin/productos', 'Admin\ProductController@listProduct')->name('list.product');
    Route::get('/admin/producto/{id}', 'Admin\ProductController@editProduct')->name('edit.product');
    Route::post('/admin/producto-actualizar/{id}', 'Admin\ProductController@updateProduct')->name('update.product');
    Route::get('/admin/producto-eliminar/{id}', 'Admin\ProductController@deleteProduct')->name('delete.product');
    Route::get('/admin/agregar-producto', 'Admin\ProductController@addProduct')->name('add.product');
    Route::post('/admin/agregar-producto', 'Admin\ProductController@storeProduct')->name('store.product');

Route::get('/admin/slider', 'Admin\SectionController@sliderView')->name('slider.view');
    Route::post('/admin/agregar-slider', 'Admin\SectionController@addSlider')->name('add.slider');
    Route::get('/admin/slider-actualizar/{id}', 'Admin\SectionController@editSlider')->name('edit.slider');
    Route::post('/admin/update-actualizar/{id}', 'Admin\SectionController@updateSlider')->name('update.slider');
    Route::get('/admin/slider-eliminar/{id}', 'Admin\SectionController@deleteslider')->name('delete.slider');

Route::get('/admin/about','Admin\SectionController@viewAbout')->name('view.about');
    Route::post('/admin/agregar-about', 'Admin\SectionController@addAbout')->name('add.about');
    Route::get('/admin/about-actualizar/{id}', 'Admin\SectionController@editAbout')->name('edit.about');
    Route::post('/admin/about-actualizar/{id}', 'Admin\SectionController@updateAbout')->name('update.about');
    Route::get('/admin/about-eliminar/{id}', 'Admin\SectionController@deleteAbout')->name('delete.about');