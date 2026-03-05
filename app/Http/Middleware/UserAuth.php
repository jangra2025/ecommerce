<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    public function handle(Request $request, Closure $next)
    {
        // If user is not logged in
        if (!$request->session()->has('user')) {

            // Allow login page
            if ($request->path() == 'login') {
                return $next($request);
            }

            // Redirect everything else to login
            return redirect('/login');
        }

        // User is logged in
        return $next($request);
    }
}