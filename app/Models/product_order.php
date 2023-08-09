<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use App\Models\order;

class product_order extends Model
{
    use HasFactory;
    protected $primaryKey = 'ProductOrderID';
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(product::class, 'Product_ID');
    }

    public function order()
    {
        return $this->belongsTo(order::class, 'OrderID');
    }
}