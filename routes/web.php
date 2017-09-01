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

Route::group(['prefix' => 'frontend', 'namespace' => 'Frontend'], function () {
    Route::group(['prefix' => 'event-analysis'], function () {
        Route::get('event-list', 'EventAnalysisController@eventList');
        Route::get('attribute-list', 'EventAnalysisController@attributeList');
        Route::get('query-event-count', 'EventAnalysisController@queryEventCount');
    });
});

Route::group(['prefix' => 'data'], function () {

});

Route::any('/{any?}', 'HomeController@index')->name('home')->where('any','.*');



