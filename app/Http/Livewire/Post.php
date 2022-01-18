<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $post;

    public $comments;

    public function mount($post)
    {
        $this->post = $post;
        $this->comments = $post->comments()->get();
    }

    public function render()
    {
        return view('livewire.post');
    }
}