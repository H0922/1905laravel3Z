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
Route::get('/contacts/index','admin\ContactsController@index');//展示
Route::get('/contacts/create','admin\ContactsController@create');//添加
Route::post('/contacts/store','admin\ContactsController@store');//执行添加
Route::get('/contacts/delete/{id}','admin\ContactsController@delete');//删除
Route::get('/contacts/edit/{id}','admin\ContactsController@edit');//编辑
Route::post('/contacts/update/{id}','admin\ContactsController@update');//执行编辑