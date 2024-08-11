<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->save();
        return redirect('/');
    }
}
