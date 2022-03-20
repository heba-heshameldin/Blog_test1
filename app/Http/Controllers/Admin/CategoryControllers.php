<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
class CategoryControllers extends Controller
{
    public function store(Request $request){
        $category = [];
        $category['title'] = $request->title;
        Category::insert($category);
        return redirect()->intended('admin/category')->with('status','Category added successfully');
    }
    
    public function main(){
        $category = Category::all();
        return view('admin.category')->with('category',$category);
    }
    
    public function edit(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category-edit')->with('category',$category);
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category['title'] = $request->title;
            $category->update();
            return redirect()->intended('admin/category')->with('status','Your Data is Updated');
        }

        public function destroy($id){
            $category = Category::findOrFail($id);
            $category->delete();
            return redirect()->intended('admin/category')->with('delete','Your Data is Deleted');
           }
    }
