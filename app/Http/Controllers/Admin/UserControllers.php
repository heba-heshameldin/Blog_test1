<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class UserControllers extends Controller
{
    public function main(){
        $users = User::all();
        return view('admin.user')->with('users', $users);
    }

    public function edit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.user-edit')->with('users',$users);
    }

    public function update(Request $request, $id){
        $users = User::find($id);
        $users->name=$request->input('username');
        $users->email=$request->input('email');
        $users->phone=$request->input('phone');
        $users->date_of_birth =$request->input('date_of_birth');
        $users->address =$request->input('address');
        $users->update();
        return redirect()->intended('admin/users')->with('status','Your Data is Updated');

    }

    public function destroy($id){
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->intended('admin/users')->with('status','Your Data is Deleted');

    }
}