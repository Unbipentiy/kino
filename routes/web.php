<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\Controller@home')->name('home');
