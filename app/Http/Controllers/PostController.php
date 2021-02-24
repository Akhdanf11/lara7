<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        // $post = Post::where('slug', $slug)->firstOrFail();

        // if (is_null($post)) {
        //    abort(404);
        // }
        return view('posts.index', [
            'posts' => Post::latest()->simplePaginate(9),
        ]);

    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        // validate the field
        $attr = $request->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ]);

        // Assign title to slug
        $attr['slug'] = \Str::slug($request->title);

        // create new post
        Post::create($attr);

        session()->flash('success', 'The Post was created');
        return redirect()->to('posts')->with(['success' => 'Pesan Berhasil']);
        // $post = new Post;
        // $post->title = $request->title; //The first post
        // $post->slug = \Str::slug($request->title);// the-first-post
        // $post->body = $request->body;
        // $post->save();

        // Post::create([
        //     'title' => $request->title,
        //     'slug' => \Str::slug($request->title),
        //     'body' => $request->title,

        // ]);


        // return back()->with(['success' => 'Pesan Berhasil']);
    }

    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post){
        $attr = request()->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ]);
    }

}
