<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use App\Models\category;

class plant_category extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'PlantCategoryID';
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(product::class, 'Product_ID');
    }

    public function category()
    {
        return $this->belongsTo(category::class, 'CategoryID');
    }
}