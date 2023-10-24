<?php

namespace App\Http\Controllers;
use FpdfBarcode;
use App\Models\User;
use App\Models\Product;
use App\Models\Received;
use App\Models\Transfer;
use App\Models\Pickorder;
use App\Models\Rcproduct;
use App\Models\Warehouse;
use App\Models\Mastercase;
use App\Models\Binlocation;
use App\Models\PalletLabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ReportController extends Controller
{
    
    protected $fpdf;
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->fpdf = new FpdfBarcode();
    }
    //
    public function reportview()
    {
        //
        $wh=Warehouse::where('is_active','1')->get();
        $mc=Mastercase::get();
        return view('admin.report.recieved',compact('mc','wh'));
    }



    public function gen_recieved(Request $request)
    {
        $startDate=$request->from_date;
        $endDate=$request->to_date;
        $tbl="";
        if(isset($request->warehouse)||isset($request->mastercase)||isset($request->from_date)|| isset($request->to_date))
        {
                $pr=Received::query();
                if(isset($request->warehouse))
                {
                    $pr=$pr->where('warehouse',$request->warehouse);
                }
                if(isset($request->mastercase))
                {
                    $pr=$pr->where('mcid',$request->mastercase);
                }
                if(isset($request->from_date)|| isset($request->to_date))
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }
                $pr=$pr->whereRaw("STR_TO_DATE(arr_date, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }
        
        
                if($pr->count()>0)
                    {
                        $pr=$pr->get();
                        $tbl='';
                        foreach($pr as $p)
                        {
                            $tbl.='<tr>
                            <td>'.getwarehouse($p->warehouse).'</td>
                            <td>'.getmastercase($p->mcid).'</td>
                            <td>'.$p->arr_date.'</td>
                            <td>'.$p->order_no.'</td>
                            <td>'.$p->container_no.'</td>
                            <td>'.$p->mc_quantity.'</td>
                            <td style="text-align:center;">
                            <div role="group" class="btn-group-lg btn-group btn-group-toggle">

                            <a href="'.route('viewreceived', $p->id).'" target="_blank">
                                <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View">
                                    <i class="lnr-eye icon-gradient bg-grow-early"></i>
                                </div>
                            </a>

                        
                        </div>
                            </td>
                            
                            
                            </tr>';
                        }
                        
                    }
                    else{
                        $tbl='<tr>
                        <td colspan="7" style="text-align:center;"> <b class="text-danger">No Record Found!</b></td>
                        </tr>';
                    }
                    return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'','rec'=>$tbl]);
        }
        else{
            $tbl='<tr>
            <td colspan="9" style="text-align:center;"> <b class="text-danger">No Record Found!</b></td>
            </tr>';
            return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'','rec'=>$tbl]);
    

        }

    }

    public function checkinview()
    {
        //
        $wh=Warehouse::where('is_active','1')->get();
        $mc=Mastercase::get();
        return view('admin.report.checkin',compact('mc','wh'));
    }

    public function gen_checkin(Request $request)
    {
        $startDate=$request->from_date;
        $endDate=$request->to_date;
        $tbl="";
        if(isset($request->warehouse)||isset($request->mastercase)||isset($request->from_date)|| isset($request->to_date))
        {
            $pr=Received::query();

            if(isset($request->warehouse))
            {
                $pr=$pr->where('warehouse',$request->warehouse);
            }
            if(isset($request->mastercase))
            {
                $pr=$pr->where('mcid',$request->mastercase);
            }
            if(isset($request->from_date)|| isset($request->to_date))
            {
                if(isset($request->from_date))
                {
                    $startDate=$request->from_date;
                }
                else{
                    $startDate="2000-01-01";
                }

                if(isset($request->to_date))
                {
                    $endDate=$request->to_date;
                }
                else{
                    $endDate=date("Y-m-d");
                }
                $pr=$pr->whereRaw("STR_TO_DATE(arr_date, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
            }
            if($pr->count()>0)
            {
                $pr=$pr->get();
                $tbl='';
                foreach($pr as $p)
                {
                    $tbl.='<tr>
                    <td>'.getwarehouse($p->warehouse).'</td>
                    <td>'.getmastercase($p->mcid).'</td>
                    <td>'.$p->arr_date.'</td>
                    <td>'.$p->order_no.'</td>
                    <td>'.$p->container_no.'</td>
                    <td>'.$p->mc_quantity.'</td>
                    <td>'.$p->hi*$p->ti.'</td>
                    <td>'.$p->pallet_count.'</td>
                    <td style="text-align:center;">
                    <div role="group" class="btn-group-lg btn-group btn-group-toggle">

                    <a href="#" target="_blank">
                        <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View">
                            <i class="lnr-eye icon-gradient bg-grow-early"></i>
                        </div>
                    </a>

                
                </div>
                    </td>
                    
                    
                    </tr>';
                }
                
            }
            else{
                $tbl='<tr>
                <td colspan="9" style="text-align:center;"> <b class="text-danger">No Record Found!</b></td>
                </tr>';
            }
            return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'','rec'=>$tbl]);
    
        }
        else{
            $tbl='<tr>
            <td colspan="9" style="text-align:center;"> <b class="text-danger">No Record Found!</b></td>
            </tr>';
            return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'','rec'=>$tbl]);
    
        }

        
    }
    public function inventoryview()
    {
        //
        $wh=Warehouse::where('is_active','1')->get();
        $mc=Mastercase::get();
        $user=User::get();
        $product=Product::get();
        $bin=Binlocation::get();
        return view('admin.report.inventory',compact('product','wh','mc','bin','user')); 
        
    }
    public function gen_inventory(Request $request)
    {
        
        
        $result = PalletLabel::select(
            'pallet_labels.id', 
            'pallet_labels.warehouse',
            'receiveds.id',
            'receiveds.arr_date',
            'receiveds.created_at',
            'receiveds.mcid',
            'receiveds.mc_quantity',
            'pallet_labels.palletno',
            'pallet_labels.avl_qty',
            'pallet_labels.status',
            'stock_placements.bin_id',
            'binlocations.name')
        ->join('receiveds', 'pallet_labels.rc_id', '=', 'receiveds.id')
        ->leftJoin('stock_placements', 'pallet_labels.id', '=', 'stock_placements.label_id')
        ->leftJoin('binlocations', 'stock_placements.bin_id', '=', 'binlocations.id')
        ->whereNotNull('pallet_labels.avl_qty')
        ->where('pallet_labels.avl_qty', '>', 0);
        // Filter For Warehouse
        if(isset($request->warehouse))
        {
            if($request->warehouse=="All")
            {
                
            }
            else{
                $result=$result->where('receiveds.warehouse',$request->warehouse);
            }
        }
        // Filter For Master Case   
        if(isset($request->mastercase))
        {
                $result=$result->where('receiveds.mcid',$request->mastercase);
        }

        // Filter For Pallet No   
        if(isset($request->pallet_no))
        {
                $result=$result->where('pallet_labels.palletno',$request->pallet_no);
        }
        // Filter For Bin Location   
        if(isset($request->binlocation))
        {
                $result=$result->where('stock_placements.bin_id',$request->binlocation);
        }
        // Filter for Products
        if(isset($request->product))
        {
            if($request->date=="expiry")
            {
                if(isset($request->from_date)|| isset($request->to_date))
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                }
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->whereRaw("STR_TO_DATE(rcproducts.expiry, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate])
                ->distinct()
                ->get();
            }
            else{
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->distinct()
                ->get();

            }
                
                $result=$result->whereIn('receiveds.id', $pr);
               
        }
        // Filter for Status
        if(isset($request->status))
        {
                $result=$result->where('pallet_labels.status', $request->status);
               
        }
        // Filter for Date
      
        
        if(isset($request->from_date)|| isset($request->to_date))
        {
                
                if($request->date!="expiry")
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                    $result=$result->whereRaw("STR_TO_DATE(receiveds.".$request->date.", '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }
                else{
                    $startDate="2000-01-01";
                    $endDate=date("Y-m-d");
                            $result=$result->whereRaw("STR_TO_DATE(receiveds.arr_date, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }

                
                
        }
        $result=$result->orderBy('pallet_labels.warehouse')->orderBy('receiveds.arr_date');
      
        
            $thead="<tr>
            <th>Warehouse Name</th>
            <th>Entry Date & Time</th>
            <th>Master Case Name UPC</th>
            <th>MC Recieved Quantity</th>
            <th>Available Quantity</th>
            <th>Product Details</th>
            <th>Pallet No</th>
            <th>Bin Location</th>
           
            </tr>";
           
          
            if($result->count()>0)
            {
               
                $result=$result->get();
                $tbody='';
                foreach($result as $p)
                {
                    $tbody.='<tr>
                        <td>'.getwarehouse($p->warehouse).'</td>
                        <td>'.$p->created_at->format('Y-m-d h:i:s A').'</td>
                        <td>'.getmastercase($p->mcid).'</td>
                        <td>'.$p->mc_quantity.'</td>
                        <td>'.$p->avl_qty.'</td>
                       
                        <td>'.get_mc_pro_wise($p->mcid,$p->avl_qty).'</td>
                        <td>'.$p->palletno.'</td>
                        <td>'.$p->name.'</td>
                        
                        </tr>';
                }
               
    
               
            }
            else{
              
                $tbody='<tr>
                <td colspan="8" style="text-align:center;"> <b class="text-danger">No Record Found!</b></td>
                </tr>';
            }
            
    
            return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'','tbody'=>$tbody ,'thead'=>$thead]);
    

        

       
        

    
    }

    public function stockinview()
    {
        //
        $wh=Warehouse::where('is_active','1')->get();
        $mc=Mastercase::get();
        $user=User::get();
        $product=Product::get();
        $bin=Binlocation::get();
        return view('admin.report.stockin',compact('product','wh','mc','bin','user')); 
    }

    public function stockoutview()
    {
        //
        $wh=Warehouse::where('is_active','1')->get();
        $mc=Mastercase::get();
        $user=User::get();
        $product=Product::get();
        $bin=Binlocation::get();
        return view('admin.report.stockout',compact('product','wh','mc','bin','user')); 
    }

    public function gen_stockout(Request $request)
    {
        
        $result = Pickorder::select(
            'receiveds.warehouse',
            'pickorders.trans_no',
            'pickorders.user',
            'pickorders.mc_id',
            'pickorders.bin_id',
            'pickorders.label_no',
            'binlocations.name',
            'pickorders.qty',
            'pickorders.pick_by',
            'pickorders.pick_date',
            'pickorders.created_at'
        )
        ->join('binlocations', 'binlocations.id', '=', 'pickorders.bin_id')
        ->join('receiveds', 'receiveds.id', '=', 'pickorders.rc_id');
        // Filter For Warehouse
        if(isset($request->warehouse))
        {
            if($request->warehouse=="All")
            {
                
            }
            else{
                $result=$result->where('receiveds.warehouse',$request->warehouse);
            }
        }
        // Filter For Master Case   
        if(isset($request->mastercase))
        {
                $result=$result->where('pickorders.mc_id',$request->mastercase);
        }

        // Filter For Pallet No   
        if(isset($request->pallet_no))
        {
                $result=$result->where('pickorders.label_no',$request->pallet_no);
        }
        // Filter For User   
        if(isset($request->user))
        {
                $result=$result->where('pickorders.user',$request->user);
        }
        // Filter For Bin Location   
        if(isset($request->binlocation))
        {
                $result=$result->where('pickorders.bin_id',$request->binlocation);
        }
        // Filter for Products
        if(isset($request->product))
        {
            if($request->date=="expiry")
            {
                if(isset($request->from_date)|| isset($request->to_date))
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                }
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->whereRaw("STR_TO_DATE(rcproducts.expiry, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate])
                ->distinct()
                ->get();
            }
            else{
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->distinct()
                ->get();

            }
                
                $result=$result->whereIn('pickorders.rc_id', $pr);
               
        }
        // Filter for Status
        if(isset($request->status))
        {
                $result=$result->where('pickorders.pick_status', $request->status);
               
        }
        // Filter for Date
      
        
        if(isset($request->from_date)|| isset($request->to_date))
        {
                
                if($request->date!="expiry")
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                    $result=$result->whereRaw("STR_TO_DATE(pickorders.".$request->date.", '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }
                else{
                    $startDate="2000-01-01";
                    $endDate=date("Y-m-d");
                            $result=$result->whereRaw("STR_TO_DATE(pickorders.created_at, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }

                
                
        }
        $result=$result->orderBy('receiveds.warehouse');
      
        
            $thead="<tr>
            <th>Warehouse</th>
            <th>Master Case</th>
            <th>Transaction No</th>
            <th>Entry Date</th>
            <th>MC Quantity</th>
            <th>Product Quantity</th>
            <th>Pallet No</th>
            <th>Bin Location</th>
            <th>Picked By</th>
            <th>Picked at</th>
            </tr>";
           
          
            if($result->count()>0)
            {
               
                $result=$result->get();
                $tbody='';
                foreach($result as $p)
                {
                    $tbody.='<tr>
                        <td>'.getwarehouse($p->warehouse).'</td>
                        <td>'.getmastercase($p->mc_id).'</td>
                        <td><b>'.$p->trans_no.'</b></td>
                        <td> User: '.getusername($p->user).'<br>'.$p->created_at->format('Y-m-d h:i:s A').'</td>
                        <td>'.$p->qty.'</td>
                        <td>'.get_mc_pro_wise_out($p->mc_id,$p->qty).'</td>
                        <td>'.$p->label_no.'</td>
                        <td>'.$p->name.'</td>
                        <td>'.$p->pick_by.'</td>
                        <td>'.$p->pick_date.'</td>
                        
                        </tr>';
                }
               
    
               
            }
            else{
              
                $tbody='<tr>
                <td colspan="8" style="text-align:center;"> <b class="text-danger">No Record Found!</b></td>
                </tr>';
            }
            
    
            return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'','tbody'=>$tbody ,'thead'=>$thead]);
    

        

       
        

    }
    public function gen_stockin(Request $request)
    {
        
        $result = PalletLabel::select(
            'pallet_labels.id', 
            'pallet_labels.warehouse',
            'receiveds.id',
            'receiveds.user',
            'receiveds.arr_date',
            'receiveds.created_at',
            'receiveds.mcid',
            'receiveds.mc_quantity',
            'pallet_labels.palletno',
            'pallet_labels.mc_qty',
            'pallet_labels.status',
            'stock_placements.bin_id',
            'binlocations.name')
        ->join('receiveds', 'pallet_labels.rc_id', '=', 'receiveds.id')
        ->leftJoin('stock_placements', 'pallet_labels.id', '=', 'stock_placements.label_id')
        ->leftJoin('binlocations', 'stock_placements.bin_id', '=', 'binlocations.id');
        // Filter For Warehouse
        if(isset($request->warehouse))
        {
            if($request->warehouse=="All")
            {
                
            }
            else{
                $result=$result->where('pallet_labels.warehouse',$request->warehouse);
            }
        }
        // Filter For Master Case   
        if(isset($request->mastercase))
        {
                $result=$result->where('receiveds.mcid',$request->mastercase);
        }

        // Filter For Pallet No   
        if(isset($request->pallet_no))
        {
                $result=$result->where('pallet_labels.palletno',$request->pallet_no);
        }
        // Filter For User   
        if(isset($request->user))
        {
                $result=$result->where('receiveds.user',$request->user);
        }
        // Filter For Bin Location   
        if(isset($request->binlocation))
        {
                $result=$result->where('stock_placements.bin_id',$request->binlocation);
        }
        // Filter for Products
        if(isset($request->product))
        {
            if($request->date=="expiry")
            {
                if(isset($request->from_date)|| isset($request->to_date))
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                }
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->whereRaw("STR_TO_DATE(rcproducts.expiry, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate])
                ->distinct()
                ->get();
            }
            else{
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->distinct()
                ->get();

            }
                
                $result=$result->whereIn('receiveds.id', $pr);
               
        }
        // Filter for Status
        if(isset($request->status))
        {
                $result=$result->where('pallet_labels.status', $request->status);
               
        }
        // Filter for Date
      
        
        if(isset($request->from_date)|| isset($request->to_date))
        {
                
                if($request->date!="expiry")
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                    $result=$result->whereRaw("STR_TO_DATE(receiveds.".$request->date.", '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }
                else{
                    $startDate="2000-01-01";
                    $endDate=date("Y-m-d");
                            $result=$result->whereRaw("STR_TO_DATE(receiveds.arr_date, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }

                
                
        }
        $result=$result->orderBy('pallet_labels.warehouse')->orderBy('receiveds.arr_date');
      
        
            $thead="<tr>
            <th>Warehouse Name</th>
            <th>Entry Date & Time</th>
            <th>Master Case Name UPC</th>
            <th>MC Recieved Quantity</th>
            <th>Product Details</th>
            <th>Pallet No</th>
            <th>Bin Location</th>
            <th>Recieved By</th>
            <th>Allocated By</th>
            </tr>";
           
          
            if($result->count()>0)
            {
               
                $result=$result->get();
                $tbody='';
                foreach($result as $p)
                {
                    $tbody.='<tr>
                        <td>'.getwarehouse($p->warehouse).'</td>
                        <td> '.$p->created_at->format('Y-m-d h:i:s A').'</td>
                        <td>'.getmastercase($p->mcid).'</td>
                        <td>'.$p->mc_qty.'</td>
                        <td>'.get_mc_pro_wise($p->mcid,$p->mc_qty).'</td>
                        <td>'.$p->palletno.'</td>
                        <td>'.$p->name.'</td>
                        
                        <td>'.getusername($p->user).'</td>
                       
                        <td></td>
                       
                       
                       
                        
                        </tr>';
                }
               
    
               
            }
            else{
              
                $tbody='<tr>
                <td colspan="8" style="text-align:center;"> <b class="text-danger">No Record Found!</b></td>
                </tr>';
            }
            
    
            return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'','tbody'=>$tbody ,'thead'=>$thead]);
    

        

       
        

    }

    public function gen_excel(Request $request)
    {
        
        $result = PalletLabel::select(
            'pallet_labels.id', 
            'pallet_labels.warehouse',
            'receiveds.id',
            'receiveds.arr_date',
            'receiveds.created_at',
            'receiveds.mcid',
            'receiveds.mc_quantity',
            'pallet_labels.palletno',
            'pallet_labels.mc_qty',
            'pallet_labels.status',
            'stock_placements.bin_id',
            'binlocations.name')
        ->join('receiveds', 'pallet_labels.rc_id', '=', 'receiveds.id')
        ->leftJoin('stock_placements', 'pallet_labels.id', '=', 'stock_placements.label_id')
        ->leftJoin('binlocations', 'stock_placements.bin_id', '=', 'binlocations.id');
        // Filter For Warehouse
        if(isset($request->warehouse))
        {
            if($request->warehouse=="All")
            {
                
            }
            else{
                $result=$result->where('pallet_labels.warehouse',$request->warehouse);
            }
        }
        // Filter For Master Case   
        if(isset($request->mastercase))
        {
                $result=$result->where('receiveds.mcid',$request->mastercase);
        }
        // Filter For User   
        if(isset($request->user))
        {
                $result=$result->where('receiveds.user',$request->user);
        }

        // Filter For Pallet No   
        if(isset($request->pallet_no))
        {
                $result=$result->where('pallet_labels.palletno',$request->pallet_no);
        }
        // Filter For User   
        if(isset($request->user))
        {
                $result=$result->where('receiveds.user',$request->user);
        }
        // Filter For Bin Location   
        if(isset($request->binlocation))
        {
                $result=$result->where('stock_placements.bin_id',$request->binlocation);
        }
        // Filter for Products
        if(isset($request->product))
        {
            if($request->date=="expiry")
            {
                if(isset($request->from_date)|| isset($request->to_date))
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                }
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->whereRaw("STR_TO_DATE(rcproducts.expiry, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate])
                ->distinct()
                ->get();
            }
            else{
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->distinct()
                ->get();

            }
                
                $result=$result->whereIn('receiveds.id', $pr);
               
        }
        // Filter for Status
        if(isset($request->status))
        {
                $result=$result->where('pallet_labels.status', $request->status);
               
        }
        // Filter for Date
      
        
        if(isset($request->from_date)|| isset($request->to_date))
        {
                
                if($request->date!="expiry")
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                    $result=$result->whereRaw("STR_TO_DATE(receiveds.".$request->date.", '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }
                else{
                    $startDate="2000-01-01";
                    $endDate=date("Y-m-d");
                            $result=$result->whereRaw("STR_TO_DATE(receiveds.arr_date, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }

                
                
        }
        $result=$result->orderBy('receiveds.warehouse')->orderBy('receiveds.arr_date');
      
            if($result->count()>0)
            {
                            $result=$result->get();
                            // Create a new spreadsheet
                            $spreadsheet = new Spreadsheet();
                            $worksheet = $spreadsheet->getActiveSheet();
                            $data = [];
                            $data[]=[
                                'Warehouse Name',
                                'Entry Date & Time',
                                'Master Case Name UPC',
                                'MC Recieved Quantity',
                                'Product Detail',
                                'Pallet No',
                                'Bin Location',
                                'Recieved By',
                                'Allocated By'];

                            // Define your data (example data)
                           
                            foreach($result as $p)
                            {
                               
                                $data[]=[
                                    getwarehouse($p->warehouse),  
                                    $p->created_at->format('Y-m-d h:i:s A'),                 
                                    getmastercase($p->mcid),
                                    $p->mc_qty,
                                    get_mc_pro_wise_excel($p->mcid,$p->mc_qty),
                                    $p->palletno,
                                    $p->name,
                                    "Admin",
                                    ""
                                ];
                            }
                            
                        

                            // Populate the worksheet with data
                            foreach ($data as $rowIndex => $rowData) {
                                foreach ($rowData as $colIndex => $value) {
                                    $worksheet->setCellValueByColumnAndRow($colIndex + 1, $rowIndex + 1, $value);
                                }
                            }

                            // Create a response with the Excel file
                            $writer = new Xlsx($spreadsheet);
                            $temp_file = tempnam(sys_get_temp_dir(), 'exported-data');
                            $writer->save($temp_file);

                            return response()->stream(
                                function () use ($temp_file) {
                                    readfile($temp_file);
                                    unlink($temp_file); // Delete the temporary file after it's streamed
                                },
                                200,
                                [
                                    'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                    'Content-Disposition' => 'attachment; filename="stockin_report_'.date("Y_m_d_h_i_s").'.xlsx"',
                                ]
                            );
             
    
               
            }
            else{
               echo "No File Generated because no Record Found";
            }
            
    
          
    
    }

    public function gen_inventory_excel(Request $request)
    {
        
        $result = PalletLabel::select(
            'pallet_labels.id', 
            'receiveds.warehouse',
            'receiveds.id',
            'receiveds.arr_date',
            'receiveds.created_at',
            'receiveds.mcid',
            'receiveds.mc_quantity',
            'pallet_labels.palletno',
            'pallet_labels.avl_qty',
            'pallet_labels.status',
            'stock_placements.bin_id',
            'binlocations.name')
        ->join('receiveds', 'pallet_labels.rc_id', '=', 'receiveds.id')
        ->leftJoin('stock_placements', 'pallet_labels.id', '=', 'stock_placements.label_id')
        ->leftJoin('binlocations', 'stock_placements.bin_id', '=', 'binlocations.id')
        ->whereNotNull('pallet_labels.avl_qty')
        ->where('pallet_labels.avl_qty', '>', 0);
        // Filter For Warehouse
        if(isset($request->warehouse))
        {
            if($request->warehouse=="All")
            {
                
            }
            else{
                $result=$result->where('receiveds.warehouse',$request->warehouse);
            }
        }
        // Filter For Master Case   
        if(isset($request->mastercase))
        {
                $result=$result->where('receiveds.mcid',$request->mastercase);
        }

        // Filter For Pallet No   
        if(isset($request->pallet_no))
        {
                $result=$result->where('pallet_labels.palletno',$request->pallet_no);
        }
        // Filter For User   
        if(isset($request->user))
        {
                $result=$result->where('receiveds.user',$request->user);
        }
        // Filter For Bin Location   
        if(isset($request->binlocation))
        {
                $result=$result->where('stock_placements.bin_id',$request->binlocation);
        }
        // Filter For User   
        if(isset($request->user))
        {
                $result=$result->where('receiveds.user',$request->user);
        }
        // Filter for Products
        if(isset($request->product))
        {
            if($request->date=="expiry")
            {
                if(isset($request->from_date)|| isset($request->to_date))
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                }
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->whereRaw("STR_TO_DATE(rcproducts.expiry, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate])
                ->distinct()
                ->get();
            }
            else{
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->distinct()
                ->get();

            }
                
                $result=$result->whereIn('receiveds.id', $pr);
               
        }
        // Filter for Status
        if(isset($request->status))
        {
                $result=$result->where('pallet_labels.status', $request->status);
               
        }
        // Filter for Date
      
        
        if(isset($request->from_date)|| isset($request->to_date))
        {
                
                if($request->date!="expiry")
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                    $result=$result->whereRaw("STR_TO_DATE(receiveds.".$request->date.", '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }
                else{
                    $startDate="2000-01-01";
                    $endDate=date("Y-m-d");
                            $result=$result->whereRaw("STR_TO_DATE(receiveds.arr_date, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }

                
                
        }
        $result=$result->orderBy('receiveds.warehouse')->orderBy('receiveds.arr_date');
      
            if($result->count()>0)
            {
                            $result=$result->get();
                            // Create a new spreadsheet
                            $spreadsheet = new Spreadsheet();
                            $worksheet = $spreadsheet->getActiveSheet();
                            $data = [];
                            $data[]=[
                                'Warehouse Name',
                                'Entry Date & Time',
                                'Master Case Name UPC',
                                'MC Recieved Quantity',
                                'Available Quantity',
                                'Product Details',
                                'Pallet No',
                                'Bin Location',];

                            // Define your data (example data)
                           
                            foreach($result as $p)
                            {
                                $data[]=[
                                    getwarehouse($p->warehouse),
                                    $p->created_at->format('Y-m-d h:i:s A'),
                                    getmastercase($p->mcid),
                                    $p->mc_quantity,
                                    $p->avl_qty,
                                    get_mc_pro_wise_excel($p->mcid,$p->avl_qty),
                                    $p->palletno,
                                    $p->name,
                                ];
                            }
                            
                        

                            // Populate the worksheet with data
                            foreach ($data as $rowIndex => $rowData) {
                                foreach ($rowData as $colIndex => $value) {
                                    $worksheet->setCellValueByColumnAndRow($colIndex + 1, $rowIndex + 1, $value);
                                }
                            }

                            // Create a response with the Excel file
                            $writer = new Xlsx($spreadsheet);
                            $temp_file = tempnam(sys_get_temp_dir(), 'exported-data');
                            $writer->save($temp_file);

                            return response()->stream(
                                function () use ($temp_file) {
                                    readfile($temp_file);
                                    unlink($temp_file); // Delete the temporary file after it's streamed
                                },
                                200,
                                [
                                    'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                    'Content-Disposition' => 'attachment; filename="inventory_report_'.date("Y_m_d_h_i_s").'.xlsx"',
                                ]
                            );
             
    
               
            }
            else{
               echo "No File Generated because no Record Found";
            }
            
    
          
    
    }

    public function gen_stockout_excel(Request $request)
    {
        
        $result = Pickorder::select(
            'receiveds.warehouse',
            'pickorders.trans_no',
            'pickorders.mc_id',
            'pickorders.bin_id',
            'pickorders.label_no',
            'binlocations.name',
            'pickorders.qty',
            'pickorders.pick_by',
            'pickorders.pick_date',
            'pickorders.created_at'
        )
        ->join('binlocations', 'binlocations.id', '=', 'pickorders.bin_id')
        ->join('receiveds', 'receiveds.id', '=', 'pickorders.rc_id');
        // Filter For Warehouse
        if(isset($request->warehouse))
        {
            if($request->warehouse=="All")
            {
                
            }
            else{
                $result=$result->where('receiveds.warehouse',$request->warehouse);
            }
        }
        // Filter For Master Case   
        if(isset($request->mastercase))
        {
                $result=$result->where('pickorders.mc_id',$request->mastercase);
        }

        // Filter For Pallet No   
        if(isset($request->pallet_no))
        {
                $result=$result->where('pickorders.label_no',$request->pallet_no);
        }
        // Filter For User   
        if(isset($request->user))
        {
                $result=$result->where('pickorders.user',$request->user);
        }
        // Filter For Bin Location   
        if(isset($request->binlocation))
        {
                $result=$result->where('pickorders.bin_id',$request->binlocation);
        }
        // Filter for Products
        if(isset($request->product))
        {
            if($request->date=="expiry")
            {
                if(isset($request->from_date)|| isset($request->to_date))
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                }
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->whereRaw("STR_TO_DATE(rcproducts.expiry, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate])
                ->distinct()
                ->get();
            }
            else{
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->distinct()
                ->get();

            }
                
                $result=$result->whereIn('pickorders.rc_id', $pr);
               
        }
        // Filter for Status
        if(isset($request->status))
        {
                $result=$result->where('pickorders.pick_status', $request->status);
               
        }
        // Filter for Date
      
        
        if(isset($request->from_date)|| isset($request->to_date))
        {
                
                if($request->date!="expiry")
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                    $result=$result->whereRaw("STR_TO_DATE(pickorders.".$request->date.", '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }
                else{
                    $startDate="2000-01-01";
                    $endDate=date("Y-m-d");
                            $result=$result->whereRaw("STR_TO_DATE(pickorders.created_at, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }

                
                
        }
        $result=$result->orderBy('receiveds.warehouse');
      
            if($result->count()>0)
            {
                            $result=$result->get();
                            // Create a new spreadsheet
                            $spreadsheet = new Spreadsheet();
                            $worksheet = $spreadsheet->getActiveSheet();
                            $data = [];
                            $data[]=[
                                'Warehouse',
                                'Master Case',
                                'Transaction No',
                                'Entry Date & Time',
                                'MC Quantity',
                                'Pallet No',
                                'Bin Location',
                                'Picked By',
                                'Picked At'];

                            // Define your data (example data)
                           
                            foreach($result as $p)
                            {
                                $data[]=[
                                    getwarehouse($p->warehouse),
                                    getmastercase($p->mc_id),
                                    $p->trans_no,
                                    $p->created_at->format('Y-m-d h:i:s A'),
                                    $p->qty,
                                    $p->label_no,
                                    $p->name,
                                    $p->pick_by,
                                    $p->pick_date,
                                ];
                            }
                            
                        

                            // Populate the worksheet with data
                            foreach ($data as $rowIndex => $rowData) {
                                foreach ($rowData as $colIndex => $value) {
                                    $worksheet->setCellValueByColumnAndRow($colIndex + 1, $rowIndex + 1, $value);
                                }
                            }

                            // Create a response with the Excel file
                            $writer = new Xlsx($spreadsheet);
                            $temp_file = tempnam(sys_get_temp_dir(), 'exported-data');
                            $writer->save($temp_file);

                            return response()->stream(
                                function () use ($temp_file) {
                                    readfile($temp_file);
                                    unlink($temp_file); // Delete the temporary file after it's streamed
                                },
                                200,
                                [
                                    'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                    'Content-Disposition' => 'attachment; filename="stock_out_report_'.date("Y_m_d_h_i_s").'.xlsx"',
                                ]
                            );
             
    
               
            }
            else{
               echo "No File Generated because no Record Found";
            }
            
    
          
    
    }

    public function exportexcel($p)
    {

    }

    public function gen_pdf(Request $request)
    {
        
        $result = PalletLabel::select(
            'pallet_labels.id', 
            'pallet_labels.warehouse',
            'receiveds.id',
            'receiveds.arr_date',
            'receiveds.created_at',
            'receiveds.mcid',
            'receiveds.mc_quantity',
            'pallet_labels.palletno',
            'pallet_labels.mc_qty',
            'pallet_labels.status',
            'stock_placements.bin_id',
            'binlocations.name')
        ->join('receiveds', 'pallet_labels.rc_id', '=', 'receiveds.id')
        ->leftJoin('stock_placements', 'pallet_labels.id', '=', 'stock_placements.label_id')
        ->leftJoin('binlocations', 'stock_placements.bin_id', '=', 'binlocations.id');
        // Filter For Warehouse
        if(isset($request->warehouse))
        {
            if($request->warehouse=="All")
            {
                
            }
            else{
                $result=$result->where('pallet_labels.warehouse',$request->warehouse);
            }
        }
        // Filter For Master Case   
        if(isset($request->mastercase))
        {
                $result=$result->where('receiveds.mcid',$request->mastercase);
        }
        // Filter For User   
        if(isset($request->user))
        {
                $result=$result->where('receiveds.user',$request->user);
        }
        // Filter For Pallet No   
        if(isset($request->pallet_no))
        {
                $result=$result->where('pallet_labels.palletno',$request->pallet_no);
        }
        // Filter For User   
        if(isset($request->user))
        {
                $result=$result->where('receiveds.user',$request->user);
        }
        // Filter For Bin Location   
        if(isset($request->binlocation))
        {
                $result=$result->where('stock_placements.bin_id',$request->binlocation);
        }
        // Filter for Products
        if(isset($request->product))
        {
            if($request->date=="expiry")
            {
                if(isset($request->from_date)|| isset($request->to_date))
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                }
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->whereRaw("STR_TO_DATE(rcproducts.expiry, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate])
                ->distinct()
                ->get();
            }
            else{
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->distinct()
                ->get();

            }
                
                $result=$result->whereIn('receiveds.id', $pr);
               
        }
        // Filter for Status
        if(isset($request->status))
        {
                $result=$result->where('pallet_labels.status', $request->status);
               
        }
        // Filter for Date
      
        
        if(isset($request->from_date)|| isset($request->to_date))
        {
                
                if($request->date!="expiry")
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                    $result=$result->whereRaw("STR_TO_DATE(receiveds.".$request->date.", '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }
                else{
                    $startDate="2000-01-01";
                    $endDate=date("Y-m-d");
                            $result=$result->whereRaw("STR_TO_DATE(receiveds.arr_date, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }

                
                
        }
        $result=$result->orderBy('receiveds.warehouse')->orderBy('receiveds.arr_date');
      
            if($result->count()>0)
            { 
                    $this->fpdf->AddPage('L','Legal');
                    $this->fpdf->SetFont('Arial','',12);
                    $this->fpdf->Cell(335,7,"Stock In Report ",1,1,'C');
                    $header = array(
                        'Warehouse',
                        'Master Case',
                        'Arrival Date',
                        'Entry Date & Time',
                        'Rc/Qty',
                        'Pallet No',
                        'Mc/Qty',
                        'Bin Location');
                            $result=$result->get();
                            $data = array();
                            foreach ($result as $p) {
                               
                                $data[] = array(
                                    getwarehouse($p->warehouse),
                                    getmastercase($p->mcid),
                                    $p->arr_date,
                                    $p->created_at->format('Y-m-d h:i:s A'),
                                    $p->mc_quantity,
                                    $p->palletno,
                                    $p->mc_qty,
                                    $p->name,);
                                    
                            }
                        $this->fpdf->StockTable($header,$data);
                            
                    $this->fpdf->Output();

                     exit;
                           
             
    
               
            }
            else{
               echo "No File Generated because no Record Found";
            }
            
    
          
    

   
 
    }
    public function gen_inventory_pdf(Request $request)
    {
        
        $result = PalletLabel::select(
            'pallet_labels.id', 
            'receiveds.warehouse',
            'receiveds.id',
            'receiveds.arr_date',
            'receiveds.created_at',
            'receiveds.mcid',
            'receiveds.mc_quantity',
            'pallet_labels.palletno',
            'pallet_labels.avl_qty',
            'pallet_labels.status',
            'stock_placements.bin_id',
            'binlocations.name')
        ->join('receiveds', 'pallet_labels.rc_id', '=', 'receiveds.id')
        ->leftJoin('stock_placements', 'pallet_labels.id', '=', 'stock_placements.label_id')
        ->leftJoin('binlocations', 'stock_placements.bin_id', '=', 'binlocations.id')
        ->whereNotNull('pallet_labels.avl_qty')
        ->where('pallet_labels.avl_qty', '>', 0);
        // Filter For Warehouse
        if(isset($request->warehouse))
        {
            if($request->warehouse=="All")
            {
                
            }
            else{
                $result=$result->where('receiveds.warehouse',$request->warehouse);
            }
        }
        // Filter For Master Case   
        if(isset($request->mastercase))
        {
                $result=$result->where('receiveds.mcid',$request->mastercase);
        }

        // Filter For Pallet No   
        if(isset($request->pallet_no))
        {
                $result=$result->where('pallet_labels.palletno',$request->pallet_no);
        }
        // Filter For User   
        if(isset($request->user))
        {
                $result=$result->where('receiveds.user',$request->user);
        }
        // Filter For Bin Location   
        if(isset($request->binlocation))
        {
                $result=$result->where('stock_placements.bin_id',$request->binlocation);
        }
        // Filter for Products
        if(isset($request->product))
        {
            if($request->date=="expiry")
            {
                if(isset($request->from_date)|| isset($request->to_date))
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                }
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->whereRaw("STR_TO_DATE(rcproducts.expiry, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate])
                ->distinct()
                ->get();
            }
            else{
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->distinct()
                ->get();

            }
                
                $result=$result->whereIn('receiveds.id', $pr);
               
        }
        // Filter for Status
        if(isset($request->status))
        {
                $result=$result->where('pallet_labels.status', $request->status);
               
        }
        // Filter for Date
      
        
        if(isset($request->from_date)|| isset($request->to_date))
        {
                
                if($request->date!="expiry")
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                    $result=$result->whereRaw("STR_TO_DATE(receiveds.".$request->date.", '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }
                else{
                    $startDate="2000-01-01";
                    $endDate=date("Y-m-d");
                            $result=$result->whereRaw("STR_TO_DATE(receiveds.arr_date, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }

                
                
        }
        $result=$result->orderBy('receiveds.warehouse')->orderBy('receiveds.arr_date');
      
            if($result->count()>0)
            { 
                    $this->fpdf->AddPage('L','Legal');
                    $this->fpdf->SetFont('Arial','',12);
                    $this->fpdf->Cell(335,7,"Inventory Report",1,1,'C');
                    $header = array(
                        'Warehouse',
                        'Master Case',
                        'Arrival Date',
                        'Entry Date & Time',
                        'Rc/Qty',
                        'Pallet No',
                        'Avl/Qty',
                        'Bin Location');
                            $result=$result->get();
                            $data = array();
                            foreach ($result as $p) {
                               
                                $data[] = array(
                                    getwarehouse($p->warehouse),
                                    getmastercase($p->mcid),
                                    $p->arr_date,
                                    $p->created_at->format('Y-m-d h:i:s A'),
                                    $p->mc_quantity,
                                    $p->palletno,
                                    $p->avl_qty,
                                    $p->name,);
                                    
                            }
                        $this->fpdf->StockTable($header,$data);
                            
                    $this->fpdf->Output();

                     exit;
                           
             
    
               
            }
            else{
               echo "No File Generated because no Record Found";
            }
            
    
          
    

   
 
    }

    public function gen_stockout_pdf(Request $request)
    {
        
        $result = Pickorder::select(
            'receiveds.warehouse',
            'pickorders.trans_no',
            'pickorders.mc_id',
            'pickorders.bin_id',
            'pickorders.label_no',
            'binlocations.name',
            'pickorders.qty',
            'pickorders.pick_by',
            'pickorders.pick_date',
            'pickorders.created_at'
        )
        ->join('binlocations', 'binlocations.id', '=', 'pickorders.bin_id')
        ->join('receiveds', 'receiveds.id', '=', 'pickorders.rc_id');
        // Filter For Warehouse
        if(isset($request->warehouse))
        {
            if($request->warehouse=="All")
            {
                
            }
            else{
                $result=$result->where('receiveds.warehouse',$request->warehouse);
            }
        }
        // Filter For Master Case   
        if(isset($request->mastercase))
        {
                $result=$result->where('pickorders.mc_id',$request->mastercase);
        }

        // Filter For Pallet No   
        if(isset($request->pallet_no))
        {
                $result=$result->where('pickorders.label_no',$request->pallet_no);
        }
        // Filter For User   
        if(isset($request->user))
        {
                $result=$result->where('pickorders.user',$request->user);
        }
        // Filter For Bin Location   
        if(isset($request->binlocation))
        {
                $result=$result->where('pickorders.bin_id',$request->binlocation);
        }
        // Filter for Products
        if(isset($request->product))
        {
            if($request->date=="expiry")
            {
                if(isset($request->from_date)|| isset($request->to_date))
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                }
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->whereRaw("STR_TO_DATE(rcproducts.expiry, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate])
                ->distinct()
                ->get();
            }
            else{
                $pr = Rcproduct::select('rc_id')
                ->where('p_id', $request->product)
                ->distinct()
                ->get();

            }
                
                $result=$result->whereIn('pickorders.rc_id', $pr);
               
        }
        // Filter for Status
        if(isset($request->status))
        {
                $result=$result->where('pickorders.pick_status', $request->status);
               
        }
        // Filter for Date
      
        
        if(isset($request->from_date)|| isset($request->to_date))
        {
                
                if($request->date!="expiry")
                {
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                    $result=$result->whereRaw("STR_TO_DATE(pickorders.".$request->date.", '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }
                else{
                    $startDate="2000-01-01";
                    $endDate=date("Y-m-d");
                            $result=$result->whereRaw("STR_TO_DATE(pickorders.created_at, '%Y-%m-%d') BETWEEN ? AND ?", [$startDate, $endDate]);
                }

                
                
        }
        $result=$result->orderBy('receiveds.warehouse');
      
            if($result->count()>0)
            { 
                    $this->fpdf->AddPage('L','Legal');
                    $this->fpdf->SetFont('Arial','',12);
                    $this->fpdf->Cell(335,7,"Stock Out Report ",1,1,'C');
                    $header = array(
                        'Warehouse',
                        'Master Case',
                        'Trans. No',
                        'Entry Date & Time',
                        'MC Qty',
                        'Pallet No',
                        'Bin Location',
                        'Picked at',
                        'Picked By'
                    );
                            $result=$result->get();
                            $data = array();
                            foreach ($result as $p) {
                               
                                $data[] = array(
                                    getwarehouse($p->warehouse),
                                    getmastercase($p->mc_id),
                                    $p->trans_no,
                                    $p->created_at->format('Y-m-d h:i:s A'),
                                    $p->qty,
                                    $p->label_no,
                                    $p->name,
                                    $p->pick_by,
                                    $p->pick_date,
                                );
                                    
                            }
                        $this->fpdf->StockoutTable($header,$data);
                            
                    $this->fpdf->Output();

                     exit;
                           
             
    
               
            }
            else{
               echo "No File Generated because no Record Found";
            }
            
    
          
    

   
 
    }

    public function closureview()
    {
        //
     
        $mc=Mastercase::where('status','0')->get();
      
        return view('admin.report.closure',compact('mc')); 
    }
    public function reorderview()
    {
        //
     
        $mc=Mastercase::where('status','1')->get();
      
        return view('admin.report.reorder',compact('mc')); 
    }

    public function transferview()
    {
        //
        $wh=Warehouse::where('is_active','1')->get();
        $mc=Mastercase::get();
        $user=User::get();
        $product=Product::get();
        $bin=Binlocation::get();
        return view('admin.report.transfer',compact('product','wh','mc','bin','user')); 
    }
    public function gen_transfer(Request $request)
    {
        
        $result = Transfer::query();
        // Filter For Warehouse
       /* if(isset($request->from_warehouse))
        {
            if($request->from_warehouse=="All")
            {
                
            }
            else{
                $result=$result->where('p_warehouse',$request->from_warehouse);
            }
        }

        if(isset($request->to_warehouse))
        {
            if($request->to_warehouse=="All")
            {
                
            }
            else{
                $result=$result->where('n_warehouse',$request->to_warehouse);
            }
        }
       
        // Filter For Pallet No   
        if(isset($request->pallet_no))
        {
                $result=$result->where('p_pl_no',$request->pallet_no);
        }
       
       
        
        
        // Filter for Date
      
        
        if(isset($request->from_date)|| isset($request->to_date))
        {
                
               
                    if(isset($request->from_date))
                    {
                        $startDate=$request->from_date;
                    }
                    else{
                        $startDate="2000-01-01";
                    }

                    if(isset($request->to_date))
                    {
                        $endDate=$request->to_date;
                    }
                    else{
                        $endDate=date("Y-m-d");
                    }

                    $result=$result->whereRaw("created_at BETWEEN ? AND ?", [$startDate, $endDate]);
        }*/
              

                
                
        
       // $result=$result->orderBy('created_at');
      
        
            $thead="<tr>
            <th>Pallet No</th>
            <th>Master Case</th>
            <th>From Warehouse</th>
            <th>Bin Location</th>
            <th>To Warehouse</th>
            <th>New Bin location</th>
            <th>Date and Time</th>
            
            </tr>";
           
          
            if($result->count()>0)
            {
               
                $result=$result->get();
                $tbody='';
                foreach($result as $p)
                { 
                    $pbin=getbindetail($p->p_bid);
                    $nbin=getbindetail($p->n_bid);
                    $pld=getlabelinfo($p->p_pl_no);
                    $tbody.='<tr>
                        <td><b>'.$p->p_pl_no.'</b></td>
                        <td> '.getmastercase($pld->mc_id).'</td>
                        <td>'.getwarehouse($p->p_warehouse).'</td>
                        <td><b class="text-primary">'.$pbin->name.'</b></td>
                        <td>'.getwarehouse($p->n_warehouse).'</td>
                        <td><b class="text-success">'.$nbin->name.'</b></td>
                        <td>'.$p->created_at->format('Y-m-d h:i:s A').'</td>
                        
                        </tr>';
                        
                }
               
    
               
            }
            else{
              
                $tbody='<tr>
                <td colspan="8" style="text-align:center;"> <b class="text-danger">No Record Found!</b></td>
                </tr>';
            }
           

            return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'','tbody'=>$tbody ,'thead'=>$thead]);
    

        

       
        

    }



}
