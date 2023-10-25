<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Role;
use App\Models\Warehouse;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
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
                
                if (!$permissions->contains('permission', '3')) {
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
        $wh=Role::get();
        return view('admin.roles.index',compact('wh'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permissions = [
            ['value' => 1, 'permission' => 'User'],
            ['value' => 2, 'permission' => 'Warehouse'],
            ['value' => 3, 'permission' => 'Role'],
            ['value' => 4, 'permission' => 'Product'],
            ['value' => 5, 'permission' => 'Mastercase'],
            ['value' => 6, 'permission' => 'Receiving'],
            ['value' => 7, 'permission' => 'Checkin'],
            ['value' => 8, 'permission' => 'Pick Order'],
            ['value' => 9, 'permission' => 'Cycle Count'],
            ['value' => 10, 'permission' => 'Transfer'],
            ['value' => 11, 'permission' => 'Return'],
            ['value' => 12, 'permission' => 'App'],
            // You can add more elements here
        ];
        return view('admin.roles.create',compact('permissions'));
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
            'role'=>'required|unique:roles',
         ]);

     
            $role = new Role();
            $role->role = $request->role;
            $role->save();
            $rid=$role->id;

            for($i=0; $i<count($request->pr); $i++)
            {
                if(isset($request->pr[$i]))
                {
                    $p = new Permission();
                    $p->role_id=$rid;
                    $p->permission=$request->pr[$i];
                    $p->save();
                }
                
            }

            return redirect()->back()->with('message', 'Record Saved Successfully');
     
     

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
        $permissions = [
            ['value' => 1, 'permission' => 'User'],
            ['value' => 2, 'permission' => 'Warehouse'],
            ['value' => 3, 'permission' => 'Role'],
            ['value' => 4, 'permission' => 'Product'],
            ['value' => 5, 'permission' => 'Mastercase'],
            ['value' => 6, 'permission' => 'Receiving'],
            ['value' => 7, 'permission' => 'Checkin'],
            ['value' => 8, 'permission' => 'Pick Order'],
            ['value' => 9, 'permission' => 'Cycle Count'],
            ['value' => 10, 'permission' => 'Transfer'],
            ['value' => 11, 'permission' => 'Return'],
            ['value' => 12, 'permission' => 'App'],

            // You can add more elements here
        ];
        $role=Role::find($id);
        $permission=Permission::where('role_id',$id)->get();
        return view('admin.roles.edit',compact('permissions','permission','role'));
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
      
     
            $role = Role::find($id);
            $rid=$role->id;
            Permission::where('role_id',$id)->delete();
            for($i=0; $i<count($request->pr); $i++)
            {
                if(isset($request->pr[$i]))
                {
                    $p = new Permission();
                    $p->role_id=$rid;
                    $p->permission=$request->pr[$i];
                    $p->save();
                }
                
            }

            return redirect()->back()->with('message', 'Record Updated Successfully');
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
        $r = Role::find($id);
        $r->delete();
        Permission::where('role_id',$id)->delete();
        return redirect()->back()->with('message', 'Record Deleted Successfully');
    }
}
