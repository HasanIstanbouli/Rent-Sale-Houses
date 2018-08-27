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
Route::resource('houses','HousesController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/houses','HousesController@index')->name('houses');
Route::get('/my_houses','HomeController@show')->name('my_houses');
Route::get('/add_house','HousesController@showAddHouse')->name('add_house');
Route::Post('form','HousesController@store');