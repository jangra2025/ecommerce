<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $req->email)->first();

        if (!$user) {
            $user = User::create([
                'name' => $req->name,     
                'email' => $req->email,
                'password' => Hash::make($req->password)
            ]);
        } else {
            $user->name = $req->name;  
            $user->password = Hash::make($req->password);
            $user->save();
        }

        return $user; 
    }
}