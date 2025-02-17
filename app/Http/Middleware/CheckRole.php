<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Vérifier si l'utilisateur est connecté et a le bon rôle
        if (Auth::check() && Auth::user()->role !== $role) {
            // Rediriger selon le rôle
            return Auth::user()->role === 'admin' 
                ? redirect()->route('admin.home') 
                : redirect()->route('user.home');
        }

        return $next($request);
    }
}
