<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['favorite'];

    public function scopeFavorites($query) {
        $query->where('favorite', true);
    }
}
