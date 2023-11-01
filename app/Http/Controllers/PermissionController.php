<?php

namespace App\Http\Controllers;

use App\Models\SubPermission;
use Spatie\Permission\Models\Role;
use App\Models\Permission;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function setSubPermission($permission , $role){

        //dd($permission);

        $pr =  Permission::where(['role_id' => $role , 'permission' => $permission])->first();

        $subPermission = SubPermission::where('permission_id' , $pr->id)->get();

        return view('admin.roles.sub_permission' , compact('permission' , 'role' , 'subPermission'));
    }

    public function updateSubPermission(Request $request){
    
        $pr =  Permission::where(['role_id' => $request->role_id , 'permission' => $request->permission])->first();

        if(!empty($pr)){

        SubPermission::where('permission_id' , $pr->id)->delete();
        $subPermission = new SubPermission();
        if ($request->has('add')) {
            SubPermission::create([
                'name' => 'add',
                'permission_id' => $pr->id,
            ]);
        }
        // Check if 'update' sub-permission should be saved.
        if ($request->has('update')) {
            SubPermission::create([
                'name' => 'update',
                'permission_id' => $pr->id,
            ]);
        }
        // Check if 'delete' sub-permission should be saved.
        if ($request->has('delete')) {
            SubPermission::create([
                'name' => 'delete',
                'permission_id' => $pr->id,
            ]);
        }
        return redirect()->back()->with('message' , 'Permission Updated');
        }else{
            return redirect()->back()->with('message' , 'Permission Not Found');
        }

        
    }
}
