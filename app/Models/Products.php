<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

// use App\Models\SubCategorys ;

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
        'subCategory_id',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Categorys::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'subCategory_id');
    }

    public function city()
    {
        return $this->belongsTo(Citys::class);
    }

    public function comment()
    {
        return $this->hasMany(Comments::class, 'product_id', 'id');
    }
}
