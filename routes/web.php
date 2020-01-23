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
Route::get('/test', 'MainController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::resource('/pictures', 'PicturesController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/genres', 'GenresController');
    Route::resource('/actors', 'ActorsController');
//    Route::resource('/users', 'UsersController');
    Route::resource('/directors', 'DirectorsController');
    Route::resource('/countries', 'CountriesController');


    Route::get('/test', function (){
        return view('admin.pictures.test');
    });
});

