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

Route::get('/', 'PagesController@index');

Route::resource('wselessons', 'WSELessonsController');
// Route::get('/wse', 'WSELessonsController@index');
// Route::get('/wse/create', 'WSELessonsController@create');
// Route::get('/wse/{lesson}', 'WSELessonsController@show');
// Route::post('/wse', 'WSELessonsController@store');
// Route::get('/wse/{lesson}/edit', 'WSELessonsController@edit');
// Route::patch('/wse/{lesson}', 'WSELessonsController@update');
// Route::delete('/wse/{lesson}', 'WSELessonsController@destroy');