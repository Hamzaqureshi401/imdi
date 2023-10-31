<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnModel extends Model
{
    use HasFactory;
    protected $table = 'returns';
    protected $fillable = [
        'invoice_no',
        'trans_no',
        'label_id',
        'label_no',
        'mc_id',
        'rc_id',
        'bin_id',
        'qty',
        'warehouse_id',
        'return_date',
        'user',
        'item_condition',
        'return_qty',
        
     ];

    public function masterCase(){
        return $this->belongsTo(Mastercase::class,'mc_id','id');
    }
    public function binlocation(){

        return $this->belongsTo(Binlocation::class,'bin_id','id');
    }
     public function warehouse(){
        return $this->belongsTo(Warehouse::class);
    }
}
