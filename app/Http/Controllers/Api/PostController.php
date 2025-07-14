<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::latest()-get();
    }

    public function store(Route $request)
    {
        $request->validate([
            'title' => 'required:max:225',
            'body' => 'required',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id(),
        ]);

        return response()->json($post,201);
    }
}
