<?php

namespace App\Exports;

use App\Sale;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SaleExport implements FromCollection,WithHeadings
{

    public function headings(): array
    {
        // return [
        //     'ID','user_id','Employee', 'Subscriber_ID', 'MRC', 'SalesType', 'Team','Subscriber_Name','OTC', 'Create', 'Zone', 'Offer', 'Advance', 'Payment', 'Area', 'Package','Total','Delivery','create_at',
        //     'update_at'
        // ];
        
        return [
            'ID','user_id','Employee', 'Subscriber_ID', 'MRC', 'SalesType', 'Team','Subscriber_Name','OTC', 'Delivery', 'Zone', 'Offer', 'Advance', 'Create', 'Area', 'Package','Total','Payment','create_at',
            'update_at'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    //   return Sale::all();
        //return $this->collection(Sale::getSale());
        return Sale::latest()->get();
    }
}
