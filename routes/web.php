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

Route::get('/register', 'AuthController@index');
Route::get('/verify/{token}', 'AuthController@verify');
Route::post('/register', 'AuthController@register')->name('register');
Route::post('/login', 'AuthController@login')->name('login')->middleware('login');
Route::get('/login', function (){ return redirect('/');});
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::post('/recovery', 'AuthController@recovery')->name('recovery');



Route::get('/', 'MainController@index');
Route::get('/watch/{slug}', 'MainController@single')->name('watch');
Route::get('/test', 'MainController@test');
Route::get('/news', 'MainController@news')->name('news');
Route::get('/user/edit', 'MainController@editUser')->name('edit')->middleware('auth');








Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::get('/', 'PicturesController@index');
    Route::resource('/pictures', 'PicturesController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/genres', 'GenresController');
    Route::resource('/actors', 'ActorsController');
    Route::resource('/users', 'UsersController');
    Route::resource('/directors', 'DirectorsController');
    Route::resource('/countries', 'CountriesController');


    Route::get('/test', function (){
        return view('admin.pictures.test');
    });
});



Route::get('/home', 'HomeController@index')->name('home');
