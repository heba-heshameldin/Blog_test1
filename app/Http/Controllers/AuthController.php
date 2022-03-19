<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register(RegisterRequest $request)
    {
        // Vulnerability
        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        User::create($input);
        return $this->loginAttempt($request);
    }

    public function login(LoginRequest $request)
    {
        return $this->loginAttempt($request);
    }

    public function loginAttempt(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('users/profile');
        }
    }

    public function logout()
    {

        Auth::logout();
        return redirect('/signin');
    }
}
