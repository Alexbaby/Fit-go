<?php

namespace App\Http\Livewire\Courses;

use Livewire\Component;

class Courses extends Component
{
    public function render()
    {
        return view('livewire.courses.courses');
    }

    public function create($request)    {
        
        return view('livewire.courses.courses');
    }
}
