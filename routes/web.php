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
<<<<<<< HEAD
Route::get('/contacts/index','admin\ContactsController@index');//展示
Route::get('/contacts/create','admin\ContactsController@create');//添加
Route::post('/contacts/store','admin\ContactsController@store');//执行添加
Route::get('/contacts/delete/{id}','admin\ContactsController@delete');//删除
Route::get('/contacts/edit/{id}','admin\ContactsController@edit');//编辑
Route::post('/contacts/update/{id}','admin\ContactsController@update');//执行编辑
=======
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

>>>>>>> 0a2c5ead423c316af28d5ee5965657e52475ede7
