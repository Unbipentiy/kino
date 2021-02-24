<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*Главная*/
Route::get('/', '\App\Http\Controllers\PageController@home')->name('home');
Route::get('/sessions', '\App\Http\Controllers\SessionController@viewMain')->name('sessions');
Route::get('/sessions/{id}', '\App\Http\Controllers\SessionController@view')->name('session');

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
        Route::get('/update-password', '\App\Http\Controllers\UserController@viewUpdatePassword')->name('update.password');
        Route::post('/update-password', '\App\Http\Controllers\UserController@updatePassword');
        Route::get('/update-profile', '\App\Http\Controllers\UserController@viewUpdateProfile')->name('update.profile');
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
        Route::get('/', '\App\Http\Controllers\Admin\UserController@viewAll')->name('admin.users');
        Route::get('/{id}', '\App\Http\Controllers\Admin\UserController@view')->name('admin.user');
        Route::post('/{id}', '\App\Http\Controllers\Admin\UserController@update')->name('admin.user.update');;
        Route::get('/{id}/delete', '\App\Http\Controllers\Admin\UserController@delete')->name('admin.user.delete');;
    });
    /*Админ-Импостеры*/
    Route::group(['prefix' => 'posters'], function (){
        Route::get('/', '\App\Http\Controllers\Admin\PosterController@viewAll')->name('admin.posters');
        Route::get('/create', '\App\Http\Controllers\Admin\PosterController@viewCreate')->name('admin.poster.create.view');
        Route::post('/create', '\App\Http\Controllers\Admin\PosterController@create')->name('admin.poster.create');
        Route::get('/{id}', '\App\Http\Controllers\Admin\PosterController@view')->name('admin.poster');
        Route::post('/{id}', '\App\Http\Controllers\Admin\PosterController@update')->name('admin.poster.update');
        Route::get('/{id}/delete', '\App\Http\Controllers\Admin\PosterController@delete')->name('admin.poster.delete');
    });
    /*Админ-сеансы*/
    Route::group(['prefix' => 'sessions'], function (){
        Route::get('/', '\App\Http\Controllers\Admin\SessionController@viewAll')->name('admin.sessions');
        Route::get('/create', '\App\Http\Controllers\Admin\SessionController@viewCreate')->name('admin.session.create.view');
        Route::post('/create', '\App\Http\Controllers\Admin\SessionController@create')->name('admin.session.create');
        Route::get('/{id}', '\App\Http\Controllers\Admin\SessionController@view')->name('admin.session');
        Route::post('/{id}', '\App\Http\Controllers\Admin\SessionController@update')->name('admin.session.update');
        Route::get('/{id}/delete', '\App\Http\Controllers\Admin\SessionController@delete')->name('admin.session.delete');
    });
});
