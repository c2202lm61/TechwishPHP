<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $primaryKey = 'ReviewID';
    protected $table = 'reviews';
    use HasFactory;
    public $fillable = [
        'Rating',
        'Comment',
        'UserID',
        'Product_ID'
    ];
    public function product()
    {
        return $this->belongsTo(product::class, 'Product_ID');
    }
}

   
