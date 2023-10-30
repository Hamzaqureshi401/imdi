<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rcproduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'rc_id',
        'p_id',
        'fob',
        'retail_price',
        'expiry',
     ];

     public function product(){
        return $this->belongsTo(Product::class, 'p_id');
     }
}
