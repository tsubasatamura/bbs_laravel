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

Route::get('/', 'BBSController@index');

Route::get('bbsforlaravel', 'BBSController@index');

Route::get('insert', 'BBSController@insertView');
Route::post('insert', 'BBSController@insertExecute');

Route::post('update', 'BBSController@updateView');
Route::post('updateExecute', 'BBSController@updateExecute');

Route::post('delete', 'BBSController@deleteView');
Route::post('deleteExecute', 'BBSController@deleteExecute');
