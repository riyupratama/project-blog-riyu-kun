<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->search;
        $posts = Post::latest()->with('user')
                        ->where('title','LIKE','%'.$keyword.'%')
                        ->paginate(6);
        return view('home', compact('posts'));
    }

    public function read($slug)
    {
        $post = Post::with('user')->where('slug', $slug)->get();
        $post = $post[0];
        // return json_encode($post);
        // return $post->image;
        return view('detail.post.index', compact('post'));
    }
}