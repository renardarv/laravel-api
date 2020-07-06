<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{   
    public function index()
    {
        $data = Post::all();
        return response()->json($data, 200);
    }

    public function show($id)
    {
        $data = Post::find($id);
        return response()->json($data, 200); // 200 untuk code GET, HEAD, PUT or POST, TRACE
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $response = Post::create($data);
        return response()->json($response, 201); // 201 untuk code created
    }

    public function update(Request $request, Post $post)
    {   
        $post->update($request->all());
        return response()->json($post, 200);
    }

}
