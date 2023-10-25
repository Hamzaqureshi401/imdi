<?php

namespace App\Http\Controllers;

use App\Models\Cyclecount;
use Illuminate\Http\Request;
use App\Models\Cyclecountlocation;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;


class CyclecountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $user = Auth::user();
            if ($user && $user->role) {
                $permissions = Permission::where('role_id', $user->role)->get();
                // Add your permission check logic here
                
                if (!$permissions->contains('permission', '9')) {
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

    public function pendingcyclecount()
    {
        //
        $cc=Cyclecount::orderBy('id', 'desc')->where('status','0')->get();
        return view("admin.cyclecount.pending",compact('cc'));
    }
    public function completedcyclecount()
    {
        //
        $cc=Cyclecount::orderBy('id', 'desc')->where('status','1')->get();
        return view("admin.cyclecount.completed",compact('cc'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd(1);
        $cycleCount = Cyclecount::where('id' , $id)->first();
        return view("admin.cyclecount.completed_cycle_detail" , compact('cycleCount'));
    
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
    public function update(Request $request, $id){

    $cycleCount = Cyclecountlocation::find($id);

    if ($cycleCount) {
        $cycleCount->binlocation->labelid = $cycleCount->pallet_no;
        if($cycleCount->pallet_no > 0){
            $status = 1;
        }else{
            $status = 0;
        }
        $cycleCount->binlocation->status = $status;
        $cycleCount->binlocation->save();
        return redirect()->back()->with('success' , 'Bin Location Updated!');
    } else {
        return redirect()->back()->with('error' , 'Cyclecountlocation Not Found!');
        // Handle the case where the cycle count with the given ID is not found.
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
    }
}
