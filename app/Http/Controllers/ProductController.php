<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Product;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Imports\ProductImport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
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
                
                if (!$permissions->contains('permission', '4')) {
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
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('admin.product.index',compact('products'));
    }

    public function import(Request $request)
    {
        try {
            Excel::import(new ProductImport, $request->file('file'));
           
            return redirect()->back()->with('success', 'Data imported successfully.');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            
            // You can iterate through the failures and create a list of error messages
            $errorMessages = [];
            foreach ($failures as $failure) {
                $errorMessages[] = "Row {$failure->row()}: {$failure->errors()[0]}";
            }
            
            return redirect()->back()->withErrors($errorMessages);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        dd($this->middleware('product.add') , 1);
        return view('admin.product.create'); 
    }

    public function importview()
    {
        //
        return view('admin.product.import'); 
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
            'upc' => 'required|digits:12|unique:products',
            'product_name' => 'required|string',     
        ]);
        

        if ($validator->passes()) {
        
            $upc=$request->post('upc');
            $pname=$request->post('product_name');
            $desc=$request->post('description');
            $keywords=$request->post('keywords');
            $start_date=$request->post('start_date');
            $end_date=$request->post('end_date');
            
            Product::create([           
             'upc' =>  $upc,
             'name' => $pname,
             'description' => $desc,
             'keywords' =>  $keywords,
             'start_date' => $start_date,
             'end_date' => $end_date,
             'user' => Auth::user()->id,
         ]); 
            return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'']);
        }
        else{
            return response()->json(['status'=>'Validation Error','message'=>'There is something wrong','error'=>$validator->errors()->all()]);
        }
        //return response()->json(['status'=>'Successful','message'=>'Record is Created']);
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
        $product=Product::where('id',$id)->first();
        return view('admin.product.edit',compact('product'));
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
            'upc' => 'required|digits:12|',
            'product_name' => 'required|string',     
        ]);
        

        if ($validator->passes()) {
        
            $upc=$request->post('upc');
            $pname=$request->post('product_name');
            $desc=$request->post('description');
            $keywords=$request->post('keywords');
            $start_date=$request->post('start_date');
            $end_date=$request->post('end_date');
            
            $pr = Product::find($id);
            if($pr->upc!=$upc)
            {
                $pr->upc=$upc;
            }
            $pr->name=$pname;
            $pr->description=$desc;
            $pr->keywords=$keywords;
            $pr->start_date=$start_date;
            $pr->end_date=$end_date;
            $pr->user=Auth::user()->id;
            $pr->update();
            
           
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
        //

        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Record Deleted Successfully');
    }
}
