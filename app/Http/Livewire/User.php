<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as UserModel;

class User extends Component
{
    public $search = '';
    protected $listeners = ['toggleStatus'];

    public function toggleStatus($id) {
        $user = User::find($id);
        $user->status = !$user->status;
        $user->save();
    }

    public function render()
    {
        return view('livewire.user', [
            'users' => UserModel::where('email', $this->search)->get(),
        ]);

    }

}
