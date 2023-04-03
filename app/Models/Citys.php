<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citys extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameCity'
    ];

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
