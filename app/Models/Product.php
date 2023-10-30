<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'intro_en', 'intro_ru', 'intro_mn', 'logo', 'slider_image', 'start_year', 'company_size', 'phone', 'email', 'facebook', 'brand_id', 'brandsub_id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function brandsub()
    {   
        return $this->belongsTo(BrandSub::class);
    }
}
