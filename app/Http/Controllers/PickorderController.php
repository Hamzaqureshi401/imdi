<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Pickorder;
use App\Models\Warehouse;
use App\Models\Permission;
use App\Imports\PO_Pro_imp;
use App\Models\Binlocation;
use App\Models\PalletLabel;
use Illuminate\Http\Request;

use App\Models\Mastercaseproduct;
use Illuminate\Support\Facades\Auth;

class PickorderController extends Controller
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
        return view('admin.pickorders.create',compact('product','wh')); 
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $result = Mastercaseproduct::select('mcid')
        ->join('mastercases as mc', 'mastercaseproducts.mcid', '=', 'mc.id')
        ->whereIn('pid', $request->pid)
        ->distinct()
        ->get();
        //$result = Binlocation::whereIn('mcid', $result)->where('status','1')->get();
        $result =  Binlocation::select('rc.arr_date','rc.warehouse', 'pl.mc_id', 'rcid', 'pl.avl_qty', 'pl.mc_qty','binlocations.id As id','name', 'labelid')
        ->join('pallet_labels as pl', 'pl.palletno', '=', 'binlocations.labelid')
        ->join('receiveds as rc', 'rc.id', '=', 'pl.rc_id')
        ->where('binlocations.status', 1)
        ->whereIn('binlocations.mcid', $result)
        ->orderBy('rc.arr_date')
        ->orderBy('pl.avl_qty')
        ->whereNotNull('pl.avl_qty') 
        ->where('pl.avl_qty', '>', 0);

        if($request->warehouse=="" || $request->warehouse=="All")
        {

        }
        else{
            $result=$result->where('rc.warehouse',$request->warehouse);
        }
        
        
        $output='';
        if($result->count()>0)
        {
            $result=$result->get();
            foreach($result as $r)
            {
        
                $output.='<tr>
                
                <td>'.$r->arr_date.'</td>
                <td>'.getmastercase($r->mc_id).'<br>Available Quantity(s): <b>'.$r->avl_qty.'</b></td>
                <td class="mcp">'.implode(', ', get_mc_pro_wise($r->mc_id, $r->avl_qty)).'</td>
                <td>'.getwarehouse($r->warehouse).'</td>
                <td><input type="hidden" name="lb[]" value="'.$r->labelid.'"/><input type="hidden" name="bid[]" value="'.$r->id.'"/><b>'.$r->labelid.'<br>'.$r->name.'</b></td>
                <td><input name="invoice[]" id="invoice" type="text"  class="form-control pick-inv" /></td>
                <td><input name="pq[]" id="t" type="number" min=1 max="'.$r->avl_qty.'" class="form-control pick-qty" /></td>
                <td class="product-quantity"></td>
            
                </tr>';
            } 

        }
        else{
            $output.='<tr><td colspan="6" style="text-align:center;" class="text-danger"><b>There is No Record Found!</b></td></tr>';
        }
        return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'','output'=>$output]);
    
            }

    public function pickorder(Request $request)
    {
        $l=100000+ rand(1,99999);
        $tran_no=date("ymd").$l;
        for($i=0; $i<count($request->lb); $i++)
            {
                if(isset($request->pq[$i]))
                {
                    $l_id=getlabelinfo($request->lb[$i]);
                    $b=getbindetail($request->bid[$i]); 
                   
                    $po = new Pickorder();
                    $po->trans_no=$tran_no;
                    $po->invoice_no=$request->invoice[$i];
                    $po->label_id=$l_id->id;
                    $po->label_no=$request->lb[$i];
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
        return redirect()->back()->with('message', 'Pick Order Saved Successfully');

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
}
