<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function navbar(Category $category)
    {
        $categories = Category::get();
        $posts = Post::get();
        $postly = $category->posts()->latest()->paginate(10); 


        return view('cilent.navbar.nav')->with([
                'categories' => $categories,
                'posts' => $posts,
                'category' => $category,
                'postly' => $postly,
                
        ]);
    }
       

}
