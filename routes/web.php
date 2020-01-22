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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'MainController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::resource('/pictures', 'PicturesController');
    Route::get('/test', function (){
        return view('admin.pictures.test');
    });
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::resource('/categories', 'CategoriesController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::resource('/genres', 'GenresController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::resource('/actors', 'ActorsController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::resource('/users', 'UsersController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::resource('/directors', 'directorsController');
});
