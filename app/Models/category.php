<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use App\Models\plant_category;

class category extends Model
{
    use HasFactory;
    protected $primaryKey = 'CategoryID';
    public $timestamps = false;
    public function images()
    {
        return $this->hasMany(Image::class, 'Product_ID');
    }

    public function plantCategories()
    {
        return $this->hasMany(plant_category::class, 'Product_ID');
    }
    public function product()
    {
        return $this->belongsTo(product::class, 'Product_ID');
    }
}