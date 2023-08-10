<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    protected $primaryKey = 'FeedbackID';
    protected $table = 'feedback';
    use HasFactory;
    public $fillable = [
        'FeedbackContent',
        'UserID'
    ];
}
