<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

use App\Models\Catagory;

class CreatePostController extends Controller
{

    public function index()
    {
    
        $catagories = Catagory::get();
       

        return view('createpost', compact('catagories'));
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->title =  $request->title;
        $post->description =  $request->description;
        $post->title =  $request->title;

        $post->save();
        return redirect()->intended('post');
    }
}
