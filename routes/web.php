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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// route for home
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'user','middleware'=>'auth'],function(){


//route for posts
Route::get('/post/create', 'PostsController@create')->name('posts.create');
Route::post('/post/store', 'PostsController@store')->name('posts.store');
Route::get('/post/posts', 'PostsController@index')->name('posts');
Route::get('/post/hdelete/{id}', 'PostsController@hdelete')->name('posts.hdelete');
Route::get('/post/restore/{id}', 'PostsController@restore')->name('posts.restore');
Route::get('/post/delete/{id}', 'PostsController@destroy')->name('posts.delete');
Route::get('/post/trashed', 'PostsController@trashed')->name('posts.trashed');
Route::get('/post/edit/{id}', 'PostsController@edit')->name('posts.edit');
Route::post('/post/update/{id}', 'PostsController@update')->name('posts.update');
//route for catagory
Route::get('/catagory/catagories', 'CatagoryController@index')->name('catagories');
Route::get('/catagory/create', 'CatagoryController@create')->name('catagory.create');
Route::post('/catagory/store', 'CatagoryController@store')->name('catagory.store');
Route::get('/catagory/edit/{id}', 'CatagoryController@edit')->name('catagory.edit');
Route::post('/catagory/update/{id}', 'CatagoryController@update')->name('catagory.update');
Route::get('/catagory/delete/{id}', 'CatagoryController@destroy')->name('catagory.delete');

});