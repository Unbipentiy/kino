<?php

use Illuminate\Support\Facades\Route;

/*Главная*/
Route::get('/', '\App\Http\Controllers\PageController@home')->name('home');

/*Регистрация*/
Route::get('/registration', '\App\Http\Controllers\AuthController@viewRegistration')->name('registration');
Route::post('/registration', '\App\Http\Controllers\AuthController@registration');

/*Логин*/
Route::get('/login', '\App\Http\Controllers\AuthController@login')->name('login');
Route::post('/login', '\App\Http\Controllers\AuthController@login');


/*Пользователь*/
Route::group(['middleware'=>'auth'], function (){
    Route::group(['prefix'=>'profile'],function (){
        Route::get('/', '\App\Http\Controllers\UserController@profile')->name('profile');
        Route::get('/update-password', '\App\Http\Controllers\UserController@viewUpdatePassword')->name('update_password');
        Route::post('/update-password', '\App\Http\Controllers\UserController@updatePassword');
        Route::get('/update-profile', '\App\Http\Controllers\UserController@viewUpdateProfile')->name('update_profile');
        Route::post('/update-profile', '\App\Http\Controllers\UserController@updateProfile');

    });
    Route::get('/logout', '\App\Http\Controllers\AuthController@logout')->name('logout');
});

/*Админ*/
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', '\App\Http\Controllers\PageController@admin')->name('admin');
    Route::get('/users', '\App\Http\Controllers\Admin\UserController@viewAll')->name('admin_users');
    Route::get('/users/{id}', '\App\Http\Controllers\Admin\UserController@view')->name('admin_user');
    Route::post('/users/{id}', '\App\Http\Controllers\Admin\UserController@update')->name('admin_user_update');
});
