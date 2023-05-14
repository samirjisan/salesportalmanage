<?php

namespace App\Http\Controllers;


use App\Sale;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {

        return view('sales.list');
    }

    public function register()
    {

         $this->validate(request(),[
            'employee' => 'required',
            'subscriber_id' => 'required',
            'mrc' => 'required|numeric',
            'salesType' => 'required',
            'team' => 'required',
            'create' => 'required',
            'subscriber_name' => 'required',
            'otc' => 'required|numeric',
            'create' => 'required',
            'zone' => 'required',
            'offer' => 'required',
            'advance' => 'required',
            'payment' => 'required',
            'area' => 'required',
            'package' => 'required',
            'total' => 'required',
            'delivery' => 'required'
        ]);

//        Sale::find(Auth::id())->sales()->create([

        User::find(Auth::id())->sales()->create([
            'employee' => request('employee'),
            'subscriber_id' => request('subscriber_id'),
            'mrc' => request('mrc'),
            'salesType' => request('salesType'),
            'team' => request('team'),
            'subscriber_name' => request('subscriber_name'),
            'otc' => request('otc'),
            'create' => request('create'),
            'zone' => request('zone'),
            'offer' => request('offer'),
            'advance' => request('advance'),
            'payment' => request('payment'),
            'area' => request('area'),
            'package' => request('package'),
            'total' => request('total'),
            'delivery' => request('delivery')

        ]);

//        return 'registered';
        return redirect()->route('sales.show')->with('addSuccess','User Add Successful!');

//        return request()->all();

//        return "go die";

    }

//    public function showSale(){
//        return view('sales.show',compact('sales'));
//    }

public function credits(){

        return view ('sales.cr');
    }

}
