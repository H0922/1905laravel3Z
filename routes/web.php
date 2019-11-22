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
//添加
Route::get('admin/customer/add','admin\CustomerController@create');
Route::post('admin/customer/store','admin\CustomerController@store');
//列表
Route::get('admin/customer/index','admin\CustomerController@index');
//详情
Route::any('admin/customer/show/{id}','admin\CustomerController@show');
//修改
Route::get('admin/customer/edit/{id}','admin\CustomerController@edit');
Route::post('admin/customer/edit/{id}','admin\CustomerController@update');
//删除
Route::any('admin/customer/destroy/{id}','admin\CustomerController@destroy');
