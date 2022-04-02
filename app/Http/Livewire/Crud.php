<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Crud extends Component
{
    public $students;
    
    public function render()
    {
        $this->students=Student::all();
        return view('livewire.crud');
    }
}
