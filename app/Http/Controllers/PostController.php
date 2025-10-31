<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Like;
use App\Models\Post;
use App\Models\Review;
use App\Models\User;

use App\Models\Error;
use Illuminate\Http\Request;

use function Symfony\Component\HttpKernel\EventListener\validateRequest;
use function Symfony\Component\HttpKernel\HttpCache\validate;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $users = User::get();
        $categories = Category::get();
        $posts = Post::get();
        
        $likes = Like::get();
        $reviews = Review::get();
        $errors = Error::get();
        $categoryId = $request->input('category_id'); 
        
        // 2. Esasy maglumat bazasy soragyny başlatmak
        $query = Post::query();

        // 3. KATEGORIÝA BOÝUNÇA SÜZMEK LOGIKASY
        if ($categoryId) {
            // Eger $categoryId san (ID) bar bolsa, 'category_id' sütüni şol baha deň bolan postlary gözle
            // Post modeliňizde category_id sütüniň bardygyny göz öňüne tutýarys.
            $query->where('category_id', $categoryId); 
        }

        // 4. Gözleg netijesini alyp, sahypalaşdyrmak (pagination)
        $posts = $query->latest()->paginate(10); // 'latest()' iň täzeleri öňe çykarýar

        // 5. Kategoriýalary View-a ugratmak (HTML select elementini doldurmak üçin)
        $categorie = Category::all();


        return view('cilent.post.index')->with([
                'users' => $users,
                'categories' => $categories,
                'categorie' => $categorie,
                'posts' => $posts,
               
                'likes' => $likes,
                'reviews' => $reviews,
                'errors' => $errors,
            ]);
       
    }
    public function show(Category $category) // Parametri string $id däl-de, Category $category edýäris
    {
        // Eger Category Modelinde posts() relasiýasy dogry kesgitlenen bolsa, 
        // $category obýektiniň postlaryny göni alarys
        $posts = $category->posts()->latest()->paginate(12); 
        
        return view('cilent.post.index')->with([
            'category' => $category,
            'posts' => $posts, // Indi diňe şol kategoriýanyň postlary
        ]);
    }

}
