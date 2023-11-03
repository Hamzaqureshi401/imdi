<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mastercase extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'upc',
        'user',
        'length',
        'height',
        'width',
        'weight',
        'hi',
        'ti',
     ];

     public function palletlabel(){
        return $this->hasMany(Palletlabel::class, 'mc_id');
     }
     public function binlocation(){
        return $this->hasMany(Binlocation::class, 'mcid');
     }
}
