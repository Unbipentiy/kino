<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\PageController@home')->name('home');
