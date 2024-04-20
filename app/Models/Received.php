<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Received extends Model
{
    use HasFactory;
    protected $fillable = [
        'warehouse',
        'arr_date',
        'order_no',
        'container_no',
        'mcid',
        'ti',
        'hi',
        'mc_quantity',
        'pallet_count',
        'serial_no',
        'user',
        'alloted',
        
     ];

    public function binlocation(){
        return $this->hasMany(Binlocation::class,'rcid','id');
    }
    public function rackInfo(){
        return $this->hasMany(Rackinfo::class , 'warehouse' , 'warehouse');
    }
    public function getWarehouse(){
         return $this->belongsTo(Warehouse::class,'warehouse','id');
    }
}
