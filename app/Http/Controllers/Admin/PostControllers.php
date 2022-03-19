<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Post;
use App\Models\Comment;
class PostControllers extends Controller
{
    public function main(){
        $post = Post::all();
        return view('admin.post')->with('post',$post);
    }

    public function edit(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post-edit')->with('post',$post);
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        if(empty($request->category_id) ||  empty($request->description) || empty($request->title) || empty($id)){
            return redirect()->back()->with('delete', 'Please complete all the fields');   
        } else {
            $post->category_id = $request->category_id;
            $post->title =  $request->title;
            $post->description =  $request->description;
            $imageName = $post->thumbnail;
            if (!empty($request->img)) { // if no uploaded photo, keep the old one
                $request->img->move(public_path('storage/posts'), $imageName);
            }
            $post->update();
            return redirect()->intended('admin/post')->with('status','Your Data is Updated');
        }
    }

   public function destroy($id){
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect()->intended('admin/post')->with('delete','Your Data is Deleted');
   }
  
}
