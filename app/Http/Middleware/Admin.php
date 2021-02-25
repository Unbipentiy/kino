<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->admin !== 1){
            return abort(404, 'Whatever you were looking for, look somewhere else');
        }
        return $next($request);
    }
}
