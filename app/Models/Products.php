<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorys ;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [

        'title',
        'image',
        'description',
        'prix',
        'city_id',
        'telephone',
        'category_id',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Categorys::class);
    }

    public function city()
    {
        return $this->belongsTo(Citys::class);
    }

    public function comments()
    {
        return $this->belongsTo(comments::class);
    }
}
