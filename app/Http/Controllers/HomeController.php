<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->search;
        $category = $request->category;
        $posts = Post::latest()->with('user')
                        ->where('title','LIKE','%'.$keyword.'%')
                        ->where('category','LIKE','%'.$category.'%')
                        ->paginate(6)
                        ->withQueryString();
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
