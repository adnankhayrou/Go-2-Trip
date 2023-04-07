<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        'Category_id',
        'subCategory_id',
        'user_id',
    ];

    public function sub_category()
    {
        return $this->belongsTo(SubCategorys::class);
    }

    public function city()
    {
        return $this->belongsTo(Citys::class);
    }

    public function comment()
    {
        return $this->belongsTo(comments::class);
    }
}
