<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class AdminManageController extends Controller
{
    public function index()
    {

        return view('admuse.list');
    }

    public function register()
    {

        $this->validate(request(),[
            'employee' => 'required',
            'subscriber_id' => 'required',
            'mrc' => 'required|numeric',
            'salesType' => 'required',
            'team' => 'required',
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

        Sale::create([
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
        return redirect()->route('admuse.show')->with('addSuccess', 'User Add Successful!');
    }
    
    public function credits(){
        
        return view ('admuse.cr');
    }
}
