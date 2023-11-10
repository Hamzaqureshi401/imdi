<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    public function warehouse(){ 
        return $this->belongsTo(Warehouse::class , 'p_warehouse');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'p_pid' , 'id');
    }
    public function pbinlocation(){
        return $this->belongsTo(Binlocation::class, 'p_bid');
    }
    public function newwarehouse(){
        return $this->belongsTo(Warehouse::class , 'n_warehouse');
    }
    public function newproduct(){
        return $this->belongsTo(Product::class, 'n_pid');
    }
    public function newbinlocation(){
        return $this->belongsTo(Binlocation::class, 'n_bid');
    }
    public function user(){
        return $this->belongsTo(User::class, 'pick_by');
    }

}
