<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Product;
use App\Models\Received;
use Milon\Barcode\DNS2D;
use App\Models\Rcproduct;
use App\Models\Warehouse;
use App\Models\Mastercase;
use App\Models\Permission;
use App\Models\PalletLabel;
use Illuminate\Http\Request;
use App\Models\Mastercaseproduct;
use Illuminate\Support\Facades\Auth;
use Picqer\Barcode\BarcodeGeneratorHTML;

class MasterController extends Controller
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
                
                if (!$permissions->contains('permission', '5')) {
                    abort(401, 'Unauthorized');
                }
            }

            return $next($request);
        });
        $this->middleware('mastercase.add')->only(['create']);
       $this->middleware('mastercase.update')->only(['update' , 'edit']);
       $this->middleware('mastercase.delete')->only(['delete']);
       
       
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mc=Mastercase::orderBy('id', 'desc')->get();
        return view('admin.mastercase.index',compact('mc'));
    }

    public function getmc(Request $request)
    {
        $mqty=$request->mqty;
        $mc=Mastercase::find($request->mcid);
        $pr=Mastercaseproduct::where('mcid',$request->mcid)->get();
        $d='<div class="col-md-2">
			<div class="position-relative mb-3">
				<label for="exampleEmail11" class="form-label d-block">Length (In)</label>
				<input class="form-control" value="'.$mc->length.'"readonly />
			</div>
		    </div>';
        $d.='<div class="col-md-2">
                <div class="position-relative mb-3">
                    <label for="exampleEmail11" class="form-label d-block">Heigth (In)</label>
                    <input class="form-control" value="'.$mc->heigth.'" readonly />
                </div>
            </div>';
        $d.='<div class="col-md-2">
                <div class="position-relative mb-3">
                    <label for="exampleEmail11" class="form-label d-block">Width (In)</label>
                    <input class="form-control" value="'.$mc->width.'" readonly />
                </div>
            </div>';

        $d.='<div class="col-md-2">
                <div class="position-relative mb-3">
                    <label for="exampleEmail11" class="form-label d-block">Ti</label>
                    <input name="ti" class="form-control" value="'.$mc->ti.'"/>
                </div>
            </div>';
        $d.='<div class="col-md-2">
            <div class="position-relative mb-3">
                <label for="exampleEmail11" class="form-label d-block">Hi</label>
                <input name="hi" class="form-control" value="'.$mc->hi.'"/>
            </div>
            </div>';
        $d.='<div class="col-md-2">
			<div class="position-relative mb-3">
				<label for="exampleEmail11" class="form-label d-block">Weigth (lbs)</label>
				<input class="form-control" value="'.$mc->weight.'" readonly />
			</div>
		    </div>';

	
      
        $tb="";
        foreach($pr as $p)
        {
            $pd=getproduct($p->pid);
            $cq=$p->qty*$mqty;
            $tb.='<tr><th>'.$pd->upc.'</th><td>'.$pd->name.'</td><td>'.$p->qty.'</td><td><input name="tqty[]" class="form-control tqty" value="'.$cq.'" type="text" readonly /></td><td><input type="hidden" name="pid[]" value="'.$p->pid.'" /><input name="fob[]" class="form-control fob" type="text" /></td><td><input name="rp[]" class="form-control rp" type="text" /></td><td><input name="ed[]" class="form-control ed" type="date" pattern="\d{4}-\d{2}-\d{2}" /></td></tr>';  
        }
        
        return response()->json(['status'=>'Successful','message'=>'Record is Created','rec'=>$tb,'mc'=>$d,'error'=>$mc]);
    }

    public function getmcdq(Request $request)
    {
        $mqty=$request->mqty;
        $mc=Mastercase::find($request->mcid);
        $pr=Mastercaseproduct::where('mcid',$request->mcid)->get();
        $d='<div class="col-md-2">
			<div class="position-relative mb-3">
				<label for="exampleEmail11" class="form-label d-block">Length (In)</label>
				<input class="form-control" value="'.$mc->length.'"readonly />
			</div>
		    </div>';
        $d.='<div class="col-md-2">
                <div class="position-relative mb-3">
                    <label for="exampleEmail11" class="form-label d-block">Heigth (In)</label>
                    <input class="form-control" value="'.$mc->heigth.'" readonly />
                </div>
            </div>';
        $d.='<div class="col-md-2">
                <div class="position-relative mb-3">
                    <label for="exampleEmail11" class="form-label d-block">Width (In)</label>
                    <input class="form-control" value="'.$mc->width.'" readonly />
                </div>
            </div>';

        $d.='<div class="col-md-2">
                <div class="position-relative mb-3">
                    <label for="exampleEmail11" class="form-label d-block">Ti</label>
                    <input name="ti" class="form-control" value="'.$mc->ti.'" readonly/>
                </div>
            </div>';
        $d.='<div class="col-md-2">
            <div class="position-relative mb-3">
                <label for="exampleEmail11" class="form-label d-block">Hi</label>
                <input name="hi" class="form-control" value="'.$mc->hi.'" readonly/>
            </div>
            </div>';
        $d.='<div class="col-md-2">
			<div class="position-relative mb-3">
				<label for="exampleEmail11" class="form-label d-block">Weigth (lbs)</label>
				<input class="form-control" value="'.$mc->weight.'" readonly />
			</div>
		    </div>';

	
      
        $tb="";
        foreach($pr as $p)
        {
            $pd=getproduct($p->pid);
            $cq=$p->qty*$mqty;
            $tb.='<tr><th>'.$pd->upc.'</th><td>'.$pd->name.'</td><td>'.$p->qty.'</td></tr>';  
        }
        
        return response()->json(['status'=>'Successful','message'=>'Record is Created','rec'=>$tb,'mc'=>$d,'error'=>$mc]);
    }

    public function getmcd(Request $request)
    {
        
        $label=$request->label;
        $l=PalletLabel::where('palletno',$label)->first();
        $r=Received::where('id',$l->rc_id)->first();
        $mc=Mastercase::find($request->mcid);
        $pr=Mastercaseproduct::where('mcid',$request->mcid)->get();
        $d='<div class="col-md-3">
			<div class="position-relative mb-3">
				<label for="exampleEmail11" class="form-label d-block">Master Case Quantity</label>
				<input class="form-control" value="'.$l->mc_qty.'"readonly />
			</div>
		    </div>';
        $d.='<div class="col-md-3">
			<div class="position-relative mb-3">
				<label for="exampleEmail11" class="form-label d-block">Arrival Date</label>
				<input class="form-control" value="'.$r->arr_date.'"readonly />
			</div>
		    </div>';   
        $d.='<div class="col-md-3">
                <div class="position-relative mb-3">
                    <label for="exampleEmail11" class="form-label d-block">P.Order No</label>
                    <input class="form-control" value="'.$r->order_no.'" readonly />
                </div>
            </div>';
        $d.='<div class="col-md-3">
                <div class="position-relative mb-3">
                    <label for="exampleEmail11" class="form-label d-block">Container No</label>
                    <input class="form-control" value="'.$r->container_no.'" readonly />
                </div>
            </div>';

        
            $tb="";
        foreach($pr as $p)
        {
            $pd=getproduct($p->pid);
            $cq=$p->qty*$l->mc_qty;
            $tb.='<tr><th>'.$pd->upc.'</th><td>'.$pd->name.'</td><td>'.$p->qty.'</td><td>'.$cq.'</td></tr>';  
        }
        
        return response()->json(['status'=>'Successful','message'=>'Record is Created','rec'=>$tb,'mc'=>$d,'error'=>$mc]);
    }
    public function label($id)
    {
        $mc=Mastercase::where('id',$id)->first();
        $mcp=Mastercaseproduct::where('mcid',$id)->get();
        $generator = new BarcodeGeneratorHTML();
        $barcode=$generator->getBarcode($mc->upc, $generator::TYPE_CODE_128);
        return view('admin.mastercase.label',compact('barcode','mcp','mc'));
    }

    public function palletlabel($rcid,$count,$mcid)
    {
        $mc=Mastercase::where('id',$mcid)->first();
        $mcp=Mastercaseproduct::where('mcid',$mcid)->get();
        $rc=Received::where('id',$rcid)->first();
       
       $pl=PalletLabel::where('rc_id',$rcid);
       $ac=$pl->count();
       if($ac!=$count)
       {
        $pl->delete();
            $pc=$rc->ti*$rc->hi;
            $q=$rc->mc_quantity;
        for($i=1;$i<=$count;$i++)
        {
                        if($q>=$pc)
                        $a=$pc;
                        else
                        $a=$q;
                        $q=$q-$pc;
            $p = new PalletLabel();
            $p->rc_id = $rcid;
            $l=100000+ rand(1,99999);
            $p->palletno=date("ymd").$l;
            $p->mc_qty=$a;
            $p->avl_qty=$a;
            $p->mc_id=$mcid;
            $p->status="1";
            $p->warehouse="1";
            $p->checkin_status="0";
            $p->save();
        }
           
       }
       $label=$pl->get();
       return view('admin.mastercase.palletlabel',compact('label','mcp','mc','rc'));  
    }

    public function received()
    {
        //
        $wh=Warehouse::where('is_active','1')->get();
        $mc=Mastercase::get();
        return view('admin.mastercase.received',compact('mc','wh'));
    }
    public function newreceived()
    {
        //
        $wh=Warehouse::where('is_active','1')->get();
        $mc=Mastercase::get();
        return view('admin.mastercase.receiveproduct',compact('mc','wh'));
    }

   

   


    public function receivedlist()
    {
        //
        $pr=Received::orderBy('id', 'desc')->get();
        return view('admin.mastercase.list',compact('pr'));
    }

    public function editreceived($id)
    {
        $wh=Warehouse::where('is_active','1')->get();
        $mc=Mastercase::get();
        $rc=Received::where('id',$id)->first();
        $pr=Rcproduct::where('rc_id',$id)->get();
        return view('admin.mastercase.editreceiveproduct',compact('mc','wh','rc','pr'));  
    }

    public function viewreceived($id)
    {
        
       
        $rc=Received::where('id',$id)->first();
        $pr=Rcproduct::where('rc_id',$id)->get();
        return view('admin.mastercase.viewreceiveproduct',compact('rc','pr'));  
    }

    public function savereceived(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'warehouse' => 'required',
            'arrival_date' => 'required',
                
        ]);

        if ($validator->passes()) {
            $rc = new Received();
            $rc->warehouse = $request->warehouse;
            $rc->arr_date = $request->arrival_date;
            $rc->order_no = $request->order_no;
            $rc->container_no =$request->container_no;
            $rc->mcid = $request->mastercase;
            $rc->ti = $request->ti;
            $rc->hi = $request->hi;
            $cm=$request->ti*$request->hi;
            $rc->mc_quantity = $request->quantity;
            $rc->pallet_count = ceil($request->quantity/$cm);
            $rc->serial_no =$request->serial_no;
            $rc->user = Auth::user()->id;
            $rc->save();
            $rcid=$rc->id;
            
            for($i=0; $i<count($request->pid); $i++)
            {
                $rcm = new Rcproduct();
                $rcm->rc_id=$rcid;
                $rcm->p_id=$request->pid[$i];
                $rcm->fob=$request->fob[$i];
                $rcm->retail_price=$request->rp[$i]; 
                $rcm->expiry=$request->ed[$i];
                $rcm->save();
            }
            $pc=$rc->ti*$rc->hi;
            $q=$rc->mc_quantity;
        
            for($i=1;$i<=$rc->pallet_count;$i++)
            {
                        if($q>=$pc)
                        $a=$pc;
                        else
                        $a=$q;
                        $q=$q-$pc;
                        $p = new PalletLabel();
                        $p->rc_id = $rcid;
                        $l=100000+ rand(1,99999);
                        $p->palletno=date("ymd").$l;
                        $p->status="0";
                        $p->checkin_status="0";
                        $p->mc_id=$rc->mcid;
                        $p->mc_qty=$a;
                        $p->avl_qty=$a;
                        $p->warehouse=$request->warehouse;
                        $p->save();
            }
                    
              
            return response()->json(['status'=>'Successful','message'=>'Record is Saved Successfully','error'=>'']);
        }
        else{
            return response()->json(['status'=>'Validation Error','message'=>'There is something wrong','error'=>$validator->errors()->all()]);
        }
       
       // return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'']);
        
        
    }

    public function updatereceived(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'warehouse' => 'required',
                
        ]);
        $d=0;

        if ($validator->passes()) {
            $rc = Received::find($request->rcid);
            if($rc->warehouse==$request->warehouse)
            {
                $d=0;
            }
            else{
                $d=1;
            }
            $rc->warehouse = $request->warehouse;
            $rc->arr_date = $request->arrival_date;
            $rc->order_no = $request->order_no;
            $rc->container_no =$request->container_no;
            $rc->mcid = $request->mastercase;
            $rc->ti = $request->ti;
            $rc->hi = $request->hi;
            $rc->mc_quantity = $request->quantity;
            $rc->pallet_count = getpalletcount($request->mastercase);
            $rc->serial_no =$request->serial_no;
            $rc->user = Auth::user()->id;
            $rc->update();
          
            if($d==1)
            {
                Rcproduct::where('rc_id',$request->rcid)->delete();
                for($i=0; $i<count($request->pid); $i++)
                {
                    $rcm = new Rcproduct();
                    $rcm->rc_id=$rcid;
                    $rcm->p_id=$request->pid[$i];
                    $rcm->fob=$request->fob[$i];
                    $rcm->retail_price=$request->rp[$i];
                    $rcm->expiry=$request->ed[$i];
                    $rcm->save();
                }
            }
            else{
                for($i=0; $i<count($request->pid); $i++)
                {
                    Rcproduct::where('rc_id',$request->rcid)->where('p_id',$request->pid[$i])->update([
                        'fob'=>$request->fob[$i],
                        'retail_price'=>$request->rp[$i],
                        'expiry'=>$request->ed[$i],
                    ]);
                   
                }
            }
            
            
            
            

            return response()->json(['status'=>'Successful','message'=>'Record is Updated Successfully','error'=>'']);
        }
        else{
            return response()->json(['status'=>'Validation Error','message'=>'There is something wrong','error'=>$validator->errors()->all()]);
        }
       
       // return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'']); 
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product=Product::get();
        return view('admin.mastercase.create',compact('product')); 
        
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
            'upc' => 'required|digits:12|unique:mastercases',
            'name' => 'required',
            'length' => 'numeric|nullable|min:0',
            'height' => 'numeric|nullable|min:0',
            'width' => 'numeric|nullable|min:0',
            'weight' => 'numeric|nullable|min:0',
            'hi' => 'numeric|min:0',
            'ti' => 'numeric|min:0',
            'pid' => 'required|array',  // Ensure pid is an array
            'pid.*' => 'required',  
            
        ]);

        if ($validator->passes()) {
            $mc = new Mastercase();
            $mc->name = $request->name;
            $mc->upc = $request->upc;
            $mc->description = $request->description;
            $mc->length = $request->length;
            $mc->height =$request->height;
            $mc->width = $request->width;
            $mc->weight = $request->weight;
            $mc->hi = $request->hi;
            $mc->ti = $request->ti;
            $mc->status="1";
            $mc->alert_quantity=$request->alert_quantity;
            $mc->user = Auth::user()->id;
            $mc->save();
            $mcid=$mc->id;

            for($i=0; $i<count($request->pid); $i++)
            {
                $mcp = new Mastercaseproduct();
                $mcp->mcid=$mcid;
                $mcp->pid=$request->pid[$i];
                $mcp->qty=$request->pqty[$i];
                $mcp->save();
            }

            return response()->json(['status'=>'Successful','message'=>'Record is Created','error'=>'']);
        }
        else{
            return response()->json(['status'=>'Validation Error','message'=>'There is something wrong','error'=>$validator->errors()->all()]);
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
        $product=Product::get();
        $mc=Mastercase::where('id',$id)->first();
        $mcp=Mastercaseproduct::where('mcid',$mc->id)->get();
        return view('admin.mastercase.show',compact('mc','product','mcp'));
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
        $product=Product::get();
        $mc=Mastercase::where('id',$id)->first();
        $mcp=Mastercaseproduct::where('mcid',$mc->id)->get();
        return view('admin.mastercase.edit',compact('mc','product','mcp'));
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
        
        $validator = Validator::make($request->all(), [
            'upc' => 'required|digits:12',
            'name' => 'required',
            
        ]);
 
        if ($validator->passes()) {
            $mc = Mastercase::find($id);
            $mc->name = $request->name;
            $mc->description = $request->description;
            $mc->length = $request->length;
            $mc->height =$request->height;
            $mc->width = $request->width;
            $mc->weight = $request->weight;
            $mc->hi = $request->hi;
            $mc->ti = $request->ti;
            $mc->alert_quantity=$request->alert_quantity;
            $mc->user = Auth::user()->id;
            $mc->update();
            Mastercaseproduct::where('mcid',  $id)
            ->delete();
           

            for($i=0; $i<count($request->pid); $i++)
            {
                $mcp = new Mastercaseproduct();
                $mcp->mcid=$id;
                $mcp->pid=$request->pid[$i];
                $mcp->qty=$request->pqty[$i];
                $mcp->save();
            }
            

            return response()->json(['status'=>'Successful','message'=>'Record is Updated','error'=>'']);
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
        $mc = Mastercase::find($id);
        $mc->delete();
        return redirect()->back()->with('message', 'Record Deleted Successfully');
    }

    public function deleterecieved($id){
        $rc = Received::find($id);
        $rc->delete();
        Rcproduct::where('rc_id',$id)->delete();
        return redirect()->back()->with('message', 'Record Deleted Successfully');
    }

    public function changemc($id){
        $mc = Mastercase::find($id);
        if($mc->status==1)
        {
            $mc->status=0;
        }
        else{
            $mc->status=1;
        }
        $mc->update();
       
        return redirect()->back()->with('message', 'Status Changed Successfully');
    }
}
