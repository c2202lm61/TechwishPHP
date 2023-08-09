<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use App\Models\User;
class review extends Model
{
    use HasFactory;
    protected $primaryKey = 'ReviewID';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function product()
    {
        return $this->belongsTo(product::class, 'Product_ID');
    }
}