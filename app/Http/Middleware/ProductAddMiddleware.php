<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Permission;
use Illuminate\Http\Request;
use Auth;

class ProductAddMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $subPermissionName = 'add';
        $permissionType    = 4;
        
        if(Auth::user()->role == 1){
            return $next($request);    
        }else if(Auth::user()->role != 1){
            
            $pr = Permission::where(['role_id' => Auth::user()->role , 
                'permission' => $permissionType]);
            if($pr->exists()){
                $getSubPermission = $pr->first()->getSubPermission->contains('name' , $subPermissionName);
                if($getSubPermission){
                    return $next($request);
                }else{
                    return redirect()->back()->with('message' , 'Not Allowed!');
                }
            }else{
                return redirect()->back()->with('message' , 'Not Allowed!');
            }

        }
        
    }
}
