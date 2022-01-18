<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    protected $listeners = ['postAdded'];

    public $posts;

    public function mount()
    {
        $this->posts = Post::latest()->get();
    }

    public function postAdded(Post $post)
    {
        $this->posts->prepend(Post::find($post->id));
    }

    public function render()
    {
        //$posts = Post::get()->sortByDesc('id');
        //return view('livewire.posts', compact('posts'));

        return view('livewire.posts');
    }
}