<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Usercoursecontroller;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get("/login",[LoginController::class,"index"])->name("Login");
Route::post("/log",[LoginController::class,"login"])->name("On-Login");


Route::get("/register",[RegisterController::class,"index"])->name("Register");
Route::post("/register/store",[RegisterController::class,"store"]);


Route::post("/logout",[LogoutController::class,"logout"])->name("Logout");

Route::get("/dashboard",[DashboardController::class,"index"])->name("Dashboard");
Route::get("/admindashboard",[DashboardController::class,"admin_index"])->name("AdminDashboard");
Route::get("/dash",[DashboardController::class,"dash"])->name("Dash");


Route::get("/user/profile",[ProfileController::class,"index"])->name("Profile");
Route::post("/user/profile/store",[ProfileController::class,"updateProfile"])->name("On-Update");

//courses
Route::get("/course/option",[CourseController::class,"OptionCourse"])->name("Option-Course");
Route::get("/course/option/add",[CourseController::class,"AddCourse"])->name("Add-Course");
Route::post("/course/option/add/store",[CourseController::class,"StoreCourse"])->name("Store-Course");
Route::get("/course/option/view",[CourseController::class,"ViewCourse"])->name("View-Course");
Route::get("/course/option/view/update",[CourseController::class,"ViewUpdateCourse"])->name("View-Update-Course");
Route::get("/course/option/update/{id?}",[CourseController::class,"UpdateCourse"])->name("Update-Course");
Route::post( "/course/option/update/store",[CourseController::class,"StoreUpdateCourse"])->name("Store-Update-Course");


//course type
Route::get("/coursetype/option",[CourseController::class,"OptionCourseType"])->name("Option-CourseType");
Route::get("/coursetype/option/add",[CourseController::class,"AddCourseType"])->name("Add-CourseType");
Route::post("/coursetype/option/add/store",[CourseController::class,"StoreCourseType"])->name("Store-CourseType");
Route::get("/coursetype/option/view",[CourseController::class,"ViewCourseType"])->name("View-CourseType");
Route::get("/coursetype/option/view/update",[CourseController::class,"ViewUpdateCourseType"])->name("View-Update-CourseType");
Route::get("/coursetype/option/update/{id?}",[CourseController::class,"UpdateCourseType"])->name("Update-CourseType");
Route::post("/coursetype/option/update/store",[CourseController::class,"StoreUpdateCourseType"])->name("Store-Update-CourseType");

//course application
Route::get("/application/option/view",[ApplicationController::class,"OptionApplication"])->name("Option-Application");
Route::get("/application/view",[ApplicationController::class,"ViewApplication"])->name("View-Application");
Route::get("/application/view/approve/{id?}",[ApplicationController::class,"ApproveCourse"])->name("Approve-Application");
Route::get("/application/view/deny/{id?}",[ApplicationController::class,"DenyCourse"])->name("Deny-Application");
Route::get("/application/view/approved",[ApplicationController::class,"ViewApprovedApplication"])->name("View-Approved-Application");
Route::get("/application/view/denied",[ApplicationController::class,"ViewDeniedApplication"])->name("View-Denied-Application");



// Admin

Route::get("/admin/index",[AdminController::class,"index"])->name("Admin");

//Guest
Route::get("/guest/course",[Usercoursecontroller::class,"guestcourses"])->name("guestcourses");
//students
Route::get("/student/studentcourse",[Usercoursecontroller::class,"usercourses"])->name("studentcourses");
Route::post("/student/studentcourse",[Usercoursecontroller::class,"applytocourse"])->name("apply");
