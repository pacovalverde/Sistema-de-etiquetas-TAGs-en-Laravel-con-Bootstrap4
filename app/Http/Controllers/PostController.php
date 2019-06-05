<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('index', compact('posts'));
    }
    
    public function store(PostRequest $request)
    {
        $tags = explode(',', $request->tags);
        $post = Post::create($request->all());
        $post->tag($tags);
        
        return back()->with('info', 'Post creado con éxito');
    }
}
