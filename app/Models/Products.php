<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [

        'title',
        'image',
        'description',
        'prix',
        'city_id',
        'telephpne',
        'category_id',
    ];

    public function categorys()
    {
        return $this->belongsTo(Categorys::class);
    }

    public function citys()
    {
        return $this->belongsTo(Citys::class);
    }

    public function comments()
    {
        return $this->belongsTo(comments::class);
    }
}
