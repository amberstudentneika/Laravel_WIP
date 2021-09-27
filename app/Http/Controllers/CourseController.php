<?php

namespace App\Http\Controllers;
use App\Models\TypesOfCourse;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    //====================================== Course Methods ====================================== //

    public function OptionCourse(){
        return view('admin.OptionCourse');
    }

    public function AddCourse(){
        $data = TypesOfCourse::all();
        return view('admin.AddCourse',compact('data'));
    }

    public function StoreCourse(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:courses,course_name',
            'courseid' => 'required',
        ]);

         Course::create([
            'course_name' => $request->name,
            'course_type_id' => $request->courseid
        ]);
        return redirect()->back()->with('course_status','Entry Successful');
    }

    public function ViewCourse(){
        $data=Course::orderby('course_name','asc')->get();
        return view('admin.ViewCourse',compact('data'));
    }

    public function ViewUpdateCourse(){
        $data=Course::all();
        return view('admin.ViewUpdateCourse',compact('data'));
}

    public function UpdateCourse($id){
        $data=Course::find($id);
        return view('admin.UpdateCourse',compact('data'));
    }

    public function StoreUpdateCourse(Request $request){
        $this->validate($request,[
            'coursename' => 'required|unique:courses,course_name',
            'courseid' => 'required',
        ]);

        Course::find($request->id)->update([
            'course_name' => $request->coursename,
            'course_type_id' => $request->courseid
        ]);
        return redirect()->back()->with('Success','Successfully updated!');
    }



   //====================================== Course Type Methods ====================================== //


    public function OptionCourseType(){
        return view('admin.OptionCourseType');
    }

    public function AddCourseType(){
        return view('admin.AddCourseType');
    }

    public function StoreCourseType(Request $request){
        $this->validate($request,[
            'type' => 'required|unique:types_of_courses,course_type',
            'info' => 'required',
        ]);

        TypesOfCourse::create([
            'course_type' => $request->type,
            'desc' => $request->info
        ]);

        return redirect()->back()->with('course_status','Entry Successful');
    }

    public function ViewCourseType(){
        $data=TypesOfCourse::orderby('course_type','asc')->get();
        return view('admin.ViewCourseType',compact('data'));
    }
    public function ViewUpdateCourseType(){
        $data=TypesOfCourse::all();
        return view('admin.ViewUpdateCourseType',compact('data'));
    }
    public function UpdateCourseType($id){
        $data=TypesOfCourse::find($id);
        return view('admin.UpdateCourseType',compact('data'));
    }

    public function StoreUpdateCourseType(Request $request){
        $this->validate($request,[
            'type' => 'required',
            'info' => 'required|max:100|min:10',
        ]);

        TypesOfCourse::find($request->id)->update([
            'course_type' => $request->type,
            'desc' => $request->info
        ]);
        return redirect()->back()->with('Success','Successfully updated!');
    }
}
