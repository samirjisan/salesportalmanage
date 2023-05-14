<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Sale;
use Illuminate\Http\Request;
use App\Exports\SaleExport;
use Excel;

class AdminSalesManageController extends Controller
{
    public function index()
    {
        $sales = Sale::latest()->paginate(10);
        return view('admuse.showSales',compact(['sales']));
    }
    
    public function search(Request $req)
    {
        $sales = Sale::where('create','>=',$req->from)->where('create','<=',$req->to)->latest()->paginate(5000);
        return view('admuse.showSales',compact('sales'));
    }
    
    public function edit($id)
    {
//        $sale = Sale::find($id);
//        return view('sales.edit',compact('sale'));


        $sale = Sale::where('id',$id)->first();
        return view('admuse.edit',compact('sale'));

    }

    public function update($id)
    {
        //  $sale = Sale::find($id);
        $sale = Sale::where('id',$id);
        $sale->update([

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

        return redirect()->route('admuse.show')->with('updateSuccess','Update Successfully!');


    }

    public function delete($id)
    {
        Sale::where('id',$id)->delete();
        return redirect()->route('admuse.show')->with('deleteSuccess','Deleted Successfully!');
    }

    public function exportIntoExcel()
    {
        return Excel::download(new SaleExport,'salelist.xlsx');
    }

    // public function search()
    // {
    //     $search_text =$_GET['query'];
    //     $sale = Sale::where('title','LIKE','%'.$search_text.'%')->get();

    //     return view('admuse.search',compact('sale'));
    // }
}
