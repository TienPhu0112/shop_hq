<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'admin_permissions', 'permission_id');
    }
}
