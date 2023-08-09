<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use App\Models\wishlist;
class wishlist_product extends Model
{
    use HasFactory;

    protected $primaryKey = 'WishlistProductID';
    public $timestamps = false;

    public function wishlist()
    {
        return $this->belongsTo(wishlist::class, 'WishlistID');
    }

    public function product()
    {
        return $this->belongsTo(product::class, 'Product_ID');
    }
}