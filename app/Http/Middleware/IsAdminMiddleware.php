<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and an admin
        if (auth()->check() && auth()->user()->role) {
            return $next($request);
        }

        // Optionally, redirect non-admin users or return a response
        return redirect('/')->with('error', 'You are not authorized to access this page.');
    }
}
