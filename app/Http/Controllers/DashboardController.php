<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
    public function index(){

        return view("auth.dashboard");

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

}
