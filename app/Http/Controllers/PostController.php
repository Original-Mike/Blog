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

}
