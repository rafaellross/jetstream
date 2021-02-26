<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UsersCreate extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;


    protected $rules = [
        'name' => 'required|min:10',
        'email' => 'required|email',
        'password' => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required|string|min:8'


    ];

    public function render()
    {
        return view('livewire.users-create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function saveUser() {
        $validatedUser = $this->validate();
        User::create($validatedUser);
        return redirect()->to('/users');

    }
}
