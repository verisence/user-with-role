<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Super
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

        if (Auth::user()->role == 2) {
            return redirect()->route('admin');
        }

        if (Auth::user()->role == 3) {
            return redirect()->route('user');
        }
        return $next($request);
    }
}
