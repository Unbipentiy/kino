<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\PageController@home')->name('home');
Route::get('/', '\App\Http\Controllers\PageController@admin')->name('admin');
Route::get('/', '\App\Http\Controllers\AuthController@viewRegistration')->name('registration');
Route::get('/', '\App\Http\Controllers\AuthController@login')->name('login');
