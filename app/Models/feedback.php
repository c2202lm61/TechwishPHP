<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class feedback extends Model
{
    use HasFactory;
    protected $primaryKey = 'FeedbackID';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}