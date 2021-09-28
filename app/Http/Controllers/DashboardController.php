<?php

namespace App\Http\Controllers;
use App\Models\TypesOfCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\StudentSelection;
use App\Models\Course;

class DashboardController extends Controller
{
    public function index(){
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
}
