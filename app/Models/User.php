<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Blog;
use App\Models\Comment;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'api_token',
        'is_admin',
        'reset_key'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if(empty($user->api_token)) {
                $user->api_token = str_random(50);
            }
        });

        static::deleting(function ($user) {
            $user->blog()->delete();
            $user->comment()->delete();
        });
    }

    public function blog()
    {
        return $this->hasMany('App\Models\Blog');
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function scopeAdmin($query)
    {
        return $query->where('is_admin', true);
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','user_role','user_id','role_id')->withTimestamps();
    }
}
