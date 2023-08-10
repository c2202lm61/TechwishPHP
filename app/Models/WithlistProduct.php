<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithlistProduct extends Model
{
    use HasFactory;
    protected $primaryKey = 'WishID';
    public $table = 'wishlist_products';


    public $fillable = [
        'name',
        'email',
        'phone',
        'RoleID',
        'password',

    ];
}
