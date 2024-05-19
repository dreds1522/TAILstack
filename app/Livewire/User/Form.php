<?php

namespace App\Livewire\User;

use Livewire\Component;

class Form extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',

    ];

    public function save()
    {
        $data = $this->validate();
        dd($data);
    }
    public function render()
    {
        return view('livewire.user.form');
    }
}
