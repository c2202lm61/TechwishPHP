<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD:app/Models/review.php

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
=======
use App\Models\User;
class Wishlist extends Model
{
    use HasFactory;
    protected $primaryKey = 'WishlistID';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
    public function product()
    {
        return $this->belongsTo(product::class, 'Product_ID');
    }
>>>>>>> c8636789764b8f337b3a5967b1ae3285316c332b:app/Models/Wishlist.php
}
