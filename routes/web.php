<?php

use Illuminate\Support\Facades\Route;

/*Главная*/
Route::get('/', '\App\Http\Controllers\PageController@home')->name('home');

/*Пользователь*/

Route::group(['middleware'=>'auth'], function (){
    Route::get('/profile', '\App\Http\Controllers\UserController@profile')->name('profile');
});

/*Регистрация*/
Route::get('/registration', '\App\Http\Controllers\AuthController@viewRegistration')->name('registration');
Route::post('/registration', '\App\Http\Controllers\AuthController@registration')->name('registration_post');

/*Логин*/
Route::get('/login', '\App\Http\Controllers\AuthController@login')->name('login');
Route::post('/login', '\App\Http\Controllers\AuthController@login')->name('login_post');

/*Админ*/
Route::group(['middleware'=>'auth','prefix' => 'admin'], function () {
    Route::get('/', '\App\Http\Controllers\PageController@admin')->name('admin');
});
