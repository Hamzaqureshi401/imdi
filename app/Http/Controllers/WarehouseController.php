<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarehouseController extends Controller
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
        $wh=Warehouse::where('is_active','1')->get();
        return view('admin.warehouse.index',compact('wh'));
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
            'warehouse'=>'required|unique:warehouses',
         ]);
            $wh = new Warehouse();
            
            $wh->warehouse = $request->warehouse;
            $wh->address = $request->address;
            $wh->is_active = "1";
            $wh->save();

        return redirect()->back()->with('message', 'Record Created Successfully');
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
        $wh=Warehouse::where('id',$id)->first();
        return view('admin.warehouse.edit',compact('wh'));
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
        $this->validate($request,[
            'warehouse'=>'required',
         ]);
            $wh = Warehouse::find($id);
            
            $wh->warehouse = $request->warehouse;
            $wh->address = $request->address;
            $wh->update();
            return redirect()->route('warehouse.index')->with('message', 'Record Updated Successfully');
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
        Warehouse::where('id', $id)
        ->update([

          'is_active' => '0',   
        ]);
        return redirect()->back()->with('message', 'Record Deleted Successfully');
    }
}
