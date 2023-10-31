<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAuth
{
    public function handle($request, Closure $next)
    {
     
        if (isset(Auth::user()->id) && !empty(Auth::user()->id)) {
          
            // User is authenticated, continue with the request
            return $next($request);
        }

        // User is not authenticated, redirect to the login page
        return redirect('/login');
    }
}