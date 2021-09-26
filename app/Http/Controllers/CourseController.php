<?php

namespace App\Http\Controllers;
use App\Models\TypesOfCourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //views courses
    public function OptionCourse(){
        return view('admin.OptionCourse');
    }
    public function AddCourse(){
        return view('admin.AddCourse');
    }
    //views course type

    public function OptionCourseType(){
        return view('admin.OptionCourseType');
    }

    public function AddCourseType(){
        return view('admin.AddCourseType');
    }

    public function StoreCourseType(Request $request){
        $this->validate($request,[
            'type' => 'required',
            'info' => 'required',
        ]);

        TypesOfCourse::create([
            'course_type' => $request->type,
            'desc' => $request->info
        ]);

        return redirect()->back()->with('course_status','Entry Successful');
    }

    public function ViewCourseType(){
        $data=TypesOfCourse::all();
        return view('admin.ViewCourseType');
    }

}
