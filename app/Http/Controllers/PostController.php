<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{


    public function index()
    {
        $catagories = Category::get();
        $posts = post::Paginate(3);
        return view('posts.index', compact('catagories', 'posts'));
    }


    public function category($id)
    {
        $catagories = Category::get();

        $posts = Post::where('category_id', $id)->get(); // all posts per category
        return view('posts.index', compact('catagories', 'posts'));
    }

    /**
     * @param \App\Models\Post $post
     */

    public function view(Post $post)
    {

        $comments =  Comment::select('comments.id', 'description', 'user_id', 'users.name')->where('post_id', $post->id)->join("users", "users.id", "comments.user_id")->paginate(2);
        return view('posts.view', compact('post', 'comments'));
    }


    public function create()
    {
        $catagories = Category::get();
        return view('posts.create', compact('catagories'));
    }



    public function store(StorePostRequest $request)
    {
        $input = $request->all();
        $imageName = time() . '.' . $request->img->extension();
        if ($request->img->move(public_path('storage/posts'), $imageName)) {
            $input['thumbnail'] =  $imageName;
        }
        Post::create($input);
        return redirect()->intended('posts');
    }

    /**
     * @param \App\Models\Post $post
     */
    public function edit(Post $post)
    {
        Gate::authorize('isPostAuth', $post);
        return view('posts.edit', compact('post'));
    }


    public function update( Post $post, Request $request)
    {
        Gate::authorize('isPostAuth', $post);
        $post->update($request->all());
      
        $imageName = $post->thumbnail;
        if (!empty($request->img)) { // if no uploaded photo, keep the old one
            $request->img->move(public_path('storage/posts'), $imageName);
        }
        $post->save();
        return redirect()->intended('posts');
    }


    public function delete(Post $post)
    {

        Gate::authorize('isPostAuth', $post);

        @unlink(public_path($post->thumbnail));
        if ($post != null) {
            $post->delete();
            return redirect()->intended('posts')->with('success', 'posts Updated Successfully!');
        }

        return redirect()->route('posts.show')->with(['message' => 'Wrong ID!!']);
    }
}
