<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;


class image extends Model
{
    use HasFactory;
    protected $primaryKey = 'ImageID';
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(product::class, 'Product_ID');
    }
}