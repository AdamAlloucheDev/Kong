<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;



class UserProfile extends Component
{

    public $editId = 0;
    protected $listeners = [
        'userUpdated' => 'onUserUpdated'
    ];
    // protected $listeners = ['refreshComponent' => '$refresh'];

    public function onUserUpdated() 
    {
        $this->reset('editId');
    }


    public function startEdit($id)
    {
        $this->editId = $id;
    }

    public function editUser($user)
    {
        
    }
    
    public function render()
    {
        return view('livewire.user-profile', [
            'user' => Auth::user()
        ]);
    }
}
