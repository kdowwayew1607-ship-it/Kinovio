<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Like;
use App\Models\Post;
use App\Models\Review;
use App\Models\User;

use App\Models\Error;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $users = User::get();
        $categories = Category::get();
        $posts = Post::get();

        $likes = Like::get();
        $reviews = Review::get();
        $errors = Error::get();

        $titles = Post::when()
        ->orderBy('created_at', 'desc')
        ->take(12)->get();


        return view('cilent.home.index')->with([
            'users' => $users,
            'categories' => $categories,
            'posts' => $posts,
        
            'likes' => $likes,
            'reviews' => $reviews,
            'errors' => $errors,
            'titles' => $titles,
        ]);
    }
}
