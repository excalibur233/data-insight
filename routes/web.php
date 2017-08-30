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

Route::group(['prefix' => 'event-types'], function () {
    Route::any('all', 'Data\EventTypeController@index');
    Route::any('detail', 'Data\EventTypeController@show');
});

Route::group(['prefix' => 'data'], function () {

});

Route::any('/{any?}', 'HomeController@index')->name('home')->where('any','.*');



