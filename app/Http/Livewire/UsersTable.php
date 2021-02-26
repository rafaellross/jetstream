<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UsersTable extends Component
{

    public $search;

    protected $listeners = ['toggleStatus'];


    public function toggleStatus($id) {
        $user = \App\Models\User::find($id);
        $user->status = !$user->status;
        $user->save();
    }



    public function render()
    {
        return view('livewire.users-table', [
            'users' => \App\Models\User::where('name', 'like', '%' .$this->search . '%')->get(),
        ]);
    }
}
