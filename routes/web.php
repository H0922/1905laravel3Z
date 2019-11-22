<?php


Route::get('/','admin\Index@index');

Route::prefix('/care')->group(function () {
    Route::get('index', 'admin\CareController@index');
});