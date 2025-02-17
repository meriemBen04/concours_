<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VerifyUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
    */

    public function handle(Request $request, Closure $next, $guard = 'web')
    {
        // Check if the user is authenticated and if they are an admin
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->is_admin) {
                // Continue with the request if it's an admin
                return $next($request);
            } else {
                // Redirect non-admins to the user home or another route
                return redirect('/user/home');
            }
        }

        // If not authenticated, redirect to the login page
        return redirect('/login');
    }
}

