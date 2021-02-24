<?php

use Illuminate\Http\Request;
namespace App\Http\Livewire\Courses;
use Livewire\Component;
use App\Models\Course;

class Courses extends Component
{
    public $course_name;
    public $course_duration;
    public $course_fee;


    public function render()
    {
        return view('livewire.courses.courses');
    }

    public function store()    {
        $request = $this->validate([
            'course_name' => 'required',
            'course_duration' => 'required',
            'course_fee'=>'required'
        ]);
        Course::create($request);
      
     
       
    }
}
