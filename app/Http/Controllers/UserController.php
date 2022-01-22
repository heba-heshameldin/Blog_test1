<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Validator;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $request->validate([
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user->save();
        return redirect('editprofile');
    }
    public function logs(Request $request)
    {
        echo "<html><script>alert(1)</script></html>";
        $request->validate([
            'email'           => 'required|max:255|email',
            'password'           => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Success
            return redirect()->intended('profile');
        } else {
            // Go back on error (or do what you want)
            return "FF";
        }
    }
    //     public function usersFavourite()
    // {
    //     if ( Auth::check()) {
    //         return redirect('users/profile');
    //     }
    // }
}
