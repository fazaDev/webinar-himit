<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(12);
        return view('frontend.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('frontend.show', compact('post'));
    }
}
