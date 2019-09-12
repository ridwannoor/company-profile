<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name','display_name'];

    public function users()
    {
        return $this->belongsToMany('App\Models\User','user_role','user_id','role_id')->withTimestamps();
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission','permission_role','permission_id','role_id')->withTimestamps();
    }
}
