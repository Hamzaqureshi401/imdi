<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cyclecount extends Model
{
    use HasFactory;

    public function cycleCountLocation(){

        return $this->hasMany(Cyclecountlocation::class,'cc_id','id');
    }
}
