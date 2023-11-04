<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use App\Models\Permission;
use Illuminate\Http\Request;

class AppAccess
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
        //dd(auth()->check() , auth()->user());
        if (auth()->check() && Permission::where('role_id', auth()->user()->role)->where('permission', 12)->exists()) {
            return $next($request);
        } else {
            //return $next($request);
            return response()->json(['status' => false, 'msg' => "Your Access Is blocked!"], 404);
        }
    }
}
