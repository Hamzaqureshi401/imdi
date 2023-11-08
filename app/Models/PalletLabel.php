<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PalletLabel extends Model
{
    use HasFactory;
    protected $fillable = [
        'rc_id',
        'palletno',
        'mc_id',  
        'mc_qty',
        'avl_qty',
        'status',
               
     ];
     public function wareHouse(){
         return $this->belongsTo(Warehouse::class,'warehouse','id');
     }
     public function mastercase(){
         return $this->belongsTo(Mastercase::class,'mc_id');
     }
     public function user(){
         return $this->belongsTo(User::class,'checkin_by');
     }

}
