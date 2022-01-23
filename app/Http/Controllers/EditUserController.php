<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditUserController extends Controller
{
public function Editprofile(Request $req){
$user= new User;
$user->name=$req->name;
$user->email=$req->email;
$user->phone=$req->phone;
$user->dateofbirth=$req->dateofbirth;
$user->address=$req->address;
$user->save();


}
}
