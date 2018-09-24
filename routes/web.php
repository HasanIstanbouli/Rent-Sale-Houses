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
/*
 * we use resource controller so we don't have to use the commented Routes below
 * Description in https://laravel.com/docs/5.4/controllers#resource-controllers
 * and in https://stackoverflow.com/questions/23505875/laravel-routeresource-vs-routecontroller
 *
 */
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/houses','HousesController@index')->name('houses');
Route::get('/my_houses','HomeController@show')->name('my_houses');
Route::get('/add_house','HousesController@showAddHouse')->name('add_house');
Route::Post('/houses','HousesController@filterHousese')->name('houses');
Route::Post('form','HousesController@store')->name('form');
Route::delete('/deletehouse','HousesController@destroy')->name('deletehouse');
Route::get('delete/house','HousesController@destroy')->name('delete.house');
//Route::get('/more','HousesController@show')->name('more');
