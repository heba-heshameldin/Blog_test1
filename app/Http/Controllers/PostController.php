<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

use App\Models\Category;

class PostController extends Controller
{


    public function index()
    {
        $catagories = Category::get();
        $posts = Post::get(); // all posts
        return view('post', compact('catagories','posts'));
    }

    public function category(Request $request)
    {
        $catagories = Category::get();
        $posts = Post::where('category_id',$request->category)->get(); // all posts per category
        return view('post', compact('catagories','posts'));
    }

    public function view($id)
    {
        $post = Post::where('id',$id)->first(); // all posts per category
        return view('viewpost', compact('post'));

    }

    public function create()
    {
        $catagories = Category::get();
        return view('createpost', compact('catagories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            
        ]);
        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category;
        $post->title =  $request->title;
        $post->description =  $request->description;
        $imageName = time().'.'.$request->img->extension();  
        if($request->img->move(public_path('assets\img'), $imageName)){
            $post->thumbnail =  $imageName;
            $post->save(); 
        }
        return redirect()->intended('post');
    }
}
