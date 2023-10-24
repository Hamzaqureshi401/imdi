<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Transfer;
use App\Models\Rcproduct;
use App\Models\Warehouse;
use App\Models\Mastercase;
use App\Models\Binlocation;
use App\Models\PalletLabel;
use Illuminate\Http\Request;
use App\Models\StockPlacement;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transfer=Transfer::orderBy('id', 'desc')->where('pick_status','0')->where('placed_status','0')->get();
        return view("admin.transfer.index",compact('transfer'));
    }

    public function pickedtransfer()
    {
        //
        $transfer=Transfer::orderBy('id', 'desc')->where('pick_status','1')->where('placed_status','0')->get();
        return view("admin.transfer.picked",compact('transfer'));
    }

    public function placedtransfer()
    {
        //
        $transfer=Transfer::orderBy('id', 'desc')->where('pick_status','1')->where('placed_status','1')->get();
        return view("admin.transfer.placed",compact('transfer'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
        $wh=Warehouse::where('is_active','1')->get();
        $mc=Mastercase::get();
        $user=User::get();
        $product=Product::get();
        $bin=Binlocation::get();
        return view('admin.transfer.create',compact('product','wh','mc','bin','user')); 
    }

    public function gen_transfer(Request $request)
    {
        
        
        $result = PalletLabel::select(
            'pallet_labels.id AS pid', 
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
                $result=$result->where('pallet_labels.status', '1');
               
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
            <th>Warehouse</th>
            <th>Master Case</th>
            <th>Arrival Date</th>
            <th>Entry Date & Time</th>
            <th>Recieved Quantity</th>
            <th>Pallet No</th>
            <th>Availale Quantity</th>
            <th>Product Quantity</th>
            <th>Bin Location</th>
            <th>Action</th>
            </tr>";
           
          
            if($result->count()>0)
            {
               
                $result=$result->get();
                $tbody='';
                foreach($result as $p)
                {
                    $po=checkpickorder($p->pid);
                    if($po>0)
                    {
                        $a='';         
                    }
                    else{
                        $a='<a href="'.route("transfer_view",$p->pid).'" class="btn btn-success">Transfer</a>';
                    }
                 
                    $tbody.='<tr>
                        <td>'.getwarehouse($p->warehouse).'</td>
                        <td>'.getmastercase($p->mcid).'</td>
                        <td>'.$p->arr_date.'</td>
                        <td>'.$p->created_at->format('Y-m-d h:i:s A').'</td>
                        <td>'.$p->mc_quantity.'</td>
                        <td>'.$p->palletno.'</td>
                        <td>'.$p->avl_qty.'</td>
                        <td>'.get_mc_pro_wise($p->mcid,$p->avl_qty).'</td>
                        <td>'.$p->name.'</td>
                        <td>'.$a.'</td>
                        
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


    public function view($id){
     //
        //
        $wh=Warehouse::where('is_active','1')->get();
        $pl=PalletLabel::where('id',$id)->first();
        $bin=Binlocation::where('status','0')->get();
        return view('admin.transfer.transfer',compact('wh','pl','bin'));   

    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $warehouse=$request->warehouse;
        $location=$request->binlocation;
        $pid=$request->pid;
        $bid=$request->bid;
        $p = PalletLabel::find($pid);
        $p_warehouse=$p->warehouse;
        $p_pl_no=$p->palletno;
        $p_pid=$p->id;
        $p->warehouse=$warehouse;
        $p->update();

        

        $trans = new Transfer();
        $trans->p_warehouse=$p_warehouse;
        $trans->p_pl_no=$p_pl_no;
        $trans->p_pid=$p_pid;
        $trans->p_location=$request->bin_location_name;
        $trans->p_bid=$bid;
        $trans->n_warehouse=$warehouse;
        $trans->n_pl_no=$p->palletno;
        $trans->n_pid=$p->id;
        $trans->n_location=$location;
        $trans->n_bid=$location;
        $trans->pick_status=0;
        $trans->placed_status=0;
        $trans->save();

        Binlocation::where("id",$bid)->update([
            'labelid'=>'',
            'mcid'=>'',
            'rcid'=>'',
            'status'=>'0'

        ]); 

        // Update of Binlocation
        Binlocation::where("id",$location)->update([
            'labelid'=>$p->palletno,
            'mcid'=>$p->mc_id,
            'rcid'=>$p->rc_id,
            'status'=>'1'

        ]);
        StockPlacement::where('label_id',$pid)->update([
            'bin_id'=>$location,
        ]);
        return redirect()->back()->with('message', 'This Pallet is Transfered SUccessfull'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
