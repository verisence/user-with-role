<?php

namespace App\Http\Middleware;

// use Auth;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if (Auth::user()->role == 1) {
            return redirect()->route('super');
        }

        if (Auth::user()->role == 2) {
            return redirect()->route('admin');
        }

        return $next($request);
    }
}
