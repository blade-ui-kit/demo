<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::view('/home', 'home')->name('home');
    Route::get('/settings', 'SettingsController@show')->name('settings');
    Route::put('/settings', 'SettingsController@update');
});
