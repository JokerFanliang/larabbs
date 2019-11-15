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

Route::get('admin/article_type','Admin\ArticleTypeController@index');

//后台首页
Route::get('admin/index/index','Admin\IndexController@index');

//后台文章类别
Route::get('admin/article_type/index','Admin\ArticleTypeController@index');
Route::get('admin/article_type/add','Admin\ArticleTypeController@add');
Route::get('admin/article_type/edit','Admin\ArticleTypeController@edit');

//后台文章内容
Route::get('admin/article/index','Admin\ArticleController@index');
Route::get('admin/article/add','Admin\ArticleController@add');
Route::get('admin/article/edit','Admin\ArticleController@edit');