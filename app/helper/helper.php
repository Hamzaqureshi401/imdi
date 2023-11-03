<?php

use Carbon\Carbon;
use App\Models\Faq;
use App\Models\Deal;
use App\Models\User;
use App\Models\Slider;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Category;
use App\Models\Rackinfo;
use App\Models\Received;
use App\Mail\WelcomeMail;
use App\Models\Pickorder;
use App\Models\Storeinfo;
use App\Models\Warehouse;
use App\Models\Mastercase;
use App\Models\Permission;
use App\Models\Binlocation;
use App\Models\PalletLabel;
use App\Models\Socialmedia;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\Models\StockPlacement;
use App\Models\Mastercaseproduct;
use App\Models\Cyclecountlocation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Picqer\Barcode\BarcodeGeneratorHTML;


function checkpermissions()
{
	$p=Permission::where('role_id',Auth::user()->role)->get();
	return $p;
}


// function get_avl_qty_mc($mcid)
// {
// 	$res = PalletLabel::select(DB::raw('SUM(avl_qty) as total_avl_qty'))
//     ->groupBy('mc_id')
// 	->where('mc_id',1);
// 	if($res->count()>0)
// 	{
// 		$res=$res->get();
// 		foreach($res as $r)
// 		{
// 		return $r->total_avl_qty;
// 		}

// 	}
// 	else{
// 		$res=-1;
// 	}

	
    
// }

function checkpermissions_controller($role)
{
	$p=Permission::where('role_id',$role)->get();
	return $p;
}


function checkpickorder($lid)
{
	$p=Pickorder::where('label_id',$lid)->count();
	return $p;
}




function checkrolestatus($role)
{
	$p=User::where('role',$role)->count();
	return $p;
}


function getwarehouse($id)
{
$w=Warehouse::where('id',$id)->first();
return $w->warehouse;
}

function get_total_ccl($cc)
{
	$ccl=Cyclecountlocation::where("cc_id",$cc)->count();
	return $ccl;

}

function get_total_ccl_pend($cc)
{
	$ccl=Cyclecountlocation::where("cc_id",$cc)->where("pallet_no","")->count();
	return $ccl;

}

function getusername($id)
{
$w=User::where('id',$id)->first();
return $w->name;
}
function getavailablespace($warehouse)
{
$rack=Rackinfo::where('warehouse',$warehouse)->get();
$s=0;
	foreach($rack as $r)
	{
		$b=Binlocation::where('row_id',$r->id)->where('status','0')->count();
		$s=$s+$b;
	}
	return $s;
}

function getstatusforcheckin($rcid){
	$label=PalletLabel::where('rc_id',$rcid)->get();
	$c=0;
	foreach($label as $l)
	{
		$s=checkinstatusforlabel($l->id);
		$c=$c+$s;
	}
	return $c;

}

function getassignedpallet($rcid)
{
	$label=PalletLabel::where('rc_id',$rcid)->where('status','1')->count();
	return $label;
}

function getassignedpallet_status($rcid,$status)
{
	$label=PalletLabel::where('rc_id',$rcid)->where('status','1')->where('checkin_status',$status)->count();
	return $label;
}

function rackstatusforwarehouse($id)
{
	$sp=Rackinfo::where('warehouse',$id)->count();
	return $sp;
}

function binstatusforrack($id)
{
	$sp=Binlocation::where('row_id',$id)->where('status','0')->count();
	return $sp;
}

function check_status_for_rc($id)
{
	$sp=PalletLabel::where('rc_id',$id)->where('status','1')->count();
	return $sp;
}


function checkinstatusforlabel($id)
{
	$sp=StockPlacement::where('label_id',$id)->count();
	return $sp;
}


function getrcdetails($id)
{
$w=Received::where('id',$id)->first();
return $w;
}

function getwarehouse_rc($id)
{
$w=Received::where('id',$id)->first();
$w=getwarehouse($w->warehouse);
return $w;
}

function checkprodinmaster($pid)
{
	$p=Mastercaseproduct::where('pid',$pid)->count();
	return $p;

}
function get_mc_pro_wise($mcid,$qty)
{
	$mc=Mastercaseproduct::where('mcid',$mcid)->get();
	$res="";
	foreach($mc as $m)
	{
		$p=getproduct($m->pid);
		$res.='<span class="pd">'.$p->name.' ['.$m->qty.'] </span><b>Available: <span class="text-success">('.$m->qty*$qty.')</span></b><br>';
	}
	return $res;
}

function get_mc_pro_wise_excel($mcid,$qty)
{
	$mc=Mastercaseproduct::where('mcid',$mcid)->get();
	$res="";
	foreach($mc as $m)
	{
		$p=getproduct($m->pid);
		$res.=$p->name.' ['.$m->qty.'] Available: ('.$m->qty*$qty.')';
	}
	return $res;
}

function get_mc_pro_wise_out($mcid,$qty)
{
	$mc=Mastercaseproduct::where('mcid',$mcid)->get();
	$res="";
	foreach($mc as $m)
	{
		$p=getproduct($m->pid);
		$res.='<span class="pd">'.$p->name.' ['.$m->qty.'] </span><b>Units: <span class="text-danger">('.$m->qty*$qty.')</span></b><br>';
	}
	return $res;
}

function get_mc_pro_simple($mcid)
{
	$mc=Mastercaseproduct::where('mcid',$mcid)->get();
	$res="";
	foreach($mc as $m)
	{
		$p=getproduct($m->pid);
		$res.=$p->name.'('.$m->qty.') <b>Unit(s): <span class=" cal_pro text-danger"></span></b><br>';
	}
	return $res;
}

function check_mc_in_rc($mcid)
{
	$m=Received::where('mcid',$mcid)->count();
	return $m;

}

function barcode_gen($value)
{
		$generator = new BarcodeGeneratorHTML();
        $barcode=$generator->getBarcode($value, $generator::TYPE_CODE_128);
		return $barcode;
}

function getpalletcount($mcid)
{
	$m=Mastercase::where('id',$mcid)->first();
	$p=$m->hi*$m->ti;
	return $p;
}
 

function getbinlocations($row_id)
{
	$b=Binlocation::where('row_id',$row_id)->get();
	return $b;
}

function get_pl_location($id)
{
	$b=Binlocation::where('labelid',$id)->first();
	if(!empty($b)){
		return $b->name;
	}else{
		return 'Not Found!';
	}
	
}
function get_bin_location($id)
{
	//dd($id);
	$b=Binlocation::where('labelid',$id)->first();
	if(!empty($b)){
		return $b->id;
	}else{
		return 'Record not Found!';
	}
}
function getbindetail($id)
{
	$b=Binlocation::where('id',$id)->first();
	return $b;
}

function getlabelinfo($labelno)
{
	$b=PalletLabel::where('palletno',$labelno)->first();
	return $b;
}

function getmastercase($id)
{
$m=Mastercase::where('id',$id)->first();
if(empty($m)){
    return '';
}else{
return $m->name." [".$m->upc."]";    
}
}

function getmastercasefull($id)
{
	$mc=Mastercase::where('id',$id)->first();
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
				<input name="ti" class="form-control" value="'.$mc->ti.'" />
			</div>
		</div>';
	$d.='<div class="col-md-2">
		<div class="position-relative mb-3">
			<label for="exampleEmail11" class="form-label d-block">Hi</label>
			<input name="hi" class="form-control" value="'.$mc->hi.'" />
		</div>
	</div>';
	$d.='<div class="col-md-2">
			<div class="position-relative mb-3">
				<label for="exampleEmail11" class="form-label d-block">Weigth (lbs)</label>
				<input class="form-control" value="'.$mc->weight.'" readonly />
			</div>
		</div>';

	return $d  ;
	
}

function getmastercasefull_edit($id)
{
	$mc=Mastercase::where('id',$id)->first();
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
				<label for="exampleEmail11" class="form-label d-block">Weigth (lbs)</label>
				<input class="form-control" value="'.$mc->weight.'" readonly />
			</div>
		</div>';

	return $d  ;
	
}
function getmaster($id)
{
$m=Mastercase::where('id',$id)->first();
return $m->name;
}

function getmcp_qty($mcid,$pid)
{
$m=Mastercaseproduct::where('mcid',$mcid)->where('pid',$pid)->first();
return $m->qty;
}



function getmonthdiff($s,$e)
{
	$date1 = new DateTime($s);
	$date2 = new DateTime($e);

	$diff = $date1->diff($date2);

	$diffInMonths = ($diff->y * 12) + $diff->m;	
	return $diffInMonths;
}
 function monthname($dateString)
 {
	
	$date = Carbon::parse($dateString);
	$formattedDate = $date->format('F Y');
	return $formattedDate;
 }
function getproduct($id)
{
	$pr=Product::where('id',$id)->first();
	return $pr;
}


function sendmail($email,$password)
{

    Mail::to($email)->send(new WelcomeMail($password));
}

function update_slider($id,$img,$head,$subhead)
{
    if($img=="")
    {

    }
    else
    {
    Slider::where('id','1')->update([
        $id=>$img,
        $id."head"=>$head,
        $id."subhead"=>$subhead,
    ]);
    }
    
}
function get_socialmedia()
{
    $sm=Socialmedia::first();
    return $sm;
}

function get_categories()
{
    $cat=Category::where('is_active','1')->get();
    return $cat;
}
function get_category($id)
{
    $cat=Category::where('id',$id)->first();
    return $cat->category ;
}

function get_cat_pro($id)
{
    $cat=Product::where('cat_id_fk',$id)->where('status','1')->get();
    return $cat;
}

function get_pro()
{
    $pro=Product::where('status','1')->orderBy('id', 'DESC')->get()->take(6);
    return $pro;
}

function get_product($id)
{
    $pro=Product::where('status','1')->where('id',$id)->first();
    return $pro;
}


function get_storeinfo()
{
    $si=Storeinfo::first();
    return $si;
}
function get_sliders()
{
    $slides=Slider::first();
    return $slides;
}
function get_deals()
{
    $deals=Deal::get();
    return $deals;
}

function get_feature($id)
{
    $f=Feature::where('pr_fk_id',$id)->get();
    return $f;
}

function get_products()
{
    $pro=Product::where('status','1')->get();
    return $pro;
}

function get_faq_active()
{
    $f=Faq::where('status','1')->get();
    return $f;
}

class QRcode
	{
		private $version_mx	= 40;		// numero de version maximal autoris�
		private $type		= 'bin';	// type de donn�e
		private $level		= 'L';		// ECC
		private $value		= '';		// valeur a encoder
		private $length		= 0;		// taille de la valeur
		private $version	= 0;		// version
		private $size		= 0;		// dimension de la zone data
		private $qr_size	= 0;		// dimension du QRcode
		
		private $data_bit 	= array();	// nb de bit de chacune des valeurs
		private $data_val 	= array();	// liste des valeurs de bit diff�rents
		private $data_word 	= array();	// liste des valeurs tout ramen� � 8bit
		private $data_cur 	= 0;		// position courante
		private $data_num 	= 0;		// position de la dimension
		private $data_bits	= 0;		// nom de bit au total
		private $max_data_bit	= 0;	// lilmite de nombre de bit maximal pour les datas
		private $max_data_word	= 0;	// lilmite de nombre de mot maximal pour les datas
		private $max_word	= 0;		// lilmite de nombre de mot maximal en global
		
		private $ec	= 0;
		private $matrix = array();
		private $matrix_remain = 0; 
		private $matrix_x_array			= array();
		private $matrix_y_array			= array();
		private $mask_array				= array();
		private $format_information_x1	= array();
		private $format_information_y1	= array();
		private $format_information_x2	= array();
		private $format_information_y2	= array();
		private $rs_block_order			= array();
		private $rs_ecc_codewords		= 0;
		private $byte_num				= 0;
		
		private $final					= array();
		private $disable_border			= false;
		
		
		/**
		 * Constructeur
		 *
		 * @param	string		message a encoder
		 * @param	string		niveau de correction d'erreur (ECC) : L, M, Q, H
		 * @return	null
		 */
		public function __construct($value, $level='L')
		{
			if (!in_array($level, array('L', 'M', 'Q', 'H')))
				$this->ERROR('ECC non reconnu : L, M, Q, H');
			
			$this->length = strlen($value);
			if (!$this->length)
				$this->ERROR('pas de data...');

			$this->level = $level;
			$this->value = &$value;
			
			$this->data_bit = array();
			$this->data_val = array();
			$this->data_cur = 0;
			$this->data_bits= 0;
			
			$this->encode();
			$this->loadECC();
			$this->makeECC();
			$this->makeMatrix();
		}
			
		/**
		 * permet de recuperer la taille du QRcode (le nombre de case de c�t�)
		 *
		 * @return	int	size of qrcode
		 */
		public function getQrSize()
		{
			if ($this->disable_border)
				return $this->qr_size-8;	
			else
				return $this->qr_size;	
		}
		
		public function disableBorder()
		{
			$this->disable_border = true;
		}
		
		/**
		 * permet d'afficher le QRcode dans un pdf via FPDF
		 *
		 * @param	FPDF	objet fpdf
		 * @param	float	position X
		 * @param	float	position Y
		 * @param	float	taille du qrcode
		 * @param	array	couleur du background (R,V,B)
		 * @param	array	couleur des cases et du border (R,V,B)
		 * @return	boolean true;
		 */
		public function displayFPDF(&$fpdf, $x, $y, $w, $background=array(255,255,255), $color=array(0,0,0))
		{
			$size = $w;
			$s = $size/$this->getQrSize();

			$fpdf->SetDrawColor($color[0], $color[1], $color[2]);
			$fpdf->SetFillColor($background[0], $background[1], $background[2]);
			
			// rectangle de fond
			if ($this->disable_border)
			{
				$s_min = 4;
				$s_max = $this->qr_size-4;
				$fpdf->Rect($x, $y, $size, $size, 'F');
			}
			else
			{
				$s_min = 0;
				$s_max = $this->qr_size;
				$fpdf->Rect($x, $y, $size, $size, 'FD');
			}
			
			$fpdf->SetFillColor($color[0], $color[1], $color[2]);
			for($j=$s_min; $j<$s_max; $j++)
				for($i=$s_min; $i<$s_max; $i++)
					if ($this->final[$i + $j*$this->qr_size+1])
						$fpdf->Rect($x+($i-$s_min)*$s, $y+($j-$s_min)*$s, $s, $s, 'F');
			
			return true;
		}
		
		/**
		 * permet d'afficher le QRcode au format HTML, � utiliser avec un style CSS
		 *
		 * @return	boolean true;
		 */
		public function displayHTML()
		{
			if ($this->disable_border)
			{
				$s_min = 4;
				$s_max = $this->qr_size-4;
			}
			else
			{
				$s_min = 0;
				$s_max = $this->qr_size;
			}
			echo '<table class="qr" cellpadding="0" cellspacing="0">'."\n";
			for($y=$s_min; $y<$s_max; $y++)
			{
				echo '<tr>';
				for($x=$s_min; $x<$s_max; $x++)
				{
					echo '<td class="'.($this->final[$x + $y*$this->qr_size+1] ? 'on' : 'off').'"></td>';	
				}
				echo '</tr>'."\n";
			}
			echo '</table>';
			
			return true;
		}
		
		/*
		 * permet d'obtenir une image PNG
		 *
		 * @param	float	taille du qrcode
		 * @param	array	couleur du background (R,V,B)
		 * @param	array	couleur des cases et du border (R,V,B)
		 * @param	string	nom du fichier de sortie. si null : sortie directe
		 * @param	integer	qualit� de 0 (aucune compression) a 9
		 * @return	boolean	true;
		 */
		public function displayPNG($w=100, $background=array(255,255,255), $color=array(0,0,0), $filename = null, $quality = 0)
		{
			if ($this->disable_border)
			{
				$s_min = 4;
				$s_max = $this->qr_size-4;
			}
			else
			{
				$s_min = 0;
				$s_max = $this->qr_size;
			}
			$size = $w;
			$s = $size/($s_max-$s_min);
			 
			// rectangle de fond
			$im = imagecreatetruecolor($size,$size);
			$c_case = imagecolorallocate($im,$color[0],$color[1],$color[2]);
			$c_back = imagecolorallocate($im,$background[0],$background[1],$background[2]);
			imagefilledrectangle($im,0,0,$size,$size,$c_back);
		 
			for($j=$s_min; $j<$s_max; $j++)
				for($i=$s_min; $i<$s_max; $i++)
					if ($this->final[$i + $j*$this->qr_size+1])
						imagefilledrectangle($im,($i-$s_min)*$s,($j-$s_min)*$s,($i-$s_min+1)*$s-1,($j-$s_min+1)*$s-1,$c_case);
		 
			if ($filename)
			{
				imagepng($im, $filename, $quality);
			}
			else
			{
				header("Content-type: image/png");
				imagepng($im);
			}
			imagedestroy($im);
			return true;
		}
		
		private function ERROR($msg)
		{
			echo 'ERROR : '.$msg;
			exit;	
		}
		
		private function addData($val, $bit, $next = true)
		{
			$this->data_val[$this->data_cur] = $val;
			$this->data_bit[$this->data_cur] = $bit;
			if ($next)
			{
				$this->data_cur++;
				return $this->data_cur-1;
			}
			else
			{
				return $this->data_cur;
			}
		}
		
		private function encode()
		{
			// conversion des datas
			if (preg_match('/[^0-9]/',$this->value))
			{
				if (preg_match('/[^0-9A-Z \$\*\%\+\-\.\/\:]/',$this->value))
				{
					// type : bin
					$this->type = 'bin';
					$this->addData(4, 4);
					
					// taille. il faut garder l'indice, car besoin de correction
					$this->data_num = $this->addData($this->length, 8); /* #version 1-9 */
					$data_num_correction=array(0,0,0,0,0,0,0,0,0,0,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8,8);
					
					// datas
					for ($i=0; $i<$this->length; $i++)
						$this->addData(ord(substr($this->value, $i, 1)), 8);
				}
				else
				{
					// type : alphanum	
					$this->type = 'alphanum';
					$this->addData(2, 4);
					
					// taille. il faut garder l'indice, car besoin de correction
					$this->data_num = $this->addData($this->length, 9); /* #version 1-9 */
					$data_num_correction=array(0,0,0,0,0,0,0,0,0,0,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,4,4,4,4,4,4,4,4,4,4,4,4,4,4);
					
					// datas
					$an_hash=array(
						'0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,
						'A'=>10,'B'=>11,'C'=>12,'D'=>13,'E'=>14,'F'=>15,'G'=>16,'H'=>17,'I'=>18,'J'=>19,'K'=>20,'L'=>21,'M'=>22,
						'N'=>23,'O'=>24,'P'=>25,'Q'=>26,'R'=>27,'S'=>28,'T'=>29,'U'=>30,'V'=>31,'W'=>32,'X'=>33,'Y'=>34,'Z'=>35,
						' '=>36,'$'=>37,'%'=>38,'*'=>39,'+'=>40,'-'=>41,'.'=>42,'/'=>43,':'=>44);
					
					for ($i=0; $i<$this->length; $i++)
					{
						if (($i %2)==0)
							$this->addData($an_hash[substr($this->value,$i,1)], 6, false);
						else
							$this->addData($this->data_val[$this->data_cur]*45+$an_hash[substr($this->value,$i,1)], 11, true);
					}
					unset($an_hash);
					
					if (isset($this->data_bit[$this->data_cur]))
						$this->data_cur++;
				}
			}
			else
			{
				// type : num	
				$this->type = 'num';
				$this->addData(1, 4);
				
				//taille. il faut garder l'indice, car besoin de correction
				$this->data_num = $this->addData($this->length, 10); /* #version 1-9 */
				$data_num_correction=array(0,0,0,0,0,0,0,0,0,0,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,4,4,4,4,4,4,4,4,4,4,4,4,4,4);
				
				// datas
				for ($i=0; $i<$this->length; $i++)
				{
					if (($i % 3)==0)
						$this->addData(substr($this->value,$i,1), 4, false);
					else if (($i % 3)==1)
						$this->addData($this->data_val[$this->data_cur]*10+substr($this->value,$i,1), 7, false);
					else
						$this->addData($this->data_val[$this->data_cur]*10+substr($this->value,$i,1), 10);
				}
				
				if (isset($this->data_bit[$this->data_cur]))
					$this->data_cur++;
							
					
			}
			
			// calcul du nombre de bits
			$this->data_bits=0;
			foreach($this->data_bit as $bit)
				$this->data_bits+= $bit;
				
			// code ECC
			$ec_hash = array('L'=>1, 'M'=>0, 'Q'=>3, 'H'=>2);
			$this->ec = $ec_hash[$this->level];
			
			// tableau de taille limite de bits
			$max_bits = array(
			0,128,224,352,512,688,864,992,1232,1456,1728,2032,2320,2672,2920,3320,3624,4056,4504,5016,5352,
			5712,6256,6880,7312,8000,8496,9024,9544,10136,10984,11640,12328,13048,13800,14496,15312,15936,16816,17728,18672,
			
			152,272,440,640,864,1088,1248,1552,1856,2192,2592,2960,3424,3688,4184,4712,5176,5768,6360,6888,
			7456,8048,8752,9392,10208,10960,11744,12248,13048,13880,14744,15640,16568,17528,18448,19472,20528,21616,22496,23648,
			
			72,128,208,288,368,480,528,688,800,976,1120,1264,1440,1576,1784,2024,2264,2504,2728,3080,
			3248,3536,3712,4112,4304,4768,5024,5288,5608,5960,6344,6760,7208,7688,7888,8432,8768,9136,9776,10208,
			
			104,176,272,384,496,608,704,880,1056,1232,1440,1648,1952,2088,2360,2600,2936,3176,3560,3880,
			4096,4544,4912,5312,5744,6032,6464,6968,7288,7880,8264,8920,9368,9848,10288,10832,11408,12016,12656,13328
			);
			
			// determination automatique de la version necessaire
			$this->version=1; 
			$i=1+40*$this->ec;
			$j=$i+39;
			while ($i<=$j)
			{
				if ($max_bits[$i]>=$this->data_bits+$data_num_correction[$this->version])
				{
					$this->max_data_bit=$max_bits[$i];
					break;
				}
				$i++;
				$this->version++;
			}

			// verification max version
			if ($this->version>$this->version_mx)
				$this->ERROR('too large version.');
				
			// correctif sur le nombre de bits du strlen de la valeur
			$this->data_bits+=$data_num_correction[$this->version];
			$this->data_bit[$this->data_num]+=$data_num_correction[$this->version];
			$this->max_data_word = ($this->max_data_bit/8);
			
			// nombre de mots maximal
			$max_words_array=array(0,26,44,70,100,134,172,196,242,292,346,404,466,532,581,655,733,815,901,991,1085,1156,
							1258,1364,1474,1588,1706,1828,1921,2051,2185,2323,2465,2611,2761,2876,3034,3196,3362,3532,3706);
			$this->max_word = $max_words_array[$this->version];
			$this->size		= 17 + 4*$this->version;

			// nettoyages divers
			unset($max_bits);
			unset($data_num_correction);
			unset($max_words_array);
			unset($ec_hash);
			
			// terminator
			if ($this->data_bits<=$this->max_data_bit-4)
				$this->addData(0, 4);
			elseif ($this->data_bits<$this->max_data_bit)
				$this->addData(0, $this->max_data_bit-$this->data_bits);
			elseif ($this->data_bits>$this->max_data_bit)
				$this->ERROR('Overflow error');
				
			// construction des mots de 8 bit
			$this->data_word = array();
			$this->data_word[0] = 0;
			$nb_word = 0;			

			$remaining_bit=8;
			for($i=0; $i<$this->data_cur; $i++)
			{
				$buffer_val=$this->data_val[$i];
				$buffer_bit=$this->data_bit[$i];

				$flag = true;
				while ($flag)
				{
					if ($remaining_bit>$buffer_bit)
					{
						$this->data_word[$nb_word]=((@$this->data_word[$nb_word]<<$buffer_bit) | $buffer_val);
						$remaining_bit-=$buffer_bit;
						$flag=false;
					}
					else
					{
						$buffer_bit-=$remaining_bit;
						$this->data_word[$nb_word]=((@$this->data_word[$nb_word] << $remaining_bit) | ($buffer_val >> $buffer_bit));
						$nb_word++;
						
						if ($buffer_bit==0)
							$flag=false;
						else
							$buffer_val= ($buffer_val & ((1 << $buffer_bit)-1) );

						if ($nb_word<$this->max_data_word-1)
							$this->data_word[$nb_word]=0;
						$remaining_bit=8;
					}
				}
			}
			
			// completion du dernier mot si incomplet
			if ($remaining_bit<8)
				$this->data_word[$nb_word]=$this->data_word[$nb_word] << $remaining_bit;
			else
				$nb_word--;

			// remplissage du reste
			if ($nb_word<$this->max_data_word-1)
			{
				$flag=true;
				while ($nb_word<$this->max_data_word-1)
				{
					$nb_word++;
					if ($flag)
						$this->data_word[$nb_word]=236;
					else
						$this->data_word[$nb_word]=17;
					$flag=!$flag;
				}
			}
		}
		
		private function loadECC()
		{
			$matrix_remain_bit=array(0,0,7,7,7,7,7,0,0,0,0,0,0,0,3,3,3,3,3,3,3,4,4,4,4,4,4,4,3,3,3,3,3,3,3,0,0,0,0,0,0);
			$this->matrix_remain = $matrix_remain_bit[$this->version];
			unset($matrix_remain_bit);
			
			// lecture du fichier : data file of geometry & mask for version V ,ecc level N			
			$this->byte_num = $this->matrix_remain+ 8*$this->max_word;
			$filename = dirname(__FILE__)."/data/qrv".$this->version."_".$this->ec.".dat";
			$fp1 = fopen ($filename, "rb");
				$this->matrix_x_array			= unpack("C*", fread($fp1,$this->byte_num));
				$this->matrix_y_array			= unpack("C*", fread($fp1,$this->byte_num));
				$this->mask_array				= unpack("C*", fread($fp1,$this->byte_num));
				$this->format_information_x2	= unpack("C*", fread($fp1,15));
				$this->format_information_y2	= unpack("C*", fread($fp1,15));
				$this->rs_ecc_codewords			= ord(fread($fp1,1));
				$this->rs_block_order			= unpack("C*", fread($fp1,128));
			fclose($fp1);
			$this->format_information_x1 = array(0,1,2,3,4,5,7,8,8,8,8,8,8,8,8);
			$this->format_information_y1 = array(8,8,8,8,8,8,8,8,7,5,4,3,2,1,0);

		}
		
		private function makeECC()
		{
			// lecture du fichier : data file of caluclatin tables for RS encoding
			$rs_cal_table_array = array();
			$filename = dirname(__FILE__)."/data/rsc".$this->rs_ecc_codewords.".dat";
			$fp0 = fopen ($filename, "rb");
			for($i=0; $i<256; $i++)
				$rs_cal_table_array[$i]=fread ($fp0,$this->rs_ecc_codewords);
			fclose ($fp0);	

			$max_data_codewords = count($this->data_word);

			// preparation
			$j=0;
			$rs_block_number=0;
			$rs_temp[0]="";
			for($i=0; $i<$max_data_codewords; $i++)
			{
				$rs_temp[$rs_block_number].=chr($this->data_word[$i]);
				$j++;
				if ($j>=$this->rs_block_order[$rs_block_number+1]-$this->rs_ecc_codewords)
				{
					$j=0;
					$rs_block_number++;
					$rs_temp[$rs_block_number]="";
				}
			}

			// make
			$rs_block_order_num=count($this->rs_block_order);
			
			for($rs_block_number=0; $rs_block_number<$rs_block_order_num; $rs_block_number++)
			{
				$rs_codewords=$this->rs_block_order[$rs_block_number+1];
				$rs_data_codewords=$rs_codewords-$this->rs_ecc_codewords;

				$rstemp=$rs_temp[$rs_block_number].str_repeat(chr(0),$this->rs_ecc_codewords);
				$padding_data=str_repeat(chr(0),$rs_data_codewords);

				$j=$rs_data_codewords;
				while($j>0)
				{
					$first=ord(substr($rstemp,0,1));

					if ($first)
					{
						$left_chr=substr($rstemp,1);
						$cal=$rs_cal_table_array[$first].$padding_data;
						$rstemp=$left_chr ^ $cal;
					}
					else
						$rstemp=substr($rstemp,1);
					$j--;
				}
				
				$this->data_word=array_merge($this->data_word,unpack("C*",$rstemp));
			}
		}
		
		private function makeMatrix()
		{
			// preparation
			$this->matrix = array_fill(0, $this->size, array_fill(0, $this->size, 0));
			
			// mettre les words
			for($i=0; $i<$this->max_word; $i++)
			{
				$word = $this->data_word[$i];
				for($j=8; $j>0; $j--)
				{
					$bit_pos = ($i<<3) + $j;
					$this->matrix[ $this->matrix_x_array[$bit_pos] ][ $this->matrix_y_array[$bit_pos] ] = ((255*($word & 1)) ^ $this->mask_array[$bit_pos] ); 
					$word = $word >> 1;
				}
			}
			
			for($k=$this->matrix_remain; $k>0; $k--)
			{
				$bit_pos = $k + ( $this->max_word <<3);
				$this->matrix[ $this->matrix_x_array[$bit_pos] ][ $this->matrix_y_array[$bit_pos] ] = ( 255 ^ $this->mask_array[$bit_pos] );
			}
			
			// mask select
			$min_demerit_score=0;
			$hor_master="";
			$ver_master="";
			$k=0;
			while($k<$this->size)
			{
				$l=0;
				while($l<$this->size)
				{
					$hor_master=$hor_master.chr($this->matrix[$l][$k]);
					$ver_master=$ver_master.chr($this->matrix[$k][$l]);
					$l++;
				}
				$k++;
			}
			
			$i=0;
			$all_matrix=$this->size * $this->size;
			 
			while ($i<8)
			{
				$demerit_n1=0;
				$ptn_temp=array();
				$bit= 1<< $i;
				$bit_r=(~$bit)&255;
				$bit_mask=str_repeat(chr($bit),$all_matrix);
				$hor = $hor_master & $bit_mask;
				$ver = $ver_master & $bit_mask;

				$ver_shift1=$ver.str_repeat(chr(170),$this->size);
				$ver_shift2=str_repeat(chr(170),$this->size).$ver;
				$ver_shift1_0=$ver.str_repeat(chr(0),$this->size);
				$ver_shift2_0=str_repeat(chr(0),$this->size).$ver;
				$ver_or=chunk_split(~($ver_shift1 | $ver_shift2),$this->size,chr(170));
				$ver_and=chunk_split(~($ver_shift1_0 & $ver_shift2_0),$this->size,chr(170));

				$hor=chunk_split(~$hor,$this->size,chr(170));
				$ver=chunk_split(~$ver,$this->size,chr(170));
				$hor=$hor.chr(170).$ver;

				$n1_search="/".str_repeat(chr(255),5)."+|".str_repeat(chr($bit_r),5)."+/";
				$n3_search=chr($bit_r).chr(255).chr($bit_r).chr($bit_r).chr($bit_r).chr(255).chr($bit_r);
	
				$demerit_n3=substr_count($hor,$n3_search)*40;
				$demerit_n4=floor(abs(( (100* (substr_count($ver,chr($bit_r))/($this->byte_num)) )-50)/5))*10;

				$n2_search1="/".chr($bit_r).chr($bit_r)."+/";
				$n2_search2="/".chr(255).chr(255)."+/";
				$demerit_n2=0;
				preg_match_all($n2_search1,$ver_and,$ptn_temp);
				foreach($ptn_temp[0] as $str_temp)
				{
					$demerit_n2+=(strlen($str_temp)-1);
				}
				$ptn_temp=array();
				preg_match_all($n2_search2,$ver_or,$ptn_temp);
				foreach($ptn_temp[0] as $str_temp)
				{
					$demerit_n2+=(strlen($str_temp)-1);
				}
				$demerit_n2*=3;
				
				$ptn_temp=array();
				
				preg_match_all($n1_search,$hor,$ptn_temp);
				foreach($ptn_temp[0] as $str_temp)
				{
					$demerit_n1+=(strlen($str_temp)-2);
				}	
				$demerit_score=$demerit_n1+$demerit_n2+$demerit_n3+$demerit_n4;
	
				if ($demerit_score<=$min_demerit_score || $i==0)
				{
					$mask_number=$i;
					$min_demerit_score=$demerit_score;
				}
	
				$i++;
			}

			$mask_content=1 << $mask_number;
			
			$format_information_value=(($this->ec << 3) | $mask_number);
			$format_information_array=array("101010000010010","101000100100101",
			"101111001111100","101101101001011","100010111111001","100000011001110",
			"100111110010111","100101010100000","111011111000100","111001011110011",
			"111110110101010","111100010011101","110011000101111","110001100011000",
			"110110001000001","110100101110110","001011010001001","001001110111110",
			"001110011100111","001100111010000","000011101100010","000001001010101",
			"000110100001100","000100000111011","011010101011111","011000001101000",
			"011111100110001","011101000000110","010010010110100","010000110000011",
			"010111011011010","010101111101101");

			for($i=0; $i<15; $i++)
			{
				$content=substr($format_information_array[$format_information_value],$i,1);
				
				$this->matrix[$this->format_information_x1[$i]][$this->format_information_y1[$i]]=$content * 255;
				$this->matrix[$this->format_information_x2[$i+1]][$this->format_information_y2[$i+1]]=$content * 255;
			}
		
			$this->final = unpack("C*", file_get_contents(dirname(__FILE__).'/data/modele'.$this->version.'.dat'));
			$this->qr_size = $this->size+8;
			
			for($x=0; $x<$this->size; $x++)
			{
				for($y=0; $y<$this->size; $y++)
				{
					if ($this->matrix[$x][$y] & $mask_content)
						$this->final[($x+4) + ($y+4)*$this->qr_size+1] = true; 
				}
			}
		}
	}

	class FpdfBarcode extends Fpdf
	 {

		var $T128;                                             // tableau des codes 128
		var $ABCset="";                                        // jeu des caractères éligibles au C128
		var $Aset="";                                          // Set A du jeu des caractères éligibles
		var $Bset="";                                          // Set B du jeu des caractères éligibles
		var $Cset="";                                          // Set C du jeu des caractères éligibles
		var $SetFrom;                                          // Convertisseur source des jeux vers le tableau
		var $SetTo;                                            // Convertisseur destination des jeux vers le tableau
		var $JStart = array("A"=>103, "B"=>104, "C"=>105);     // Caractères de sélection de jeu au début du C128
		var $JSwap = array("A"=>101, "B"=>100, "C"=>99);       // Caractères de changement de jeu
		
		//____________________________ Extension du constructeur _______________________
		function __construct($orientation='P', $unit='mm', $format='A4') {
		
			parent::__construct($orientation,$unit,$format);
		
			$this->T128[] = array(2, 1, 2, 2, 2, 2);           //0 : [ ]               // composition des caractères
			$this->T128[] = array(2, 2, 2, 1, 2, 2);           //1 : [!]
			$this->T128[] = array(2, 2, 2, 2, 2, 1);           //2 : ["]
			$this->T128[] = array(1, 2, 1, 2, 2, 3);           //3 : [#]
			$this->T128[] = array(1, 2, 1, 3, 2, 2);           //4 : [$]
			$this->T128[] = array(1, 3, 1, 2, 2, 2);           //5 : [%]
			$this->T128[] = array(1, 2, 2, 2, 1, 3);           //6 : [&]
			$this->T128[] = array(1, 2, 2, 3, 1, 2);           //7 : [']
			$this->T128[] = array(1, 3, 2, 2, 1, 2);           //8 : [(]
			$this->T128[] = array(2, 2, 1, 2, 1, 3);           //9 : [)]
			$this->T128[] = array(2, 2, 1, 3, 1, 2);           //10 : [*]
			$this->T128[] = array(2, 3, 1, 2, 1, 2);           //11 : [+]
			$this->T128[] = array(1, 1, 2, 2, 3, 2);           //12 : [,]
			$this->T128[] = array(1, 2, 2, 1, 3, 2);           //13 : [-]
			$this->T128[] = array(1, 2, 2, 2, 3, 1);           //14 : [.]
			$this->T128[] = array(1, 1, 3, 2, 2, 2);           //15 : [/]
			$this->T128[] = array(1, 2, 3, 1, 2, 2);           //16 : [0]
			$this->T128[] = array(1, 2, 3, 2, 2, 1);           //17 : [1]
			$this->T128[] = array(2, 2, 3, 2, 1, 1);           //18 : [2]
			$this->T128[] = array(2, 2, 1, 1, 3, 2);           //19 : [3]
			$this->T128[] = array(2, 2, 1, 2, 3, 1);           //20 : [4]
			$this->T128[] = array(2, 1, 3, 2, 1, 2);           //21 : [5]
			$this->T128[] = array(2, 2, 3, 1, 1, 2);           //22 : [6]
			$this->T128[] = array(3, 1, 2, 1, 3, 1);           //23 : [7]
			$this->T128[] = array(3, 1, 1, 2, 2, 2);           //24 : [8]
			$this->T128[] = array(3, 2, 1, 1, 2, 2);           //25 : [9]
			$this->T128[] = array(3, 2, 1, 2, 2, 1);           //26 : [:]
			$this->T128[] = array(3, 1, 2, 2, 1, 2);           //27 : [;]
			$this->T128[] = array(3, 2, 2, 1, 1, 2);           //28 : [<]
			$this->T128[] = array(3, 2, 2, 2, 1, 1);           //29 : [=]
			$this->T128[] = array(2, 1, 2, 1, 2, 3);           //30 : [>]
			$this->T128[] = array(2, 1, 2, 3, 2, 1);           //31 : [?]
			$this->T128[] = array(2, 3, 2, 1, 2, 1);           //32 : [@]
			$this->T128[] = array(1, 1, 1, 3, 2, 3);           //33 : [A]
			$this->T128[] = array(1, 3, 1, 1, 2, 3);           //34 : [B]
			$this->T128[] = array(1, 3, 1, 3, 2, 1);           //35 : [C]
			$this->T128[] = array(1, 1, 2, 3, 1, 3);           //36 : [D]
			$this->T128[] = array(1, 3, 2, 1, 1, 3);           //37 : [E]
			$this->T128[] = array(1, 3, 2, 3, 1, 1);           //38 : [F]
			$this->T128[] = array(2, 1, 1, 3, 1, 3);           //39 : [G]
			$this->T128[] = array(2, 3, 1, 1, 1, 3);           //40 : [H]
			$this->T128[] = array(2, 3, 1, 3, 1, 1);           //41 : [I]
			$this->T128[] = array(1, 1, 2, 1, 3, 3);           //42 : [J]
			$this->T128[] = array(1, 1, 2, 3, 3, 1);           //43 : [K]
			$this->T128[] = array(1, 3, 2, 1, 3, 1);           //44 : [L]
			$this->T128[] = array(1, 1, 3, 1, 2, 3);           //45 : [M]
			$this->T128[] = array(1, 1, 3, 3, 2, 1);           //46 : [N]
			$this->T128[] = array(1, 3, 3, 1, 2, 1);           //47 : [O]
			$this->T128[] = array(3, 1, 3, 1, 2, 1);           //48 : [P]
			$this->T128[] = array(2, 1, 1, 3, 3, 1);           //49 : [Q]
			$this->T128[] = array(2, 3, 1, 1, 3, 1);           //50 : [R]
			$this->T128[] = array(2, 1, 3, 1, 1, 3);           //51 : [S]
			$this->T128[] = array(2, 1, 3, 3, 1, 1);           //52 : [T]
			$this->T128[] = array(2, 1, 3, 1, 3, 1);           //53 : [U]
			$this->T128[] = array(3, 1, 1, 1, 2, 3);           //54 : [V]
			$this->T128[] = array(3, 1, 1, 3, 2, 1);           //55 : [W]
			$this->T128[] = array(3, 3, 1, 1, 2, 1);           //56 : [X]
			$this->T128[] = array(3, 1, 2, 1, 1, 3);           //57 : [Y]
			$this->T128[] = array(3, 1, 2, 3, 1, 1);           //58 : [Z]
			$this->T128[] = array(3, 3, 2, 1, 1, 1);           //59 : [[]
			$this->T128[] = array(3, 1, 4, 1, 1, 1);           //60 : [\]
			$this->T128[] = array(2, 2, 1, 4, 1, 1);           //61 : []]
			$this->T128[] = array(4, 3, 1, 1, 1, 1);           //62 : [^]
			$this->T128[] = array(1, 1, 1, 2, 2, 4);           //63 : [_]
			$this->T128[] = array(1, 1, 1, 4, 2, 2);           //64 : [`]
			$this->T128[] = array(1, 2, 1, 1, 2, 4);           //65 : [a]
			$this->T128[] = array(1, 2, 1, 4, 2, 1);           //66 : [b]
			$this->T128[] = array(1, 4, 1, 1, 2, 2);           //67 : [c]
			$this->T128[] = array(1, 4, 1, 2, 2, 1);           //68 : [d]
			$this->T128[] = array(1, 1, 2, 2, 1, 4);           //69 : [e]
			$this->T128[] = array(1, 1, 2, 4, 1, 2);           //70 : [f]
			$this->T128[] = array(1, 2, 2, 1, 1, 4);           //71 : [g]
			$this->T128[] = array(1, 2, 2, 4, 1, 1);           //72 : [h]
			$this->T128[] = array(1, 4, 2, 1, 1, 2);           //73 : [i]
			$this->T128[] = array(1, 4, 2, 2, 1, 1);           //74 : [j]
			$this->T128[] = array(2, 4, 1, 2, 1, 1);           //75 : [k]
			$this->T128[] = array(2, 2, 1, 1, 1, 4);           //76 : [l]
			$this->T128[] = array(4, 1, 3, 1, 1, 1);           //77 : [m]
			$this->T128[] = array(2, 4, 1, 1, 1, 2);           //78 : [n]
			$this->T128[] = array(1, 3, 4, 1, 1, 1);           //79 : [o]
			$this->T128[] = array(1, 1, 1, 2, 4, 2);           //80 : [p]
			$this->T128[] = array(1, 2, 1, 1, 4, 2);           //81 : [q]
			$this->T128[] = array(1, 2, 1, 2, 4, 1);           //82 : [r]
			$this->T128[] = array(1, 1, 4, 2, 1, 2);           //83 : [s]
			$this->T128[] = array(1, 2, 4, 1, 1, 2);           //84 : [t]
			$this->T128[] = array(1, 2, 4, 2, 1, 1);           //85 : [u]
			$this->T128[] = array(4, 1, 1, 2, 1, 2);           //86 : [v]
			$this->T128[] = array(4, 2, 1, 1, 1, 2);           //87 : [w]
			$this->T128[] = array(4, 2, 1, 2, 1, 1);           //88 : [x]
			$this->T128[] = array(2, 1, 2, 1, 4, 1);           //89 : [y]
			$this->T128[] = array(2, 1, 4, 1, 2, 1);           //90 : [z]
			$this->T128[] = array(4, 1, 2, 1, 2, 1);           //91 : [{]
			$this->T128[] = array(1, 1, 1, 1, 4, 3);           //92 : [|]
			$this->T128[] = array(1, 1, 1, 3, 4, 1);           //93 : [}]
			$this->T128[] = array(1, 3, 1, 1, 4, 1);           //94 : [~]
			$this->T128[] = array(1, 1, 4, 1, 1, 3);           //95 : [DEL]
			$this->T128[] = array(1, 1, 4, 3, 1, 1);           //96 : [FNC3]
			$this->T128[] = array(4, 1, 1, 1, 1, 3);           //97 : [FNC2]
			$this->T128[] = array(4, 1, 1, 3, 1, 1);           //98 : [SHIFT]
			$this->T128[] = array(1, 1, 3, 1, 4, 1);           //99 : [Cswap]
			$this->T128[] = array(1, 1, 4, 1, 3, 1);           //100 : [Bswap]
			$this->T128[] = array(3, 1, 1, 1, 4, 1);           //101 : [Aswap]
			$this->T128[] = array(4, 1, 1, 1, 3, 1);           //102 : [FNC1]
			$this->T128[] = array(2, 1, 1, 4, 1, 2);           //103 : [Astart]
			$this->T128[] = array(2, 1, 1, 2, 1, 4);           //104 : [Bstart]
			$this->T128[] = array(2, 1, 1, 2, 3, 2);           //105 : [Cstart]
			$this->T128[] = array(2, 3, 3, 1, 1, 1);           //106 : [STOP]
			$this->T128[] = array(2, 1);                       //107 : [END BAR]
		
			for ($i = 32; $i <= 95; $i++) {                                            // jeux de caractères
				$this->ABCset .= chr($i);
			}
			$this->Aset = $this->ABCset;
			$this->Bset = $this->ABCset;
		
			for ($i = 0; $i <= 31; $i++) {
				$this->ABCset .= chr($i);
				$this->Aset .= chr($i);
			}
			for ($i = 96; $i <= 127; $i++) {
				$this->ABCset .= chr($i);
				$this->Bset .= chr($i);
			}
			for ($i = 200; $i <= 210; $i++) {                                           // controle 128
				$this->ABCset .= chr($i);
				$this->Aset .= chr($i);
				$this->Bset .= chr($i);
			}
			$this->Cset="0123456789".chr(206);
		
			for ($i=0; $i<96; $i++) {                                                   // convertisseurs des jeux A & B
				@$this->SetFrom["A"] .= chr($i);
				@$this->SetFrom["B"] .= chr($i + 32);
				@$this->SetTo["A"] .= chr(($i < 32) ? $i+64 : $i-32);
				@$this->SetTo["B"] .= chr($i);
			}
			for ($i=96; $i<107; $i++) {                                                 // contrôle des jeux A & B
				@$this->SetFrom["A"] .= chr($i + 104);
				@$this->SetFrom["B"] .= chr($i + 104);
				@$this->SetTo["A"] .= chr($i);
				@$this->SetTo["B"] .= chr($i);
			}
		}
		
		//________________ Fonction encodage et dessin du code 128 _____________________
		function Code128($x, $y, $code, $w, $h, $vertical = false) {
			$Aguid = "";                                                                      // Création des guides de choix ABC
			$Bguid = "";
			$Cguid = "";
			for ($i=0; $i < strlen($code); $i++) {
				$needle = substr($code,$i,1);
				$Aguid .= ((strpos($this->Aset,$needle)===false) ? "N" : "O");
				$Bguid .= ((strpos($this->Bset,$needle)===false) ? "N" : "O");
				$Cguid .= ((strpos($this->Cset,$needle)===false) ? "N" : "O");
			}
		
			$SminiC = "OOOO";
			$IminiC = 4;
		
			$crypt = "";
			while ($code > "") {
																							// BOUCLE PRINCIPALE DE CODAGE
				$i = strpos($Cguid,$SminiC);                                                // forçage du jeu C, si possible
				if ($i!==false) {
					$Aguid [$i] = "N";
					$Bguid [$i] = "N";
				}
		
				if (substr($Cguid,0,$IminiC) == $SminiC) {                                  // jeu C
					$crypt .= chr(($crypt > "") ? $this->JSwap["C"] : $this->JStart["C"]);  // début Cstart, sinon Cswap
					$made = strpos($Cguid,"N");                                             // étendu du set C
					if ($made === false) {
						$made = strlen($Cguid);
					}
					if (fmod($made,2)==1) {
						$made--;                                                            // seulement un nombre pair
					}
					for ($i=0; $i < $made; $i += 2) {
						$crypt .= chr(strval(substr($code,$i,2)));                          // conversion 2 par 2
					}
					$jeu = "C";
				} else {
					$madeA = strpos($Aguid,"N");                                            // étendu du set A
					if ($madeA === false) {
						$madeA = strlen($Aguid);
					}
					$madeB = strpos($Bguid,"N");                                            // étendu du set B
					if ($madeB === false) {
						$madeB = strlen($Bguid);
					}
					$made = (($madeA < $madeB) ? $madeB : $madeA );                         // étendu traitée
					$jeu = (($madeA < $madeB) ? "B" : "A" );                                // Jeu en cours
		
					$crypt .= chr(($crypt > "") ? $this->JSwap[$jeu] : $this->JStart[$jeu]); // début start, sinon swap
		
					$crypt .= strtr(substr($code, 0,$made), $this->SetFrom[$jeu], $this->SetTo[$jeu]); // conversion selon jeu
		
				}
				$code = substr($code,$made);                                           // raccourcir légende et guides de la zone traitée
				$Aguid = substr($Aguid,$made);
				$Bguid = substr($Bguid,$made);
				$Cguid = substr($Cguid,$made);
			}                                                                          // FIN BOUCLE PRINCIPALE
		
			$check = ord($crypt[0]);                                                   // calcul de la somme de contrôle
			for ($i=0; $i<strlen($crypt); $i++) {
				$check += (ord($crypt[$i]) * $i);
			}
			$check %= 103;
		
			$crypt .= chr($check) . chr(106) . chr(107);                               // Chaine Cryptée complète
		
			$i = (strlen($crypt) * 11) - 8;                                            // calcul de la largeur du module
			$modul = $w/$i;
		
			for ($i=0; $i<strlen($crypt); $i++) {                                      // BOUCLE D'IMPRESSION
				$c = $this->T128[ord($crypt[$i])];
				if ($vertical) {
					for ($j=0; $j<count($c); $j++) {
						$this->Rect($x,$y,$h,$c[$j]*$modul,"F");
						$y += ($c[$j++]+$c[$j])*$modul;
					}
				}
				else {
					for ($j=0; $j<count($c); $j++) {
						$this->Rect($x,$y,$c[$j]*$modul,$h,"F");
						$x += ($c[$j++]+$c[$j])*$modul;
					}
				}
			}
		}
		
		function QR($code, $x, $y, $size = 20) {
			// QR
			$qrcode = new QRcode($code);
			$qrcode->disableBorder();
			// X pos, Y pos, Size of the QR code
			$qrcode->displayFPDF($this, $x, $y, $size);
		}

		function BasicTable($header, $data)
		{
			// Header
			foreach($header as $col)
				$this->Cell(40,7,$col,1);
			$this->Ln();
			// Data
			foreach($data as $row)
			{
				foreach($row as $col)
					$this->Cell(40,6,$col,1);
				$this->Ln();
			}
		}

		function FancyTable($header, $data) {
			// Column widths
			$w = array(30, 70);
	
			// Header
			$this->SetFont('Arial', 'B', 12);
			for ($i = 0; $i < count($header); $i++) {
				$this->Cell($w[$i], 6, $header[$i], 1, 0, 'C');
			}
			$this->Ln();
	
			// Data
			$this->SetFont('Arial', '', 12);
			foreach ($data as $row) {
				$this->Cell($w[0], 6, $row[0], 1);
				$this->Cell($w[1], 6, $row[1], 1,0,'C');
				
				$this->Ln();
			}
		}

		function EqTable($header, $data) {
			// Column widths
			$w = array(50, 50);
	
			// Header
			$this->SetFont('Arial', 'B', 12);
			for ($i = 0; $i < count($header); $i++) {
				$this->Cell($w[$i], 6, $header[$i], 1, 0, 'C');
			}
			$this->Ln();

			// Header
			$this->SetFont('Arial', '', 12);
			for ($i = 0; $i < count($data); $i++) {
				$this->Cell($w[$i], 6, $data[$i], 1, 0, 'C');
			}
			$this->Ln();
	
			
		}

		function SynchronizedMultiCellRow($cell1Content, $cell2Content) {
			// Calculate the heights of the multicells
			$cell1Height = $this->GetStringHeight(40, $cell1Content);
			$cell2Height = $this->GetStringHeight(60, $cell2Content);
	
			// Determine the maximum height
			$maxHeight = max($cell1Height, $cell2Height);
	
			// Set the font
			$this->SetFont('Arial', '', 12);
	
			// Create the multicells with synchronized height
			$this->MultiCell(40, $maxHeight, $cell1Content, 1);
			$this->SetX($this->GetX() + 40); // Move to the next column
			$this->MultiCell(60, $maxHeight, $cell2Content, 1);
	
			$this->Ln($maxHeight); // Move to the next row
		}

		function StockTable($header, $data) {
			// Column widths
			$w = array(38, 120,25,50,15,32,15, 40);
	
			// Header
			$this->SetFont('Arial', 'B', 12);
			for ($i = 0; $i < count($header); $i++) {
				$this->Cell($w[$i], 6, $header[$i], 1, 0, 'C');
			}
			$this->Ln();
	
			// Data
			$this->SetFont('Arial', '', 12);
			foreach ($data as $row) {
				$this->Cell($w[0], 6, $row[0], 1);
				$this->Cell($w[1], 6, $row[1], 1,0);
				$this->Cell($w[2], 6, $row[2], 1);
				$this->Cell($w[3], 6, $row[3], 1,0,'C');
				$this->Cell($w[4], 6, $row[4], 1,0,'C');
				$this->Cell($w[5], 6, $row[5], 1,0,'C');
				$this->Cell($w[6], 6, $row[6], 1,0,'C');
				$this->Cell($w[7], 6, $row[7], 1,0,'C');
				
				
				$this->Ln();
			}
		}

		function StockoutTable($header, $data) {
			// Column widths
			$w = array(38, 95,30,50,15,32,30,20,25);
	
			// Header
			$this->SetFont('Arial', 'B', 12);
			for ($i = 0; $i < count($header); $i++) {
				$this->Cell($w[$i], 6, $header[$i], 1, 0, 'C');
			}
			$this->Ln();
	
			// Data
			$this->SetFont('Arial', '', 12);
			foreach ($data as $row) {
				$this->Cell($w[0], 6, $row[0], 1);
				$this->Cell($w[1], 6, $row[1], 1,0);
				$this->Cell($w[2], 6, $row[2], 1);
				$this->Cell($w[3], 6, $row[3], 1,0,'C');
				$this->Cell($w[4], 6, $row[4], 1,0,'C');
				$this->Cell($w[5], 6, $row[5], 1,0,'C');
				$this->Cell($w[6], 6, $row[6], 1,0,'C');
				$this->Cell($w[7], 6, $row[7], 1,0,'C');
				$this->Cell($w[8], 6, $row[8], 1,0,'C');
				
				
				$this->Ln();
			}
		}
	}   




