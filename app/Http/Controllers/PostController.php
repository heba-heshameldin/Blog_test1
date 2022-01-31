<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Category;
use App\Models\Comment;

class PostController extends Controller
{


    public function index()
    {
        $catagories = Category::get();
        $posts = Post::get(); // all posts
        return view('posts.index', compact('catagories','posts'));
    }


    public function category($title)
    {
        $catagories = Category::get();
        $category_id = Category::where('title', $title)->first()->id;
        $posts = Post::where('category_id',$category_id)->get(); // all posts per category
        return view('posts.index', compact('catagories','posts'));
    }


    public function view($id)
    {
        $post = Post::where('id',$id)->first(); 
      $comments=  Comment::select('comments.id','description', 'users.name')->where('post_id', $id)->join("users", "users.id", "comments.user_id")->get();
        return view('posts.view', compact('post','comments'));
    }


    public function create()
    {
        $catagories = Category::get();
        return view('posts.create', compact('catagories'));
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
        if($request->img->move(public_path('storage/posts'), $imageName)){ 
            $post->thumbnail =  $imageName; 
            $post->save(); 
        }
        return redirect()->intended('posts');
    }
    

    public function edit($id)
    {
        $post = Post::find($id); // all posts per category
        $catagories = Category::all();
        return view('posts.edit', compact('post','catagories'));
    }
 

    public function update(Request $request)
    {
        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            
        ]);
        $post = Post::where('id', $request->id)->first(); 
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category;
        $post->title =  $request->title;
        $post->description =  $request->description;
        $imageName = $post->thumbnail;  // take old photo
        if(!empty($request->img)){ // if no uploaded photo, keep the old one
        $request->img->move(public_path('storage/posts'), $imageName);
        }
        $post->save(); 
        return redirect()->intended('posts');
    }


    public function delete($id)
    {
        $post = Post::find($id);
@unlink(public_path($post->thumbnail));
        if ($post != null) {
        $post->delete();
        return redirect()->intended('posts')->with('success', 'posts Updated Successfully!');
    }

    return redirect()->route('posts.show')->with(['message'=> 'Wrong ID!!']);

    }

   
}
