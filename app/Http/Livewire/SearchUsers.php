<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchUsers extends Component
{

    public $search;


    public function render()
    {
        return view('livewire.search-users', [
            'users' => \App\Models\User::where('name', 'like', '%' .$this->search . '%')->get(),
        ]);
    }

}
