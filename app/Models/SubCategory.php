<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Products ;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameSubCategory',
        'category_id',
    ];

    public function products()
    {
        return $this->hasMany(Products::class);
    }

    public function category()
    {
        return $this->belongsTo(Categorys::class);
    }

}
