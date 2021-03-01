<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;
use Illuminate\Support\Arr;
class EmployeesTable extends Component
{

    public $search;

    protected $listeners = ['toggleStatus'];

    public $selectPage = false;
    public $selecteds = [];
    public $employees;



    public function render()
    {

        // Set result to array
        $this->employees = Employee::where('LastName', 'like', '%' .$this->search . '%')->orWhere('FirstName', 'like', '%' .$this->search . '%')->get();

        return view('livewire.employees-table', [
            'employees' => $this->employees,

        ]);
    }

    public function updatedSelectPage($value) {

        if ($value) {
            $this->selecteds = Arr::pluck($this->employees, 'id');
        } else {
            $this->selecteds = [];
        }
    }


    public function updated($value, $name)
    {

    }


    public function updatedSelecteds($value) {
        $this->selectPage = false;
    }

}
