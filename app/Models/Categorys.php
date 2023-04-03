<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products ;


class Categorys extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameCategory'
    ];

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
