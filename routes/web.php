<?php


//首页
Route::get('/','admin\index@index');




//登录展示页面
Route::get('login/index','admin\login@index');
//登录执行页面
Route::post('login/login','admin\login@login');
//注册页面
Route::get('login/create','admin\login@create');
//注册执行页面
Route::post('login/ins','admin\login@ins');

Route::get('/','admin\Index@index');

Route::prefix('/care')->group(function () {
    Route::get('index', 'admin\CareController@index');
});

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
Route::post('admin/customer/update/{id}','admin\CustomerController@update');
//删除
Route::any('admin/customer/destroy/{id}','admin\CustomerController@destroy');

