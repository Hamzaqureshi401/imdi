<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cyclecountlocation extends Model
{
    use HasFactory;

    public function binlocation(){

        return $this->hasOne(Binlocation::class,'id','bl_id');
    }
}
