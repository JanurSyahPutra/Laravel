<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('blog', [
            "title" => "All Blog" . $title,
            "active" => 'blog',
            "blog" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
            // method withQueryString untuk membawa querystring yang ada di halaman sebelumnya
        ]);
    }

    public function show(Post $blogmini)
    {
        return view('blogmini', [
            "title" => "Single Post",
            "active" => 'blog',
            "blog" => $blogmini
        ]);
    }
}
