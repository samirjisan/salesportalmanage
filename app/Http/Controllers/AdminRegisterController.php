<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{
    public function index()
    {
        return view('admin.register');

    }

    public function register()
    {
        $this->validate(request(), [
//            'username' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
        ]);
        Admin::create([
//            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),

        ]);

        return redirect()->route('admin.register')->with('registerSuccess','Register Successful!');


    }

//    public function see(){
//        $admin = Admin::latest()->get();
//        return view('admuse.showUsers',compact(['users']));
//
//
//    }

}
