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

/***************    Auth routes  **********************************/
Route::group(['middleware' => 'auth'], function() {

    Route::get('categories/create','CategoriesController@create')->name('categories.create');
    Route::post('categories','CategoriesController@store')->name('category.store');

    Route::get('articles/create','ArticlesController@create')->name('articles.create');
    Route::post('articles','ArticlesController@store')->name('article.store');
});


/***************    Site routes  **********************************/
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('404', function () {
    return view('pages.404');
})->name('404');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Route::get('articles','ArticlesController@index')->name('articles.index');
Route::get('articles/{id}', 'ArticlesController@show')->name('articles.show');
Route::get('categories','CategoriesController@index')->name('categories.index');
//Route::get('categories/{id}', 'CategoriesController@show')->name('categories.show');


