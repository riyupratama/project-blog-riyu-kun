<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(Request $request)
    {   
        $user = Auth::user()->id;
        $keyword = $request->search;

        $posts = Post::latest()
                        ->where('user_id', $user)
                        ->where('title','LIKE','%'.$keyword.'%')
                        ->paginate(5);

        // return json_encode($posts);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Post::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'slug'      => Str::slug($request->title), 
            'content'   => $request->content,
            'user_id'   => Auth::user()->id
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show($id)
    {
        $post = Post::FindOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::FindOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // get post in database by id
        $post = Post::FindOrFail($id);

        // cek apakah ada input gambar baru
        if ($request->hasFile('image')) {
            // ambil data file gambar baru
            $image = $request->file('image');
            
            // delete old image from folder
            Storage::delete('/public/posts/'.$post->image);
            
            // upload new image to folder
            $image->storeAs('/public/posts/',  $image->hashName());

            // input all data
            $post->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'category' => $request->category,
                'content' => $request->content
            ]);
        }

        // update tanpa ada perubahan image
        $post->update([
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Postingan berhasil diubah!']);
    }

    public function destroy($id)
    {
        // cari postingan berdasarkan id
        $post = Post::FindOrFail($id);

        // hapus gambar dari storage
        Storage::delete('/public/posts/'.$post->image);

        // hapus postingan
        $post->delete();

        return redirect()->route('posts.index')->with('success','Post berhasil dihapus!');
    }
}
