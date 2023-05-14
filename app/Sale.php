<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sale extends Model
{
    protected $table = 'sales';
    protected $fillable = ['employee', 'subscriber_id', 'mrc', 'salesType', 'team','subscriber_name','otc', 'create', 'zone', 'offer', 'advance', 'payment', 'area', 'package','total','delivery'];
    protected $primarykey = 'id';
    protected $guarded=[];

    public static function  getSale()
    {
        $records = DB::table('sales')->select('employee', 'subscriber_id', 'mrc', 'salesType', 'team','subscriber_name','otc', 'create', 'zone', 'offer', 'advance', 'payment', 'area', 'package','total','delivery')->get()->toArray();
        return $records;
    }

//    public function sales(){
//
//        return $this->hasMany(Sale::class);
//    }
}
