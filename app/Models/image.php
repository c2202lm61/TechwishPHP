<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;


class Image extends Model
{
    use HasFactory;
    protected $primaryKey = 'ImageID';
    protected $table = 'images';
    public $fillable = [
        'ImageLink',
        'Product_ID'
    ];
}
