<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }
}
