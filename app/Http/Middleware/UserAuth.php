<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Agar user login page pe hai aur already login hai
        if ($request->path() == "login" && $request->session()->has('user')) {
            return redirect('/');
        }

        // Agar user login nahi hai aur protected route access kar raha hai
        if (!$request->session()->has('user') && $request->path() != "login") {
            return redirect('/login');
        }

        return $next($request);
    }
}