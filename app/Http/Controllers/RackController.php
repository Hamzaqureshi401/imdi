<?php

namespace App\Http\Controllers;

use App\Models\Rackinfo;
use App\Models\Permission;
use App\Models\Binlocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RackController extends Controller
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
                
                if (!$permissions->contains('permission', '2')) {
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
       
    }

    public function managerack($warehouse)
    {
        //
        $racks=Rackinfo::where('warehouse',$warehouse)->get();
        return view('admin.racks.index',compact('racks','warehouse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $this->validate($request,[
            'rowtitle'=>'required',
            'format'=>'required|unique:rackinfos',
         ]);

         $res=Rackinfo::where('warehouse',$request->warehouse)
         ->where('rowtitle',$request->rowtitle)->count();
           
        if($res==0)
        {
            $wh = new Rackinfo();
            $wh->warehouse = $request->warehouse;
            $wh->rowtitle = $request->rowtitle;
            $wh->length = $request->length;
            $wh->format =$request->format;
            $wh->user =Auth::user()->id;
            $wh->save();
            $delimiter = "*";
            $format = explode($delimiter, $request->format);
            for($i=1;$i<=$request->length;$i++)
            {
                $b=new Binlocation();
                $b->row_id=$wh->id;
                $b->name= str_replace("*", $i, $request->format);
                $l=200000+ rand(1,99999);
                $b->barcode=date("ymd").$l;
                $b->status="0";
                $b->custom="0";
                $b->save();
            }

            return redirect()->back()->with('message', 'Record Created Successfully');
        }
        else{
            return redirect()->back()->with('error', 'Row Already Exist in Same Warehouse');
        }
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
        $racks=Binlocation::where('row_id',$id)->get();
        return view('admin.racks.show',compact('racks'));
    }

    public function assignbarcode(Request $request)
    {  
       
        for($i=0; $i<count($request->id); $i++)
            {
                $b = Binlocation::find($request->id[$i]);
                $b->barcode= $request->barcode[$i];
                $b->update();
            }

            return redirect()->back()->with('message', 'Record Saved Successfully');

    }

    public function printlabel($rack)
    {
        
        $bin=Binlocation::where('row_id',$rack)->get();
        return view('admin.racks.label',compact('bin'));
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
        $wh=Rackinfo::where('id',$id)->first();
        return view('admin.racks.edit',compact('wh'));
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
        //
        $this->validate($request,[
            'rowtitle'=>'required',
            'length'=>'required',
            'format'=>'required',
         ]);

        //dd($request->all());

            
         $res=Rackinfo::where('warehouse',$request->warehouse)
         ->where('rowtitle',$request->rowtitle)->count();


           
        if($res==0)
        {
           
                $wh = Rackinfo::find($id);
                $l=$wh->length+1;   
                $wh->rowtitle = $request->rowtitle;
                $wh->length = $request->length;
                $wh->format = $request->format;
                $wh->update();
                $delimiter = "*";
                $format = explode($delimiter, $request->format);
                for($i=$l;$i<=$request->length; $i++)
                {
                    $b=new Binlocation();
                    $b->row_id=$wh->id;
                    $b->name= str_replace("*", $i, $request->format);
                    $l=200000+ rand(1,99999);
                    $b->barcode=date("ymd").$l;
                    $b->status="0";
                    $b->custom="0";
                    $b->save();
                }

               // dd($b);
            
            return redirect()->back()->with('message', 'Record Updated Successfully');
        }
        else{
            return redirect()->back()->with('error', 'Row Already Exist in Same Warehouse');
        
        }
    
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
        $b=Binlocation::where('row_id',$id)->where('status',"1")->count();
        if($b>0)
        {
            return redirect()->back()->with('message', 'Record can not be Deleted because this Rack is still Occupied');
             
        }
        else{
            Binlocation::where('row_id',$id)->delete();
            Rackinfo::where('id',$id)->delete();
            return redirect()->back()->with('message', 'Record Deleted Successfully');
        }
    }
}
