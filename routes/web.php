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

Route::group(['prefix' => 'data'], function () {
    Route::any('count-times', 'Data\EventController@countTimes');
    Route::any('count-users', 'Data\EventController@countUsers');
    Route::any('avg-users', 'Data\EventController@avgUsers');
});

Auth::routes();

Route::any('/{any?}', 'HomeController@index')->name('home')->where('any','.*');

