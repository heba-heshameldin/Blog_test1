<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Validator;

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
    
}
