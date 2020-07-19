<?php

use Illuminate\Support\Facades\Route;

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

// client 
Route::get('/', 'layoutController@index')->name('home');
Route::get('/about', 'layoutController@about')->name('about');
Route::get('/blog', 'layoutController@blog')->name('blog');
Route::get('/blog/{id}', 'layoutController@blogDetail')->name('blogDetail');
Route::get('/contact', 'layoutController@contact')->name('contact');
Route::get('/services', 'layoutController@services')->name('services');
Route::get('/portfolio', 'layoutController@portfolio')->name('portfolio');
Route::get('/portfolioDetail', 'layoutController@portfolioDetail')->name('portfolioDetail');

Route::get('/category/{id}', 'catController@getCategory')->name('category');


// auth
Auth::routes();

// admin
// pages
Route::group(['middleware' => ['auth']], function(){
  Route::get('/leavemealone', 'adminController@index')->name('adminHome');
  Route::get('/create', 'adminController@createBlog')->name('create');
  Route::get('/edit/{id}', 'adminController@editBlogPage')->name('editBlogPage');
// methods
  Route::post('/create', 'adminController@storeCreateBlog')->name('storeCreate');
  Route::get('/delete/{id}', 'adminController@deleteBlog')->name('deleteBlog');
  Route::post('/edit/{id}', 'adminController@editBlog')->name('editBlog');
});





