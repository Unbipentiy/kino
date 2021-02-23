<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('main');
    }
    public function admin(){
        return view('admin.home');
    }
}
