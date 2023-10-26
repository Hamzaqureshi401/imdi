<?php

namespace App\Http\Controllers;

use App\Models\Pickorder;
use App\Models\Warehouse;
use App\Models\Rackinfo;
use App\Models\Binlocation;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function search(Request $request)
    {
        //dd($request->all());
        $date = $request->date;
        $transactionNo = $request->transactionNo;
        $searchResults = Pickorder::
             orWhere('trans_no', $transactionNo)
            ->orWhere('invoice_no' , $transactionNo)
            ->orWhereDate('pick_date' , $date)
            ->get();
        $wharehouses = Warehouse::get();
           // dd($searchResults , $transactionNo , $date);
        return view('admin.return.transection_details', compact('searchResults' , 'wharehouses'));
    }


    public function getRackInfo($id){
    
    //$racks = Rackinfo::where('warehouse' , $id)->with('binlocation')->first();
       $racks = Binlocation::where('status','0')->get();
    $data = '<div class="form-group">
                <select name="rack_id" class="form-control">';
    //foreach ($racks->binlocation as $rack) {
    foreach ($racks as $rack) {
        $data .= '<option value="' . $rack->id . '">' . $rack->name . '</option>';
    }
    $data .= '</select></div>';
    
    return $data;      
}

}
