<?php

namespace App\Http\Controllers;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    

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

    

   


  
    public function profile()
    {
        $posts = Post::where('user_id', @Auth::user()->id)->get(); // all posts per user
        return view('profile', compact('posts'));
    }

    public function editprofile()
    {
        return view('editprofile');
    }
    

}
