<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use App\Models\plant_category;

class product extends Model
{
    use HasFactory;
    protected $primaryKey = 'Product_ID';
    public $timestamps = false;

    // Define relationships here, if any
    public function images()
    {
        return $this->hasMany(image::class, 'Product_ID');
    }

    public function plantCategories()
    {
        return $this->hasMany(plant_category::class, 'Product_ID');
    }
}