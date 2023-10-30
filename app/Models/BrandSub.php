<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandSub extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'intro_en', 'intro_ru', 'intro_mn', 'logo', 'slider_image', 'not_brand', 'company_size', 'phone', 'email', 'facebook', 'brand_id','company_id'];

    public function brand()
    {
        
        return $this->belongsTo(Brand::class);
    }

    public function product()
    {
        
        return $this->belongsTo(Product::class);
    }
}
