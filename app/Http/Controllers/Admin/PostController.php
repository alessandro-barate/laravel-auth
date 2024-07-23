<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::all();
    

        return view('admin.posts.index', compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        $slug = Str::of($data['title'])->slug('-');
        $data['slug'] = $slug;

        $post = new Post();

        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->slug = $data['slug'];

        $post->save();

        return redirect()->route('admin.posts.index')->with('message', 'Post correctly created');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $slug)
    public function show(Post $post)
    {
    //    $post = Post::where('slug', $slug)->first();

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit' , compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();

        $data['slug'] = Str::of($data['title'])->slug();

        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->slug = $data['slug'];

        $post->save();

        return redirect()->route('admin.posts.index')->with('message', 'Post correctly updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post_id = $post->id;
        $post->delete();

        return redirect()->route('admin.posts.index')->with('message', 'Post correctly deleted');

    }
}
