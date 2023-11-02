<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    public function getSubPermission(){
        return $this->hasMany(SubPermission::class, 'permission_id');
    }
}
