<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = ['key','table_name'];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','permission_role','permission_id','role_id')->withTimestamps();
    }
}
