<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockPlacement extends Model
{
    use HasFactory;
    protected $fillable = [
        'label_id',
        'bin_id',
     ];
}
