<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.user.table',[
            'users' => $users
        ]);
    }
}
