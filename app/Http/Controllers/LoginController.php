<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {

        return view("auth.login");

    }

    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(
            ['email' => $request->email , 'password' => $request->password])) {

            if(Auth::User()->is_admin =='0'){
            return redirect()->route('Dashboard');
            }
            else{
            return redirect()->route('AdminDashboard');
            }
        }

        return redirect()->back()->with('login_status','Invalid Credentials');

    }
}
