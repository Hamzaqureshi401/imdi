<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Pickorder;
use App\Models\Warehouse;
use App\Models\Permission;
use App\Imports\PO_Pro_imp;
use App\Models\Binlocation;
use App\Models\PalletLabel;
use App\Models\Mastercase;
use Illuminate\Http\Request;
use App\Http\Controllers\CheckinController;


use App\Models\Mastercaseproduct;
use Illuminate\Support\Facades\Auth;

class PickorderController extends ApiController
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $user = Auth::user();
            if ($user && $user->role) {
                $permissions = Permission::where('role_id', $user->role)->get();
                // Add your permission check logic here
                
                if (!$permissions->contains('permission', '8')) {
                    abort(401, 'Unauthorized');
                }
            }

            return $next($request);
        });
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $po=Pickorder::select('id' ,'trans_no', 'user', 'created_at','label_id', 'label_no','invoice_no', 'mc_id', 'rc_id', 'bin_id', 'qty')
        ->distinct()
        ->orderBy('id','desc')
        ->where('pick_status','0')
        ->get();

        return view('admin.pickorders.index',compact('po'));
    }

    public function importproduct(Request $requst)
    {
       /* if($result->count()>0)
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
        */
        $file = $request->file('file');
        $tbody=Excel::import(new PO_Pro_imp, $file);
      
    
        

        return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'','output'=>$tbody]);


    }
    public function pickdonelist($id)
    {
        //
        $po=Pickorder::select('*')->orderBy('id','desc')
        ->where('pick_status','1')
        ->where('trans_no',$id)
        ->get();
        return view('admin.pickorders.donelist',compact('po','id'));
    }
    public function pickdone()
    {
        //
        $po=Pickorder::select('*')
        ->distinct()
        ->orderBy('id','desc')
        ->where('pick_status','1')
        ->get();
        return view('admin.pickorders.done',compact('po'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $product=Product::get();
        $wh=Warehouse::where('is_active','1')->get();
        $ms=Mastercase::get();

        return view('admin.pickorders.create',compact('product','wh' , 'ms')); 
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
       
        $data = $this->findBinlocations($request);
        $result = $data[0];
        $pl = $data[1];

       return view('admin.pickorders.product-mastercase-details' , compact('result' , 'pl'));    
    }


    public function apiFindlocation(Request $request)
    {

        $mastercase_id = json_decode($request->mastercase_id, true);
        $rq = new Request([
            'mastercase_id' => $mastercase_id
        ]);
        $data = $this->findBinlocations($rq);

        $dataNew['unallocatedData'] = $this->findUnallocatedData($data);
        $dataNew['allocatedData'] = $this->findAllocatedData($data);

         return response()->json([
            'code'=>200,
            'status'=>'Successful',
            'message'=>'Record Fetch Successful',
            'output'=>$dataNew
            ]);
    }


    public function findUnallocatedData($data){

        $unallocatedData = [];

        foreach ($data[1] as $r) {
            if ($r->stockPlacement->count() == 0 && !empty($r->receiveds->id)) {
                $unallocatedData[] = [
                    'master_case' => [
                        'name' => $r->mastercase->name,
                        'available_quantity' => $r->avl_qty,
                        'products' => $r->mastercase->mastercaseproduct->map(function ($pr) {
                            return $pr->product->name;
                        })
                    ],
                    'warehouse' => $r->wareHouse->warehouse,
                    'pallet' => [
                        'id' => $r->id,
                        'un_lb' => $r->palletno,
                        'un_bid' => $r->id,
                        'max_un_pq' => $r->avl_qty
                    ],
                ];
            }
        }

        return $unallocatedData;
    }

    public function getMasterCase(){

        return response()->json([
            'code'=>200,
            'status'=>'Successful',
            'message'=>'Record Fetch Successful',
            'output'=>Mastercase::get()
            ]);
    }

    public function findAllocatedData($data){
    $allocatedData = [];
        $data = $data[0];
        foreach ($data->where('status', 1) as $r) {
            $allocatedData[] = [
                'arrival_date' => $r->arr_date,
                'master_case' => [
                    'name' => getmastercase($r->mc_id),
                    'available_quantity' => $r->avl_qty,
                    'products' => implode(', ', get_mc_pro_wise($r->mc_id, $r->avl_qty))
                ],
                'warehouse' => getwarehouse($r->warehouse),
                'label_bin' => [
                    'lb' => $r->labelid,
                    'bid' => $r->id,
                    'label_name' => $r->labelid . '<br>' . $r->name
                ],
            ];
        }

        return $allocatedData;
    }




    public function findBinlocations($request){

        if(!empty($request->mastercase_id)){
            $result = Mastercaseproduct::join('mastercases as mc', 'mastercaseproducts.mcid', '=', 'mc.id')
        ->whereIn('mcid', $request->mastercase_id)
        //->where('qty' , $request->qty)
        ->distinct()
        ->select('mcid')
        ->get();
        }else{
            $result = Mastercaseproduct::select('mcid')
        ->join('mastercases as mc', 'mastercaseproducts.mcid', '=', 'mc.id')
        ->whereIn('pid', $request->pid)
        ->distinct()
        ->get();
        }
        $pl = PalletLabel::whereIn('mc_id' , $request->mastercase_id)->pluck('palletno')->toArray();
        $bl = Binlocation::whereNotIn('labelid' , $pl)
            ->where('status' , 0)
            ->whereIn('mcid' , $request->mastercase_id)
            ->pluck('id')->toArray();

        //dd($result , $request->all());
        //$result = Binlocation::whereIn('mcid', $result)->where('status','1')->get();
        $result =  Binlocation::select('rc.arr_date','rc.warehouse', 'pl.mc_id', 'rcid', 'pl.avl_qty', 'pl.mc_qty','binlocations.id As id','name', 'labelid' , 'binlocations.status')
        ->Join('pallet_labels as pl', 'pl.palletno', '=', 'binlocations.labelid')
        ->Join('receiveds as rc', 'rc.id', '=', 'pl.rc_id')
        ->where('binlocations.status', 1)
        ->whereIn('binlocations.mcid', $request->mastercase_id)
        //->orWhereIn('binlocations.id', $bl)
        ->orderBy('rc.arr_date')
        ->orderBy('pl.avl_qty')
        ->whereNotNull('pl.avl_qty')
        ->where('pl.avl_qty', '>', 0);
        if(empty($request->warehouse)) 
        {
            $result = $result->get();
        }
        else{
            $result=$result->where('rc.warehouse',$request->warehouse)->get();
        }
        $pl = PalletLabel::whereIn('mc_id' , $request->mastercase_id)->get();
        return [$result , $pl];
    }

    public function pickorder(Request $request)
    {
        //dd($request->all());
        $this->handUnallocatedPallet($request);
        $this->completePickOrder($request);
       
        return redirect()->back()->with('message', 'Pick Order Saved Successfully');

    }

    public function apiUnallocatedNewPickOrder(Request $request){

        $unallocatedValidationRules = [
        'id' => 'required',
        'un_pq' => 'required',
        'un_lb' => 'required',
        //'un_invoice' => 'required|array',
    ];

    $allocatedValidationRules = [
        'bid' => 'required',
        'pq' => 'required',
        'lb' => 'required',
        //'invoice' => 'required|array',
    ];

    // Validate unallocated pick order data
    if (!empty($request->un_pq)) {
        $validator = validator($request->all(), $unallocatedValidationRules);
        if ($validator->fails()) {
            return response()->json([
                'code' => 400,
                'status' => 'Validation Error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()->all(),
            ], 400);
        }
    }

    // Validate allocated pick order data
    if (!empty($request->pq)) {
        $validator = validator($request->all(), $allocatedValidationRules);
        if ($validator->fails()) {
            return response()->json([
                'code' => 400,
                'status' => 'Validation Error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()->all(),
            ], 400);
        }
    }


        if(!empty($request->un_pq)){
            $id         = json_decode($request->id, true);
            $un_pq      = json_decode($request->un_pq, true);
            $un_lb      = json_decode($request->un_lb, true);
            $un_invoice = json_decode($request->un_invoice, true);  

            $un_rq = new Request([
                'id' => $id,
                'un_pq' => $un_pq,
                'un_lb' => $un_lb,
                'un_invoice' => $un_invoice
            ]);  
            $output = $this->handUnallocatedPallet($un_rq);
        
        }

        if(!empty($request->pq)){
            $pq      = json_decode($request->pq, true);
            $lb      = json_decode($request->lb, true);
            $bid      = json_decode($request->bid, true);
            $invoice = json_decode($request->invoice, true);

            $al_rq = new Request([
                // 'id' => $id,
                'pq' => $pq,
                'lb' => $lb,
                'bid' => $bid,
                'invoice' => $invoice
            ]);
            $output = $this->completePickOrder($al_rq);
       
        }

        return response()->json([
            'code'=>200,
            'status'=>'Successful',
            'message'=>'Pickorder Completed Successful',
            'data'=> $output
            ]);
        
        

    }

    public function handUnallocatedPallet($request){


        //dd($request->all());
        if(!empty(isset($request->un_pq))) {
            foreach($request->id as $key => $pl){
                if(!empty($request->un_pq[$key])){
                   $pallet = PalletLabel::where('id' , $pl)->first();
                   $binlocation = Binlocation::whereIn('row_id' , $pallet->receiveds->rackInfo->pluck('id')->toArray())->where('status' , 0)->first();
                   if(!empty($binlocation)){
                   $sendCheckinRequest = new Request([
                    'labelid' => $pallet->palletno,
                    'rowid'   => $binlocation->id
                   ]);
                   $checkinClass = new CheckinController();
                   $GetCashPaidhistory = $checkinClass->store($sendCheckinRequest);             
                    $data['lb'][]        = $request->un_lb[$key];
                    $data['pq'][]        = $request->un_pq[$key];
                    $data['bid'][]       = $binlocation->id;
                   //$data['invoice'][]   = $request->un_invoice[$key];
               }
               $sendCompltePOrder = new Request($data);
                }
            }
            //dd($sendCompltePOrder->all() , $data);
           if(!empty($sendCompltePOrder)){
            $this->completePickOrder($sendCompltePOrder);
           }
            
        }


    }

    public function completePickOrder($request){

        //dd($request->all());
        if(!empty(isset($request->pq))){

         $l=100000+ rand(1,99999);
        $tran_no=date("ymd").$l;
        for($i=0; $i<count($request->lb); $i++)
            {
                if(isset($request->pq[$i]))
                {
                    $l_id=getlabelinfo(strval($request->lb[$i]));
                    $b=getbindetail($request->bid[$i]); 
                   
                    $po = new Pickorder();
                    $po->trans_no=$tran_no;
                    $po->invoice_no=$request->invoice[$i] ?? null;
                    $po->label_id=$l_id->id;
                    $po->label_no=strval($request->lb[$i]);
                    $po->mc_id=$b->mcid;
                    $po->rc_id=$b->rcid;
                    $po->bin_id=$request->bid[$i];
                    $po->qty=$request->pq[$i];
                    $po->user=Auth::user()->id;
                    $po->pick_status='0';
                    $po->save();
                    $pl = PalletLabel::find($l_id->id);
                    $pl->avl_qty=$pl->avl_qty-$request->pq[$i];
                    $pl->update();

                    
                }
                
                
            } 
            return $po;
    }
    }

    public function storebk(Request $request)
    {
        //


        $result = Mastercaseproduct::select('pid', 'mcid','mc.name as mc_name', 'mc.upc as mc_upc', 'p.name as p_name', 'p.upc as p_upc','pl.palletno as plno')
        ->join('mastercases as mc', 'mastercaseproducts.mcid', '=', 'mc.id')
        ->join('pallet_labels as pl', 'mastercaseproducts.mcid', '=', 'pl.mc_id')
        ->join('products as p', 'mastercaseproducts.pid', '=', 'p.id')
        ->whereIn('pid', $request->pid)
        ->distinct()
        ->get();
        $output='';
       foreach($result as $r)
        {
        $output.='<tr>
        <td>'.$r->mc_name.'<b> ['.$r->mc_upc.']</b></td>
        <td></td>
        <td>'.$r->p_name.'<b> ['.$r->p_upc.']</b></td>
        <td></td>
        <td>'.$r->plno.'</td>
        <td></td>
        <td></td>
        </tr>';
        } 
        return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'','output'=>$output]);
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
        $po=Pickorder::select('*')->orderBy('id','desc')
        ->where('pick_status','0')
        ->where('trans_no',$id)
        ->get();
        return view('admin.pickorders.pendlist',compact('po','id'));
    }

   public function confirmpickorderweb($id, $user)
    {
        $response = $this->confirmpickorder($id, $user);

        if ($response->getStatusCode() == 200 && $response->getData()->status) {
            return redirect()->back()->with('message', 'Pick order confirmed successfully.');
        } else {
            return redirect()->back()->with('message', 'Failed to confirm pick order.');
        }
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
        

        $product = Pickorder::find($id);


        if(!empty($product)){
            $pallet  = PalletLabel::where('palletno' , $product->label_no)->first();
            $pallet->avl_qty = $pallet->avl_qty + $product->qty;
            //dd($product , $id , $pallet->avl_qty, $product->qty , $pallet);
            $pallet->update();
            $product->delete();
            return redirect()->back()->with('message', 'Record Deleted Successfully');
        }else{
            return redirect()->back()->with('message', 'Record Not Found!');
        }
        
    }
     public function confirmMultiplePendingPickOrder(Request $request){
       // dd($request->all());

        if(empty($request->ids)){
            return redirect()->back()->with('message' , 'Please Select at Least 1 checkbox!'); 
        }


        foreach($request->ids as $id){
            $response = $this->confirmpickorder($id, Auth::id());
        }
         return redirect()->back()->with('message', 'Pick order confirmed successfully.');
    }
}
