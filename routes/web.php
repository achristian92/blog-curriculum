<?php

Auth::routes();

Route::get('/', function () { return view('cv.index'); });

Route::resource('user','Backend\Cv\UsersController');
Route::get('user/papelera/total','Backend\Cv\UsersController@trashed')->name('user.trashed');
Route::patch('/user/{user}/papelera','Backend\Cv\UsersController@trash')->name('user.patch');
Route::patch('/user/restore/total/{id}','Backend\Cv\UsersController@restore')->name('user.restore');

Route::resource('setting','Backend\Cv\SettingController');
Route::get('/dashboard','HomeController@index')->name('dashboard');
