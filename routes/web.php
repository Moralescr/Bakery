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
//Route::redirect('/', 'index');

Auth::routes();

//Front-end routes
Route::get('/', 'Web\PageController@index')->name('index');
Route::get('blog', 'Web\PageController@blog')->name('blog');
Route::get('post/{slug}', 'Web\PageController@product')->name('post');
Route::get('category/{slug}', 'Web\PageController@category')->name('category');
Route::get('tag/{slug}', 'Web\PageController@tag')->name('tag');

Route::get('gallery', 'Web\PageController@gallery')->name('gallery');
Route::get('about', 'Web\PageController@about')->name('about');

//Administration routes
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('products', 'Admin\ProductController');
Route::resource('imagess', 'Admin\ImageController');
Route::get('dashboard', 'Admin\ProductController@dashboard')->name('dashboard');