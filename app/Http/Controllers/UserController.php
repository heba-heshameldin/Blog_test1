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
        $request->validate([
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return $this->login($request);
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name =  $request->name;
        $user->email =  $request->email;
        $user->phone =  $request->phone;
        $user->date_of_birth =  $request->date_of_birth;
        $user->address =  $request->address;
        $user->save();
        return redirect()->intended('users/profile');
    }

    public function login(Request $request)
    {
        // echo "<html><script>alert(1)</script></html>";
        $request->validate([
            'email'           => 'required|max:255|email',
            'password'           => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Success
            return redirect()->intended('users/profile');
        } else {
            // Go back on error (or do what you want)
            return "This account does not exist";
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/signin');
    }
}
