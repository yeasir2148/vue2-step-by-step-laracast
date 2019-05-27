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
    return view('welcome1');
});

Route::get('/project/create','FormController@create' );
Route::get('/statuses', function() {
   $response['statuses'] = App\Status::with('user:id,name')->get();
   return $response;
});

Route::post('/project','FormController@store' );
