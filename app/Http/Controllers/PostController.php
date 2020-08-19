<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store(StorePostRequest $request, Post $post)
    {
        if (!$request->isValid()) {
            return redirect()->back()->with('error');
        }

        return redirect()->back()->with('notification', ['type' => 'success', 'message' => "Succesvol toegevoegd"]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();

        if(!is_null($post)) {
            return view('post.show', compact('post'));
        }
        else
            abort(404);
    }

}
