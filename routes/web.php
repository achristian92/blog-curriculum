<?php

Auth::routes();

Route::get('/', function () { return view('cv.index'); });

Route::resource('user','Backend\Cv\UsersController');
Route::resource('setting','Backend\Cv\SettingController');
Route::get('/dashboard','HomeController@index')->name('dashboard');
