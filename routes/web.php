<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CourseController;
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


Route::get("/user/profile",[ProfileController::class,"index"])->name("Profile");
Route::post("/user/profile/store",[ProfileController::class,"updateProfile"])->name("On-Update");

//courses
Route::get("/course/option",[CourseController::class,"OptionCourse"])->name("Option-Course");
Route::get("/course/add",[CourseController::class,"AddCourse"])->name("Add-Course");

//course type
Route::get("/coursetype/option",[CourseController::class,"OptionCourseType"])->name("Option-CourseType");
Route::get("/coursetype/option/add",[CourseController::class,"AddCourseType"])->name("Add-CourseType");
Route::post("/coursetype/option/add/store",[CourseController::class,"StoreCourseType"])->name("Store-CourseType");



// Admin

Route::get("/admin/index",[AdminController::class,"index"])->name("Admin");



