<?php

namespace App\Http\Controllers;
use App\Models\TypesOfCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
use Auth;
=======
use Illuminate\Support\Facades\Auth;
use App\Models\StudentSelection;
use App\Models\Course;

>>>>>>> 7b4ba215ec40e461174ba91cb1acdc01d6c6ea7c

class DashboardController extends Controller
{
    public function index(){
<<<<<<< HEAD
      $getusercourses=DB::table('student_selections')->
      join('courses','courses.id','=','student_selections.course_id')->
      where('student_selections.user_id',Auth::id())->get();
      $usercourses=json_decode(json_encode($getusercourses), true);
      return view("auth.dashboard",['usercourses'=>$usercourses]);
    }
    public function admin_index(){
      return view("admin.index");
}
  public function dash(){
    if(Auth::User()->is_admin =='0'){
        return redirect()->route('Dashboard');
    }
    else{
        return redirect()->route('AdminDashboard');
    }
  }
=======

//        return view("auth.dashboard");
        $getusercourses=DB::table('student_selections')->
        join('courses','courses.id','=','student_selections.course_id')->
        where('student_selections.user_id',Auth::id())->get();
        $usercourses=json_decode(json_encode($getusercourses), true);
        return view("auth.dashboard",['usercourses'=>$usercourses]);
    }
    public function admin_index(){

        $course_count=Course::where('id','!=',null)->count();
        $app_count=StudentSelection::where('is_approved','=',2)->count();
        $total_approved=StudentSelection::where('is_approved','=','1')->count();
        $total_app_count=StudentSelection::where('is_approved','!=',null)->count();
        $category_count=TypesOfCourse::where('id','!=',null)->count();
        return view("admin.index",compact('course_count','app_count','total_app_count','total_approved','category_count'));
}

public function dash(){
    if(Auth::User()->is_admin =='0'){
        return redirect()->route('Dashboard');
    }
    else{
        $course_count=Course::where('id','!=',null)->count();
        $app_count=StudentSelection::where('is_approved','=',2)->count();
        $total_approved=StudentSelection::where('is_approved','=','1')->count();
        $total_app_count=StudentSelection::where('is_approved','!=',null)->count();
        $category_count=TypesOfCourse::where('id','!=',null)->count();
        return view("admin.index",compact('course_count','app_count','total_app_count','total_approved','category_count'));

    }
}

>>>>>>> 7b4ba215ec40e461174ba91cb1acdc01d6c6ea7c
}
