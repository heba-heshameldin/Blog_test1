<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\StoreCommentRequest;
use App\Http\Requests\Comment\UpdateCommentRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use Illuminate\Support\Facades\Gate;


class CommentController extends Controller
{
    public function comment(StoreCommentRequest $request, $postId){

        Comment::create($request->all());
        return redirect('/posts/view/'.$postId);
    }


    public function edit($id)
    {
        $comment = Comment::find($id); // all posts per category
        return view('comment.edit', compact('comment'));
    }
 
   

    public function update(Request $request,$id)
    {
        $comment = Comment::findOrFail($id); 
        Gate::authorize('isCommentAuth',$comment);

        $this->validate($request,[
            'description'=> 'required'        
        ]);


        $comment->update([
            'description' => $request->description,
        ]);

        if (!$comment) {
            Session::flash('sucess','Comment failed to update');
        } else {
            Session::flash('sucess','Comment Update');
        }

        return redirect('/posts/view/'.$comment->post->id);
      

       
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id); 
        Gate::authorize('isCommentAuth',$comment);
        
        if ($comment != null) {
        $comment->delete();
        return redirect('/posts/view/'.$comment->post->id)->with('success', 'comment Deleted Successfully!');

    }

    return redirect()->route('posts.show')->with(['message'=> 'Wrong ID!!']);

    }
}