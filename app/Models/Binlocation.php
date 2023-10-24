<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Binlocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'row_id',
        'name',
        'barcode',
        'status',
        'labelid',
        'mcid',
        'rcid',
        'custom',  
     ];
}
