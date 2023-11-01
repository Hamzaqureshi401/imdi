<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SubPermission extends Model
{
    protected $table = 'sub_permissions';
    
    protected $fillable = [
        'permission_id', 'name',
    ];

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'permission_id');
    }
}
 