<?php

namespace App\Http\Controllers;

use App\Models\StudentSelection;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
public function OptionApplication(){
    return view('admin.OptionCourseApplication');
}
public function ViewApplication(){
    $data=StudentSelection::where('is_approved','=','2')->get();
    return view('admin.ViewCourseApplication',compact('data'));
}
public function ApproveCourse($id){
    StudentSelection::find($id)->update([
        'is_approved' => '1'
    ]);
    return redirect()->back()->with('Success','Successfully updated!');
}
    public function DenyCourse($id){
        StudentSelection::find($id)->update([
            'is_approved' => '0'
        ]);
        return redirect()->back()->with('Success','Successfully updated!');
    }

    public function ViewApprovedApplication(){
        $data=StudentSelection::where('is_approved','=','1')->get();
        return view('admin.ViewApprovedCourseApplication',compact('data'));
    }
    public function ViewDeniedApplication(){
        $data=StudentSelection::where('is_approved','=','0')->get();
        return view('admin.ViewDeniedCourseApplication',compact('data'));
    }
}
