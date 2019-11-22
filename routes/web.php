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
