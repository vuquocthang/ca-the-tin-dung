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


Route::get('/', 'HomeController@index');

Route::get('/bai-viet/', 'HomeController@post');

Route::group(['namespace' => 'Admin'], function () {

    #login
    Route::get('admin/login', 'LoginController@showLoginForm');

    Route::post('admin/login', 'LoginController@login');

    #seo
    Route::post('admin/seo', 'HomeController@seo');

    #logout
    Route::get('admin/logout', 'LoginController@logout');

    #home
    Route::get('admin/home', 'HomeController@index');

    #post
    Route::get('admin/posts', 'PostController@lists');

    Route::get('admin/post/del/{id}', 'PostController@del');

    Route::get('admin/post/addForm', 'PostController@showAddForm');

    Route::get('admin/post/editForm/{id}', 'PostController@showEditForm');

    Route::post('admin/post/create', 'PostController@create');

    Route::post('admin/post/update/{id}', 'PostController@update');

    #image upload
    Route::get('admin/image/uploadForm', 'UploadImageController@showUploadForm');

    Route::post('admin/image/upload', 'UploadImageController@upload');

    Route::get('admin/images', 'UploadImageController@images');

});

