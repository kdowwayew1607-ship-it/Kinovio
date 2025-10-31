<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Like;
use App\Models\Post;
use App\Models\Review;
use App\Models\User;

use App\Models\Error;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function video($id){
        
        $users = User::get();
        $categories = Category::get();
        $posts = Post::get();
 
        $likes = Like::get();
        $reviews = Review::get();
        $errors = Error::get();


        $movie = Post::find($id);
        return view('cilent.movie.index')->with([
            'users' => $users,
            'categories' => $categories,
            'posts' => $posts,
 
            'likes' => $likes,
            'reviews' => $reviews,
            'errors' => $errors,
            'movie' => $movie
        ]);
    }
    
}
