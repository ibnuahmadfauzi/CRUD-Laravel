<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(4);

        return view('blogs', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $posts = Post::all();

        return view('post', ['posts' => $posts, 'slug' =>$slug]);
    }

}
