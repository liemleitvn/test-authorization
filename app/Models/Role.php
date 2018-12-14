<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['name', 'slug'];

    protected $hidden = [];

    public function permissions() {
        return $this->belongsToMany(Permission::class,'roles_permissions');
    }
}
