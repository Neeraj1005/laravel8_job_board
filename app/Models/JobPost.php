<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobPost extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillables = ['title', 'descritpion', 'is_active', 'user_id'];

    public function scopeIsActive($query)
    {
        return $query->where('is_active', true);
    }

    public function company()
    {
        return $this->belongsTo( User::class, 'user_id' );
    }
}
