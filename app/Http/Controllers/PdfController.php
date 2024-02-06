<?php

namespace App\Http\Controllers;

use FpdfBarcode;
use App\Models\Received;
use App\Models\Mastercase;
use App\Models\Binlocation;
use App\Models\PalletLabel;
use Illuminate\Http\Request;
use App\Models\Mastercaseproduct;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    //
    //
    protected $fpdf;
 
    public function __construct()
    {
        $this->middleware('auth');
        $this->fpdf = new FpdfBarcode();

    }

    public function mclabel($id)
    {
      




        $mc=Mastercase::where('id',$id)->first();
        $result = DB::table('mastercaseproducts as m')
        ->join('products as p', 'm.pid', '=', 'p.id')
        ->select('p.upc', DB::raw("CONCAT('(', m.qty, ') ', p.name) AS qty_p_name"))
        ->where('m.mcid',$id)
        ->get();


       $this->fpdf->AddPage('P', [120,170]);

        $this->fpdf->SetFont('Arial','',12);
       
        $this->fpdf->Cell(100,15,"",1,1,'C');
        $this->fpdf->code128(35,12, $mc->upc, 50, 7, false);
        $this->fpdf->SETY(18);
        $this->fpdf->Cell(100,7,$mc->upc,0,1,'C');
        $this->fpdf->SetFont('Arial','B',16);
        $this->fpdf->MultiCell(0, 10, "Master Case: ".strtoupper($mc->name),1,'C');
        //$header = array('Product UPC', 'Product');
        //$data=array();
        $header = array('UPC', 'Product');
        $data = array();
        foreach ($result as $row) {
            $qtyPName = $row->qty_p_name;
            if (strlen($qtyPName) > 35) {
                $qtyPName = substr($qtyPName, 0, 35) . '...';
            }
            $data[] = array($row->upc, $qtyPName);
        }
        $this->fpdf->FancyTable($header,$data);

        $data['label'] = $mc->upc;
        $data['upc'] = $data[0][0];
        $data['name'] = $data[0][1];
        $data['master_case'] = $mc->name;
         view()->share('data',$data);
         $pdf = Pdf::loadView('admin.mastercase.pdf');

     // return view('admin.mastercase.pdf' , compact('data'));
         
       return $pdf->download('pdf_file.pdf');

        dd($mc->upc , $result , $header,$data);
        
        
        
       
        $this->fpdf->Output();

        exit;
    }

    public function palletlabel($rcid,$count,$mcid)
    {
        $mc=Mastercase::where('id',$mcid)->first();
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
            $p->status="0";
            $p->warehouse=$rc->warehouse;
            $p->save();
        }
           
       }
      
       $label=$pl->get();
       $t=count($label);
       $i=1;
        $result = DB::table('mastercaseproducts as m')
        ->join('products as p', 'm.pid', '=', 'p.id')
        ->select('p.upc', DB::raw("CONCAT('(', m.qty, ') ', p.name) AS qty_p_name"))
        ->where('m.mcid',$mcid)
        ->get(); 
        foreach($label as $l)
        {
            $this->fpdf->AddPage('P', [120,170]);

            $this->fpdf->SetFont('Arial','',12);
        
            $this->fpdf->Cell(100,18,"",1,1,'C');
            $this->fpdf->code128(35,12, $l->palletno, 50, 7, false);
            $this->fpdf->SETY(18);
            $this->fpdf->Cell(100,7,$l->palletno,0,1,'C');
            $this->fpdf->SETY(23);
            $this->fpdf->Cell(100,5,'(Pallet # '.$i.'/'.$t.' )',0,1,'C');
            $this->fpdf->SetFont('Arial','B',16);
            $this->fpdf->MultiCell(0, 7, "Master Case: ".strtoupper($mc->name),1,'C');
            $eheader = array('Container No', 'P.O');
            $edata=array($rc->container_no,$rc->order_no);
            $this->fpdf->EqTable($eheader,$edata);
          
            $eheader = array('Arrival Date', 'No of Mastercases');
            $edata=array($rc->arr_date,$l->mc_qty);
            $this->fpdf->EqTable($eheader,$edata);
            $header = array('UPC', 'Product');
            $data = array();
            foreach ($result as $row) {
                $qtyPName = $row->qty_p_name;
                $pattern = '/\((\d+)\)/'; // Match numbers within parentheses
                $multiplier=$l->mc_qty;
                $qtyPName = preg_replace_callback($pattern, function($matches)use ($multiplier) {
                    $originalNumber = intval($matches[1]);
                    $newNumber =$originalNumber."X".$multiplier."=".($originalNumber * $multiplier) ;
                    return "($newNumber)";
                }, $qtyPName);

                if (strlen($qtyPName) > 28) {
                    $qtyPName = substr($qtyPName, 0, 28) . '...';
                }
                $data[] = array($row->upc, $qtyPName);
            }
            $this->fpdf->FancyTable($header,$data);
            $i++;
            
            
        
            
        }
        $this->fpdf->Output();

        exit;
    }

   public function binlabel($id)
{
    // Retrieve the bin locations for a given ID
    $label = Binlocation::where('row_id', $id)->get();
   
    // Add a new PDF page with dimensions 120x170 in portrait mode
    $this->fpdf->AddPage('P', [120, 170]);

    // Initialize variables for barcode positioning
    $b = 12; // Initial X-coordinate
    $x = 18; // Initial Y-coordinate
    $s = 1; // Counter for positioning

    // Loop through each bin location
    foreach ($label as $l) {
        // Move to the next line in the PDF
        $this->fpdf->ln();

        // Set the font size and draw an empty cell with a border for spacing
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(100, 15, "", 1, 1, 'C');

        // Get the current Y-coordinate
        $x = $this->fpdf->GetY();

        // Adjust the Y-coordinate to position the barcode value
        $this->fpdf->SetY($x - 7);

        // Draw the bin location's barcode value
        $this->fpdf->Cell(100, 7, $l->barcode, 0, 1, 'C');

        // Set the font size and draw the bin location's name
        $this->fpdf->SetFont('Arial', 'B', 16);
        $this->fpdf->MultiCell(0, 7, $l->name, 1, 'C');

        // Add some line breaks for spacing
        $this->fpdf->ln();
        $this->fpdf->ln();
        $this->fpdf->ln();
        $this->fpdf->ln();

        // Generate and draw a Code 128 barcode at the specified position
        $this->fpdf->code128(35, $b, $l->barcode, 50, 7, false);

        // Update the X-coordinate for the next barcode
        if ($s < 3) {
            $b = $b + 57;
            $s++;
        } else {
            $s = 1;
            $b = 12;
        }
    }

    // Output the PDF content
    $this->fpdf->Output();

    // Exit to prevent any further code execution
    exit;
}

}
