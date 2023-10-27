<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnModel extends Model
{
    use HasFactory;
    protected $table = 'returns';
    protected $fillable = [
        'invoice_no',
        'trans_no',
        'label_id',
        'label_no',
        'mc_id',
        'rc_id',
        'bin_id',
        'qty',
        'return_by',
        'return_date',
        'user',
        'return_status',
        'return_qty',
        
     ];
}
