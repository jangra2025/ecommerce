<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    function register(Request $req)
    {
        DB::table('users')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password
        ]);

        return redirect('/login');
    }

    function login(Request $req)
    {
        $user = DB::table('users')
            ->where('email', $req->email)
            ->where('password', $req->password)
            ->first();

        if ($user) {
            Session::put('user', $user);
            return redirect('/');
        } else {
            return back()->with('error', 'Invalid email or password');
        }
    }
    public function logout(Request $request)
    {
        // Remove the 'user' from session
        $request->session()->forget('user');

        // Optionally, invalidate the session
        $request->session()->invalidate();

        // Redirect to homepage or login page
        return redirect('/login');
    }
}
