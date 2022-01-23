<?php

namespace App\Http\Controllers;

use finfo;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success','goodbye');
    }
}
