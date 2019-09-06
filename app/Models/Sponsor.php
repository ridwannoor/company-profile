<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table = 'sponsors';
    protected $fillable = ['title', 'image'];
    protected $guarded = ['id'];
}
