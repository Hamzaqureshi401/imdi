<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickorder extends Model
{
    use HasFactory;
    protected $fillable = [
        'trans_no',
        'label_id',
        'label_no',
        'mc_id',
        'rc_id',
        'bin_id',
        'qty',
        'user',
        'pick_status',
        'pick_by',
        'pick_date',      
     ];
}
