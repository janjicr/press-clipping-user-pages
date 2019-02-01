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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/printed','PrintedsController');
Route::resource('/digital','DigitalsController');

Route::post('/printeds/search','PrintedsController@search')->name('printeds_search');
Route::post('/digitals/search','DigitalsController@search')->name('digitals_search');

Route::get('/printeds/view/{media_slug}/{broj_izdanja}/{created_at}/{neprocitani?}','PrintedsController@view');
Route::post('/digitals/view','DigitalsController@view');

Route::post('/printeds/back','PrintedsController@back')->name('printeds_back');
Route::post('/digitals/back','DigitalsController@back')->name('printeds_back');

