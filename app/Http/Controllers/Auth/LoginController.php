<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function store(LoginRequest $request)
    {
        $user = User::where(['email' => $request->email])->first();
        if (!$user) {
            return back()->withErrors(['message' => 'Invalid Email or Password']);
        }

        auth()->attempt($request->validated());

        if (auth()->user()->hasRole(['admin'])) {
            return redirect()->route('admin_home');
        }
        if (auth()->user()->hasRole(['captain', 'secretary'])) {
            return redirect()->route('captain.index');
        }
        return redirect()->route('treasurer.home.index');
    }
}
