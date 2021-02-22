<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\PageController@home')->name('home');

Route::get('/registration', '\App\Http\Controllers\AuthController@viewRegistration')->name('registration');
Route::get('/login', '\App\Http\Controllers\AuthController@login')->name('login');

Route::get('/admin', '\App\Http\Controllers\PageController@admin')->name('admin');
