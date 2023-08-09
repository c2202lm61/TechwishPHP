<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    use HasFactory;
    protected $primaryKey = 'WishlistID';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}