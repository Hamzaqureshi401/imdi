<?php

namespace App\Http\Controllers;

use App\Models\Rackinfo;
use App\Models\Received;
use App\Models\Warehouse;
use App\Models\Mastercase;
use App\Models\Permission;
use App\Models\Binlocation;
use App\Models\PalletLabel;
use Illuminate\Http\Request;
use App\Models\StockPlacement;
use Illuminate\Support\Facades\Auth;

class CheckinController extends ApiController
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
                
                if (!$permissions->contains('permission', '7')) {
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
       // $rows=Rackinfo::get();
       //return view('admin.checkin.list',compact('rows'));
        $pr=Received::orderBy('created_at', 'desc')->get();
        
        return view('admin.checkin.list',compact('pr'));
       
    }

    public function list()
    { 
        //
       // $rows=Rackinfo::get();
       //return view('admin.checkin.list',compact('rows'));
       $pr=Received::orderBy('created_at', 'desc')->get();
        
        return view('admin.checkin.unlist_index',compact('pr'));
        
    }
    public function unlist($rcid)
    { 
        //
       // $rows=Rackinfo::get();
       //return view('admin.checkin.list',compact('rows'));
        $bin=Binlocation::where('status','1')->where('rcid',$rcid)->get();
        
        return view('admin.checkin.unlist',compact('bin'));
       
    }

    public function allPendingCheckInList(){

       $bin = Binlocation::where('status', '1')
                ->with('palletLabel')
                ->whereHas('palletLabel', function ($query) {
                    $query->whereNotNull('checkin_status')
                          ->where('checkin_status', 0);
                })
                ->get();

        
        return view('admin.checkin.allPendingCheckInList',compact('bin'));
    }

      public function allConfirmedCheckInList(){

       $bin = Binlocation::where('status', '1')
                ->with('palletLabel')
                ->whereHas('palletLabel', function ($query) {
                    $query->whereNotNull('checkin_status')
                          ->where('checkin_status', 1);
                })
                ->get();

        
        return view('admin.checkin.allConfirmedCheckInList',compact('bin'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo "zainc";
    }

    
  
  
    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        //chk
        //dd($request->all());
        $l=PalletLabel::where('palletno',$request->labelid)->first();
      
        $rc=getrcdetails($l->rc_id);
        $sp=new StockPlacement;
        $sp->label_id=$l->id;
        $sp->bin_id=$request->rowid;
        $sp->save();
        Binlocation::where('id',$request->rowid)->update([
            'status'=>'1',
            'rcid'=>$l->rc_id,
            'labelid'=>$l->palletno,
            'mcid'=>$l->receiveds->mcid,
        ]);
        PalletLabel::where('id',$l->id)->update([
            'status'=>'1',
        ]);
        return response()->json(['status'=>'Successful','message'=>'CheckIn Successfull','error'=>'']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 

        $label=PalletLabel::where('rc_id',$id)->get();
        $rc=Received::where('id',$id)->first();
        $rows=Rackinfo::where('warehouse',$rc->warehouse)->get();
        
        return view('admin.checkin.index',compact('rows','label','rc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $bin = Binlocation::where('id' , $id)->first();
     $response = $this->checkedin($bin->labelid,Auth::id());
     
     if($response->getStatusCode() === 200){
        return redirect()->back()->with('message' , 'Updated Successfully!');
     }else{
      return redirect()->back()->with('message' , 'Something Went Wrong');  
     }
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
        $bin=Binlocation::find($id);
        $l=PalletLabel::where('palletno',$bin->labelid)->first();
        StockPlacement::where('label_id',$l->id)->delete();
        PalletLabel::where('id',$l->id)->update([
            'status'=>'0',
        ]);
        $bin->status="0";
        $bin->update();
        return redirect()->back()->with('message', 'UnAllocatied Successfully');
    }

    public function confirmMultipleCheckin(Request $request){
       // dd($request->all());

        if(empty($request->ids)){
            return redirect()->back()->with('message' , 'Please Select at Least 1 checkbox!'); 
        }


        foreach($request->ids as $id){
            $bin = Binlocation::where('id' , $id)->first();
            $response = $this->checkedin($bin->labelid,Auth::id());
        }
        if($response->getStatusCode() === 200){
            return redirect()->back()->with('message' , 'Updated Successfully!');
        }else{
          return redirect()->back()->with('message' , 'Something Went Wrong');  
        }
    }
}
