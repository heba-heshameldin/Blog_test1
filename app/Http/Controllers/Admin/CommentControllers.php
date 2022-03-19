<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Post;
use App\Models\Comment;
class CommentControllers extends Controller
{
    public function main(){
        $comment = Comment::all();
        return view('admin.comment')->with('comment',$comment);
    }
    
   public function destroy($id){
    $comment = Comment::findOrFail($id);
    $comment->delete();
    return redirect()->intended('admin/comment')->with('delete','Your Data is Deleted');
   }
}
