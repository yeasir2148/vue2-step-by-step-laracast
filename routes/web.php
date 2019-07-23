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

Route::get('/{home?}', function () {
    return view('welcome1');
})->where('home','home');

//Carousel routes

Route::get('/carousel', 'CarouselController@index');

// Project routes
Route::get('/project/create','FormController@create' );
Route::post('/project','FormController@store' );

// Status routes
Route::get('/statuses', 'StatusesController@index');
Route::post('/statuses', 'StatusesController@store');
