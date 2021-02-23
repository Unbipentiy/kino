<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function viewMain() {
        $sessions = Session::whereDate('date', '=', Carbon::today()->addDay())->get();
        dd($sessions);
        return view('sessions', [
            'sessions' => $sessions
        ]);
    }
}
