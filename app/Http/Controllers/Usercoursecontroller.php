<?php

namespace App\Http\Controllers;
use App\Models\StudentSelection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Usercoursecontroller extends Controller
{
    function guestcourses(){
        $get_courses=DB::table('courses')->join('types_of_courses','types_of_courses.id','=','courses.course_type_id')
            ->get();
        $courses=json_decode(json_encode($get_courses), true);
        return view('guest.guestcourses',['courses'=>$courses]);
    }
    function usercourses(){
        $get_courses=DB::table('types_of_courses')->join('courses','types_of_courses.id','=','courses.course_type_id')
            ->get();
        $courses=json_decode(json_encode($get_courses), true);
        return view('students.studentcourse',['courses'=>$courses]);
    }
    function applytocourse(Request $request){
        $checkifalreadyapplied=StudentSelection::where('user_id',Auth::id())->where('is_approved',2)->
        where('course_id',$request->course)->get();
        if(count($checkifalreadyapplied)>0){
            return redirect('/student/studentcourse')->with(['applied_again'=>'You have already applied to this course.']);
        }
        $checkifnuumberofapplication=StudentSelection::where('user_id',Auth::id())->where('is_approved',2)->get();
        if(count($checkifalreadyapplied)>4){
            return redirect('/student/studentcourse')->with(['applied_again'=>'Only 5 applications are allowed']);
        }
        $apply=StudentSelection::Insert(['user_id'=>Auth::id(),'course_id'=>$request->course,
            'is_approved'=>2,'enroll_dt'=>date('Y-m-d')]);
        return redirect('/dashboard');
    }
}
