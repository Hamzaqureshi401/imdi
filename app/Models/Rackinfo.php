<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rackinfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'warehouse',
        'rowtitle',
        'length',
        'format',
        'user',
     ];
}
