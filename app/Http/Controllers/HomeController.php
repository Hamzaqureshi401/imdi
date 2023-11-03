<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Transfer;
use App\Models\Rcproduct;
use App\Models\Warehouse;
use App\Models\Mastercase;
use App\Models\Binlocation;
use App\Models\PalletLabel;
use App\Models\Pickorder;
use Illuminate\Support\Facades\Artisan;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Artisan::call('migrate');
    
        $data = $this->getDashBoardData();
        $warehouses = Warehouse::get();


        //dd($data);
       
        return view('home' , compact('data' , 'warehouses'));
    }


    public function getDashBoardData(){

        $data['received_products']  = Rcproduct::latest()->take(10)->get();
        $data['master_case']        = Mastercase::latest()->take(10)->get();
        $data['PalletLabel']        = PalletLabel::latest()->take(10)->get();
        $data['Pickorder']          = Pickorder::latest()->take(10)->get();
        $data['Transfer']           = Transfer::latest()->take(10)->get();
        $data['reorderReport']      = Mastercase::where('status','1')->latest()->take(10)->get();
        $data['clouseoutreport']    = Mastercase::where('status','0')->latest()->take(10)->get();
        $data['all_master_case']    = Mastercase::get();
        //$mc=Mastercase::where('status','0')->get();

        
        return $data;

    }

    public function getOtherData($warehouse_id){

        $data['received_products']  = Rcproduct::latest()->take(10)->get();
        $data['PalletLabel']        = PalletLabel::where('warehouse' , $warehouse_id)->latest()->take(10)->get();
        $data['master_case']        = Mastercase::latest()->take(10)->get();
        
        $data['Pickorder']          = Pickorder::with(['palletlabel' => function ($query) use ($warehouse_id) {
            $query->where('warehouse', $warehouse_id);
        }])
        ->latest()
        ->take(10)
        ->get();
        $data['Transfer']           = Transfer::latest()->take(10)->get();
        $data['reorderReport']      = Mastercase::where('status','1')->latest()->take(10)->get();
        $data['clouseoutreport']    = Mastercase::where('status','0')->latest()->take(10)->get();
        $data['all_master_case']    = Mastercase::get();
        
        
        return view('other_reports' , compact('data'));


        
        return $data;


    }
}
