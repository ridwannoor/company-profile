<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testi extends Model
{
    protected $table = 'testis';
    protected $fillable = ['name', 'deskripsi', 'image','is_published'];
    protected $guarded = ['id'];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeDrafted($query)
    {
        return $query->where('is_published', false);
    }
    
    public function getPublishedAttribute()
    {
        return ($this->is_published) ? 'Yes' : 'No';
    }
}
