<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
                
                if (!$permissions->contains('permission', '1')) {
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
        $users=User::where('is_active','1')->get();
        return view('admin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $role=Role::get();
        return view('admin.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users',
            'name' => 'required|string',
            'contact' => 'required|string',
            'address' => 'required|string',
            'password' => 'required|string',
            'role'=>'required',
            'confirm_password' => 'required|string',
        ]);

        if ($validator->passes()) {
        
            $code=$request->post('email');
            $name=$request->post('name');
            $role=$request->post('role');
            $contact=$request->post('contact');
            $address=$request->post('address');
            $pass=$request->post('password');
            $conpass=$request->post('confirm_password');
            User::create([           
             'name' =>  $name,
             'role' =>  $role,
             'email' => $code,
             'contact' => $contact,
             'address' => $address,  
             'password' =>Hash::make($pass),
             'is_active' =>'1'
         ]); 
            return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'']);
        }
        else{
            return response()->json(['status'=>'Validation Error','message'=>'There is something wrong','error'=>$validator->errors()->all()]);
        }
        

        

      
      // return response()->json(['status'=>'Successful','message'=>'Record is Created']);  
    
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
        return view('admin.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::where('id',$id)->first();
        return view('admin.edit',compact('user'));
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
        $validator = Validator::make($request->all(), [
            // 'email' => 'required|unique:users',
            'name' => 'required|string',
            'contact' => 'required|string',
            'address' => 'required|string',
            
        ]);

        if ($validator->passes()) {
        
            $code=$request->post('email');
            $name=$request->post('name');
            $role=$request->post('role');
            $contact=$request->post('contact');
            $address=$request->post('address');
            $pass=$request->post('pass');
            $conpass=$request->post('conpass');
            $user = User::find($id);
            $user->name = $name;
            $user->role = $role;
            $user->email = $code;
            $user->address = $address;
            $user->contact = $contact;
            if($pass!="")
            {
                $user->address = Hash::make($pass);  
            }
            $user->update();
            return response()->json(['status'=>'Successful','message'=>'Record is Updated ','error'=>'']);
        }
        else{
            return response()->json(['status'=>'Validation Error','message'=>'There is something wrong','error'=>$validator->errors()->all()]);
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
       User::where('id',  $id)
        ->update([

          'is_active' => '0',   
        ]);
        return redirect()->back()->with('message', 'Record Deleted Successfully');
        
       
    }
    public function profile()
    {
        return view('admin.profile');
    }
}
