<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function like(Request $request, Photo $photo)
    {
        if ($photo->hasLiked()) {
            return redirect()->back()->withError('Tu as déjà liké la photo');
        }

        $photo->likes()->create([
            'user_id' => $request->user()->id
        ]);

        return redirect()->back();
    }
}
