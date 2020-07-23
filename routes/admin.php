<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'admin','middleware' => 'auth:admin'],function(){

    Route::get('/','DashboardController@index')->name('admin.dashboard');

});

Route::group(['namespace' => 'admin','middleware'=>'guest:admin'],function (){
    Route::get('login','LoginController@getLoginForm')->name('admin.get.login');
    Route::post('login','LoginController@login')->name('admin.login');
});


