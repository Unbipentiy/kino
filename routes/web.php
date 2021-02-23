<?php

use App\Http\Controllers\PageController;
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
Route::group(['middleware' => 'auth'], function () {
    /*Профиль*/
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', '\App\Http\Controllers\UserController@profile')->name('profile');
        Route::get('/update-password', '\App\Http\Controllers\UserController@viewUpdatePassword')->name('update_password');
        Route::post('/update-password', '\App\Http\Controllers\UserController@updatePassword');
        Route::get('/update-profile', '\App\Http\Controllers\UserController@viewUpdateProfile')->name('update_profile');
        Route::post('/update-profile', '\App\Http\Controllers\UserController@updateProfile');

    });
    /*Выход*/
    Route::get('/logout', '\App\Http\Controllers\AuthController@logout')->name('logout');
});

/*Админ*/
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', '\App\Http\Controllers\PageController@admin')->name('admin');

    /*Админ-Пользователи*/
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\UserController@viewAll');
        Route::get('/{id}', '\App\Http\Controllers\Admin\UserController@view');
        Route::post('/{id}', '\App\Http\Controllers\Admin\UserController@update');
        Route::get('/{id}/delete', '\App\Http\Controllers\Admin\UserController@delete');
    });
    /*Админ-Жанры*/
    Route::group(['prefix' => 'genries'], function () {
        Route::get('/', '\App\Http\Controllers\Admin\GenreController@viewAll')->name('admin_genries');
        Route::get('/{id}', '\App\Http\Controllers\Admin\GenreController@view')->name('admin_genre');
    });
    /*Админ-Импостеры*/
    Route::group(['prefix' => 'posters'], function (){
        Route::get('/', '\App\Http\Controllers\Admin\PosterController@viewAll');
        Route::get('/create', '\App\Http\Controllers\Admin\PosterController@viewCreate');
        Route::post('/create', '\App\Http\Controllers\Admin\PosterController@create');
        Route::get('/{id}', '\App\Http\Controllers\Admin\PosterController@view');
        Route::post('/{id}', '\App\Http\Controllers\Admin\PosterController@update');
        Route::get('/{id}/delete', '\App\Http\Controllers\Admin\PosterController@delete');
    });
    /*Админ-сеансы*/
    Route::group(['prefix' => 'sessions'], function (){
        Route::get('/', '\App\Http\Controllers\Admin\SessionController@viewAll');
        Route::get('/create', '\App\Http\Controllers\Admin\SessionController@viewCreate');
        Route::post('/create', '\App\Http\Controllers\Admin\SessionController@create');
        Route::get('/{id}', '\App\Http\Controllers\Admin\SessionController@view');
        Route::post('/{id}', '\App\Http\Controllers\Admin\SessionController@update');
        Route::get('/{id}/delete', '\App\Http\Controllers\Admin\SessionController@delete');
    });
});
