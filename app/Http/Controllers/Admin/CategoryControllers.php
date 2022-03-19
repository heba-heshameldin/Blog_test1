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
}
