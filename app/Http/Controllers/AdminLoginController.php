<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){


        return view('admin.login');


    }

    public function login(){

        $email = request('email');
        $password = request('password');

        if(Auth::guard('admin')->attempt(['email' => request('email'),'password' => request('password')])){
            return redirect()->route('admuse.list');
  //       return 'hi normal';
        }else{
            return redirect()->route('admin.login')->with('loginRequest','Invalid Username Or Password Please Try Again');
        }
    }

    public function logout(){

        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');

    }

//    public function test(){
//
////        $admins = Auth::guard('admin');
//
//        $admins = Admin::latest()->get();
//
//        return view('admin.showAdmins',compact('admins'));
//
//    }

//    public function dashboard(){
//
////        $admins = Auth::guard('admin');
//
//        $admins = Admin::latest()->get();
//
//        return view('admin.showAdmins',compact('admins'));
//
//    }
}
