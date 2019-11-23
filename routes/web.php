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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/','admin\index@index');


Route::get('client/create','admin\Client@create');
Route::get('client/index','admin\Client@index');
Route::post('client/store','admin\Client@store');
Route::get('client/destroy/{cli_id}','admin\Client@destroy');
Route::get('client/edit/{cli_id}','admin\Client@edit');
Route::post('client/update/{cli_id}','admin\Client@update');