<?php

namespace App\Http\Controllers;

use App\Models\Pickorder;
use App\Models\Warehouse;
use App\Models\Rackinfo;
use App\Models\Binlocation;
use App\Models\ReturnModel;
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
        $warehouses = Warehouse::get();

        // $picl = Pickorder::first();
        // dd($picl->binlocation);
        return view('admin.return.transection_details', compact('searchResults' , 'warehouses'));
    }


    public function getRackInfo($id){
    
    //$racks = Rackinfo::where('warehouse' , $id)->with('binlocation')->first();
       $racks = Binlocation::where('status','0')->get();
    $data = '<div class="form-group">
                <select  class="form-control">';
    //foreach ($racks->binlocation as $rack) {
    foreach ($racks as $rack) {
       // $data .= '<option value="' . $rack->id . '">' . $rack->name . '</option>';
        $data .= '<option value="">' . $rack->name . '</option>';
    }
    $data .= '</select></div>';
    
    return $data;      
}

    public function storeTransection(Request $request) {
    
    $restructuredData = [];
   // dd($request->all());
    $arrayCount = count($request->input('id'));
    for ($i = 0; $i < $arrayCount; $i++) {
        $entry = [];
        foreach ($request->except(['_token', 'value' , 'id']) as $key => $values) {
            $entry[$key] = $values[$i];
        }
        $restructuredData[] = $entry;
    }
    if (!empty($request->value)) {
        foreach ($request->value as $value) {
            $data = $restructuredData[$value];
        if(!empty($data['return_qty']) && ($data['return_qty'] <= $data['qty']) && !empty($data['bin_id'])){
            ReturnModel::create($data);
            $pick = Pickorder::find($request->id[$value]);
            $pick->palletlabel->avl_qty = $pick->palletlabel->avl_qty + $data['return_qty'];
            $pick->palletlabel->save();
        }
    }
        return redirect()->back()->with('message' , 'Return Success Full');
    }else{
        return redirect()->back()->with('message' , 'Please Check at least One check Box!');
    }
    
    }

    public function show()
    {
    $po=ReturnModel::select('*')->orderBy('id','desc')
        ->where('return_status','0')
        ->get();
     
        return view('admin.return.pendlist', compact('po'));
    }

    
    public function pendingreturn()
    {
        //
        $po=ReturnModel::select('*')->orderBy('id','desc')
        ->where('return_status','0')
        ->get();
        return view('admin.return.pendlist',compact('po'));
    }
    public function confirmedreturn()
    {
        //
        $po=ReturnModel::select('*')
        ->distinct()
        ->orderBy('id','desc')
        ->where('return_status','1')
        ->get();
        return view('admin.return.done',compact('po'));
    }
}


