<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UsersEdit extends Component
{
    public $name;
    public $email;
    public $current_team_id;
    public $password;
    public $password_confirmation;
    public $user;

    protected $rules = [
        'name' => 'required|min:10',
        'email' => 'required|email',
        'password' => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required|string|min:8'


    ];
    
    public function mount($id) {
        $user = User::find($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->current_team_id = $user->current_team_id;
        $this->password = $user->password;
        $this->password_confirmation = $user->password;
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.users-edit');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function saveUser() {
        $validatedUser = $this->validate();

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->current_team_id = $this->current_team_id == '' ? null : $this->current_team_id;
        if ($this->user->password !== $this->password) {
            $this->user->password = Hash::make($validatedUser['password']);
        }
        
        $this->user->save();                                
        return redirect()->to('/users');

    }

}
