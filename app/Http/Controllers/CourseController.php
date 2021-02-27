<?php

namespace App\Http\Controllers;



use App\Models\courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index()
    {
        $courses = courses::all();
        return view('courses.index', compact('courses'));
    }

    public function createCourse(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_name' => 'required',
            'course_duration' => 'required',
            'course_fee' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $courses = new courses();
        $courses->course_name = $request->input('course_name');
        $courses->course_duration = $request->input('course_duration');
        $courses->course_fee = $request->input('course_fee');

        $courses->save($request->all());

        return Redirect('course')->with('message', 'updated ');
    }

    public function show($id)
    {
        $course = courses::find($id);
        return view('customer.edit', compact('course'));
    }

    public function remove($id)
    {

        courses::find($id)->delete();
        return redirect('course');
    }
}
