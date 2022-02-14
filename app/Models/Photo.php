<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Photo extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class);
    }

    public function likes()
    {
        return $this->morphMany(\App\Models\Like::class, 'likeable');
    }

    public function hasLiked()
    {
        return $this->likes->where('user_id', Auth::user()->id)->count();
    }
}
