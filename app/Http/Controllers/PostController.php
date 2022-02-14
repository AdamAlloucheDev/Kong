<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function like(Request $request, Post $post)
    {
        if ($post->hasLiked()) {
            return redirect()->back()->withError('Tu as déjà liké');
        }

        $post->likes()->create([
            'user_id' => $request->user()->id
        ]);

        return redirect()->back();
    }
}
