<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }



    public function store(RegisterRequest $request) {
        $user = User::create($request->validated());
        $user->assignRole($request->user_type);
        return back()->with(['success' => 'Registered Successfully!']);
    }
}
