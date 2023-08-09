<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cart;
use App\Models\product;


class product_carts extends Model
{
    use HasFactory;
    protected $primaryKey = 'ProductCartID';
    public $timestamps = false;

    public function cart()
    {
        return $this->belongsTo(cart::class, 'CartID');
    }

    public function product()
    {
        return $this->belongsTo(product::class, 'Product_ID');
    }
}