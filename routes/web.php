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

//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('category', 'Category\CategoryController', ['only' => ['index', 'create', 'edit', 'store', 'update']]);
    Route::get('article/delete/{id}', 'Article\ArticleController@delete')->name('article.delete');
    Route::resource('article', 'Article\ArticleController', ['only' => ['index', 'create', 'edit', 'show', 'store', 'update', 'destroy']]);
});