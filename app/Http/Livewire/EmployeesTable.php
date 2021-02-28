<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmployeesTable extends Component
{

    public $search;

    protected $listeners = ['toggleStatus'];

    public $selected = false;
    public $selectedIds = [];    



    public function render()
    {
        return view('livewire.employees-table', [
            'employees' => \App\Models\Employee::where('LastName', 'like', '%' .$this->search . '%')->orWhere('FirstName', 'like', '%' .$this->search . '%')->get(),

        ]);
    }
}
