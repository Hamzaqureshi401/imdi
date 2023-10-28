<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Rackinfo;
use App\Models\Received;
use App\Models\Transfer;
use App\Models\Pickorder;
use App\Models\Warehouse;
use App\Models\Cyclecount;
use App\Models\Mastercase;
use App\Models\Binlocation;
use App\Models\PalletLabel;
use Illuminate\Http\Request;
use App\Models\Mastercaseproduct;
use App\Models\Cyclecountlocation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    //
    function login(Request $request)
    {
      
        //  $credentials = $request->only(['email', 'password']);
    
        //   if (Auth::attempt($credentials)) {
              
        //    $result["status"]=true;
        //    $result["msg"]="Login Successfull";
        //    $result["id"]=Auth::user()->id;     
        //    $result["name"]=Auth::user()->name;
        //    $result["role"]=Auth::user()->role;
         
        //    return response()->json($result, 200);
           
        // }
        // else{
        //     return response()->json(['status' => false,'msg'=>"Failed to Login"], 200);
        // }

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = md5(time()) . '.' . md5($request->email);
            $user->forcefill([
                'api_token' => $token
            ])->save();
            return response()->json([
                'code' => '200' , 
                'status'=>'success' , 
                'message'=>'User Login Successfully!' , 
                'data' => $user
            ]);
        }
        return response()->json([
            'message' => 'Credentials Do no match'
        ]);

    }
 
    function startcyclecount(Request $request)
    {
        
        $cc= new Cyclecount();
        $cc->warehouse=$request->warehouse;
        $cc->rack=$request->rack;
        $cc->start_location=$request->start_location;
        $cc->end_location=$request->end_location;
        $cc->user=$request->user;
        $cc->status="0";
        if($cc->save())
        {
            for($s=$request->start_location; $s<=$request->end_location; $s++)
            {
                $ccl= new Cyclecountlocation(); 
                $ccl->cc_id=$cc->id;
                $ccl->bl_id=$s;
                $bl=getbindetail($s);
                $ccl->bl_name=$bl->name;
                $ccl->bl_barcode=$bl->barcode;
                $ccl->pallet_no="";
                $ccl->save();

            }
            $ccl=Cyclecountlocation::where("cc_id",$cc->id)->get();

            return response()->json(["status"=>true,"cycle_count"=>$cc,"cc_list"=>$ccl], 200);
        }
        else{
            return response()->json(["status"=>false], 200);
        }
        


    }

     function cyclecountlocations($ccid)
     {
        $ccl=Cyclecountlocation::where("cc_id",$ccid)->get();

        return response()->json(["status"=>true,"cc_list"=>$ccl], 200);

     }
    
    function getproducts($id=0)
   {
    if($id==0)
    {
        $products=Product::get();

    }
    else{
        $products=Product::where('id',$id)->get();
    }

    return response()->json($products, 200);
   }
   
    function getmastercases($id=0)
   {
    //dd(Auth::user()->role);
        if($id==0)
        {
            $mc=Mastercase::get();

        }
        else{
            $mc=Mastercase::where('id',$id)->get();
        }

    return response()->json($mc, 200);
   }
   
    function getmcproducts($mcid)
   {
       
    $mcp=Mastercaseproduct::select('id','pid','qty')->where('mcid',$mcid)->get();
       

    return response()->json($mcp, 200);
   }
   
   
   
   function getwarehouses($id=0)
   {
        if($id==0)
        {
            $wh=Warehouse::where('is_active','1')->get();

        }
        else{
            $wh=Warehouse::where('id',$id)->where('is_active','1')->get();
        }

    return response()->json($wh, 200);
   }
   
   function getpendingpickorders($transaction=0)
   {
        if($transaction==0)
        {
            $po=DB::table('pickorders')
            ->join('mastercases', 'pickorders.mc_id', '=', 'mastercases.id')
            ->join('pallet_labels', 'pickorders.label_id', '=', 'pallet_labels.id')
            ->join('warehouses', 'pallet_labels.warehouse', '=', 'warehouses.id')
            ->where('pickorders.pick_status', '0')
            ->orderBy('pickorders.id', 'desc')
            ->select('pickorders.*', 'mastercases.name AS mastercase_name','warehouses.warehouse AS warehouse') 
            ->get();

        }
        else{
            $po=DB::table('pickorders')
            ->join('mastercases', 'pickorders.mc_id', '=', 'mastercases.id')
            ->join('pallet_labels', 'pickorders.label_id', '=', 'pallet_labels.id')
            ->join('warehouses', 'pallet_labels.warehouse', '=', 'warehouses.id')
            ->where('pickorders.pick_status', '0')
            ->orderBy('pickorders.id', 'desc')
            ->select('pickorders.*', 'mastercases.name AS mastercase_name','warehouses.warehouse AS warehouse')
            ->where('trans_no',$transaction)
            ->get();
        }

    return response()->json($po, 200);
   }
   
   function getconfirmedpickorders($transaction=0)
   {
        if($transaction==0)
        {
            $po=DB::table('pickorders')
            ->join('users', 'pickorders.pick_by', '=', 'users.id')
            ->join('mastercases', 'pickorders.mc_id', '=', 'mastercases.id')
            ->join('pallet_labels', 'pickorders.label_id', '=', 'pallet_labels.id')
            ->join('warehouses', 'pallet_labels.warehouse', '=', 'warehouses.id')
            ->where('pickorders.pick_status', '1')
            ->orderBy('pickorders.id', 'desc')
            ->select('pickorders.*', 'users.name AS username','mastercases.name AS mastercase_name','warehouses.warehouse AS warehouse') 
            ->get();

        }
        else{
            $po=DB::table('pickorders')
            ->join('users', 'pickorders.pick_by', '=', 'users.id')
            ->join('mastercases', 'pickorders.mc_id', '=', 'mastercases.id')
            ->join('pallet_labels', 'pickorders.label_id', '=', 'pallet_labels.id')
            ->join('warehouses', 'pallet_labels.warehouse', '=', 'warehouses.id')
            ->where('pickorders.pick_status', '1')
            ->where('trans_no',$transaction)
            ->orderBy('pickorders.id', 'desc')
            ->select('pickorders.*', 'users.name AS username','mastercases.name AS mastercase_name','warehouses.warehouse AS warehouse') 
            ->get();
        }

    return response()->json($po, 200);
   }
   
    function getbinlocation($id)
   {
       
        $bin=Binlocation::where('id',$id)->first();

         return response()->json($bin, 200);
   }
   
    function confirmpickorder($id,$user)
   {
    $po=Pickorder::find($id);
    $pl=PalletLabel::find($po->label_id);
    if($pl->avl_qty<=0)
    {
        $bl=Binlocation::find($po->bin_id);
        $bl->status=0;
        $bl->labelid="";
        $bl->mcid="";
        $bl->rcid="";
        $bl->update();
    }
    $po->pick_status="1";
    $po->pick_by=$user;
    $po->pick_date=date("Y-m-d h:i:s a");
    if($po->update())
    {
        return response()->json(["status"=>true], 200);
    }
    else{
        return response()->json(["status"=>false], 200);
    }
   }
   
    function getmastercase_products($id)
   {
            $mc=Mastercase::where('id',$id)->first();
            $pro = DB::table('mastercaseproducts as mcp')
            ->select('mcp.*', 'pro.name', 'pro.upc')
            ->join('products as pro', 'mcp.pid', '=', 'pro.id')
            ->where('mcp.mcid', '=', $mc->id)
            ->get();
      

    return response()->json(["status"=>true,"mc"=>$mc,"products"=>$pro], 200);
   }
   
   function getrecieved($id=0)
   {
       if($id==0)
       {
        $pr=DB::table('receiveds')
            ->join('users', 'receiveds.user', '=', 'users.id')
            ->join('mastercases', 'receiveds.mcid', '=', 'mastercases.id')
            ->join('warehouses', 'receiveds.warehouse', '=', 'warehouses.id')
            ->orderBy('receiveds.id', 'desc')
            ->select('receiveds.*', 'users.name AS username','mastercases.name AS mastercase_name','warehouses.warehouse AS warehouse')
            ->get();
        
         return response()->json(["status"=>true,"received"=>$pr], 200);
       }
       else{
         $pr=DB::table('receiveds')
            ->join('users', 'receiveds.user', '=', 'users.id')
            ->join('mastercases', 'receiveds.mcid', '=', 'mastercases.id')
            ->join('warehouses', 'receiveds.warehouse', '=', 'warehouses.id')
            ->orderBy('receiveds.id', 'desc')
            ->select('receiveds.*', 'users.name AS username','mastercases.name AS mastercase_name','warehouses.warehouse AS warehouse')->where('receiveds.id',$id)->first();
        
        if($pr)
        {
             $multiplier = $pr->mc_quantity;
                $pro = DB::table('mastercaseproducts as mcp')
                ->select('pro.name', 'pro.upc','mcp.qty', DB::raw("mcp.qty * $multiplier as rec_pro_qty"))
                ->join('products as pro', 'mcp.pid', '=', 'pro.id')
                ->where('mcp.mcid', '=', $pr->mcid)
                ->get();
                return response()->json(["status"=>true,"received"=>$pr,"products"=>$pro], 200);
        }
        else{
           return response()->json(["status"=>false,"msg"=>"Record Not Found"], 200);
        }
         
       }
   }
   
  function getassignedcheckin()
   {
    $pr=Received::orderBy('id','desc')->get();
    $resultArray = [];
   
    foreach($pr as $u )
    {
        $pc=$u->ti*$u->hi;
        $q=ceil($u->mc_quantity/$pc);
        $c=getassignedpallet($u->id);
        $pend=getassignedpallet_status($u->id,"0");
        $comp=getassignedpallet_status($u->id,"1");
        if($q!=$c)
        {
            $tempArray = [
                "id"=>$u->id,
                "warehouse"=>getwarehouse($u->warehouse) ,
                "warehouse_id"=>$u->warehouse,
                "arrival_date"=>$u->arr_date,                  
                "order_no"=>$u->order_no,
                "container_no"=>$u->container_no,
                "mastercase"=>getmastercase($u->mcid),
                "mcid"=>$u->mcid,
                "mc_qty"=>$u->mc_quantity,
                "ti_hi"=>$pc,
                "labels"=>$q,
                "assigned"=>$c,
                "unassigned"=>$q-$c,
                "pending"=>$pend,
                "completed"=>$comp,
            ];
             $resultArray[] = $tempArray;
        }

       

    }
 
    return response()->json($resultArray, 200);

   }
   
   function getunassignedcheckin()
   {
    $pr=Received::orderBy('id','desc')->get();
    $resultArray = [];
  
    foreach($pr as $u )
    {
      
        $pc=$u->ti*$u->hi;
        $q=ceil($u->mc_quantity/$pc);
        $c=getassignedpallet($u->id);
        if($c>0)
        {
            $tempArray = [
                "id"=>$u->id,
                "warehouse"=>getwarehouse($u->warehouse) ,
                "warehouse_id"=>$u->warehouse,
                "arrival_date"=>$u->arr_date,                  
                "order_no"=>$u->order_no,
                "container_no"=>$u->container_no,
                "mastercase"=>getmastercase($u->mcid),
                "mcid"=>$u->mcid,
                "mc_qty"=>$u->mc_quantity,
                "ti_hi"=>$pc,
                "labels"=>$q,
                "assigned"=>$c,
                "unassigned"=>$q-$c,
            ];
             $resultArray[] = $tempArray;
        }

       

    }

    return response()->json($resultArray, 200);

   }

   function getassignedcheckinstatus($id)
   {
    $pr=Binlocation::where('status','1')->where('rcid',$id)->get();
    $resultArray = [];
  
    foreach($pr as $u )
    {
      
        
     
            $pl=getlabelinfo($u->labelid);
            $tempArray = [
                "id"=>$u->id,
                "mastercase"=>getmastercase($u->mcid),
                "mcid"=>$u->mcid,
                "palletno"=>$u->labelid,
                "location"=>$u->name,
                "barcode"=>$u->barcode,
                "checkin_status"=>$pl->checkin_status,
                "checkin_by"=>$pl->checkin_by,
                "checkin_date"=>$pl->checkin_date,
            ];
             $resultArray[] = $tempArray;
        

       

    }

    return response()->json($resultArray, 200);

   }

   function checkedin($palletno,$user)
   {
   
    PalletLabel::where("palletno",$palletno)->update([
        "checkin_status"=>"1",
        "checkin_by"=>$user,
        "checkin_date"=>date("Y-m-d h:i:s a"),
    ]);
    
    

    return response()->json(["status"=>true], 200);

   }

   function getrackinfo($warehouse)
   {
   
    $racks=Rackinfo::where('warehouse',$warehouse);
    if($racks->count()>0)
    {
        $racks=$racks->get();
        return response()->json(["status"=>true,"racks"=>$racks], 200);
    } 
    else{
        return response()->json(["status"=>false], 200);
    }
    

   }

   function getbinlocationbyrack($rack)
   {
   
    $bc=Binlocation::where('row_id',$rack);
    if($bc->count()>0)
    {
        $bc=$bc->get();
        return response()->json(["status"=>true,"binlocations"=>$bc], 200);
    } 
    else{
        return response()->json(["status"=>false], 200);
    }
    

   }
   
   function markcyclecount($id,$palletno)
   {

    $ccu=Cyclecountlocation::find($id);
    $ccu->pallet_no=$palletno;
    
    if($ccu->update())
    return response()->json(["status"=>true,"cc_location"=>$ccu], 200);
    else
    return response()->json(["status"=>false], 200);

   }
   function cyclecountclose($ccid)
   {

    $ccu=Cyclecount::find($ccid);
    $ccu->closed_at=date("Y-m-d h:i:s a");
    $ccu->status="1";
    if($ccu->update())
    return response()->json(["status"=>true,"cc"=>$ccu], 200);
    else
    return response()->json(["status"=>false], 200);

   }

   function cyclecountcancel($ccid)
   {

    $cc=Cyclecount::find($ccid);
    $ccl=Cyclecountlocation::where("cc_id",$ccid);
   
    if($cc->delete() && $ccl->delete() )
    return response()->json(["status"=>true], 200);
    else
    return response()->json(["status"=>false], 200);

   }

   function gettransfers($id=0)
   {
        if($id==0)
        {
            $trs=Transfer::get();

        }
        else{
            $trs=Transfer::where('id',$id)->get();
        }

    return response()->json($trs, 200);
   }
   
   function pendingtransfers()
   {
    $trs=Transfer::orderBy('id', 'desc')->where('pick_status','1')->where('placed_status','1')->get();      
    return response()->json($trs, 200);

   }

   function pickedtransfers()
   {
    $trs=Transfer::orderBy('id', 'desc')->where('pick_status','1')->where('placed_status','0')->get();
    return response()->json($trs, 200);

   }

   function placedtransfers()
   {
    $trs=Transfer::orderBy('id', 'desc')->where('pick_status','1')->where('placed_status','1')->get();
    return response()->json($trs, 200);

   }
   
   function marked_picked_transfer($tid,$user)
   {
  $trs=Transfer::find($tid);
  $trs->pick_status="1";
  $trs->pick_by=$user;
  $trs->picked_at=date("Y-m-d h:i:s a");
  if($trs->update())
    return response()->json($trs, 200);
    else{
       return response()->json("Failed to update Query", 200);  
    }

   }
   
   
   function marked_placed_transfer($tid,$user)
   {
  $trs=Transfer::find($tid);
  $trs->placed_status="1";
  $trs->placed_by=$user;
  $trs->placed_at=date("Y-m-d h:i:s a");
  if($trs->update())
    return response()->json($trs, 200);
    else{
       return response()->json("Failed to update Query", 200);  
    }

   }
    function getcyclecounts($id=0)
   {
        if($id==0)
        {
           $cc=Cyclecount::orderBy('id', 'desc')->where('status','1')->get(); 
           
        }
        else{
            $cc=Cyclecount::orderBy('id', 'desc')->where('status','1')->where('id',$id)->get();
        }

    return response()->json($cc, 200);
   }
   
    function cclocationslist($ccid)
   {
       
    $mcp=Cyclecountlocation::select('*')->where('cc_id',$ccid)->get();
       

    return response()->json($mcp, 200);
   }



   
   
}
