<?php
/**
 * Created by PhpStorm.
 * User: liemleitvn
 * Date: 26/11/2018
 * Time: 10:31
 */

namespace App\Models\Traits;

use App\Models\Role;

trait HasPermissionsTrait
{
    public function roles() {
        return $this->belongsToMany(Role::class,'users_roles');

    }

    public function hasRole(...$roles) {
        foreach ($roles as $role) {
            if($this->roles->contains('slug',$role)) {
                return true;
            }
        }
        return false;
    }

    public function hasPermissionThroughRole($permission) {
        foreach ($permission->roles as $role){
            if($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }
}
