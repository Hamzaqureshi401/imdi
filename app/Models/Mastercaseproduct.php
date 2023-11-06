<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mastercaseproduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'pid',
        'mcid',
        'qty',
        
     ];
     public function product(){
        return $this->belongsTo(Product::class, 'pid');
     }
}
