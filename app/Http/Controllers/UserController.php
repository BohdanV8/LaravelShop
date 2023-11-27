<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'type' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);
        $user = User::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'middle_name' => $request->input('middle_name'),
            'type' => $request->input('type'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $userId = $user->id;
        session()->put('user_id', $userId);
        return redirect()->route('home');
    }

    public function auth(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('home');
        }
    }
}
