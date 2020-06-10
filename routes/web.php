<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::view('/home', 'home')->name('home');
    Route::get('/user/settings', 'User\\SettingsController@show')->name('user.settings');
    Route::put('/user/settings', 'User\\SettingsController@update');
});
