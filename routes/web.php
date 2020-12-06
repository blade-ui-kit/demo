<?php

use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::view('/home', 'home')->name('home');
    Route::get('/settings', [SettingsController::class, 'show'])->name('settings');
    Route::put('/settings', [SettingsController::class, 'update']);
});
