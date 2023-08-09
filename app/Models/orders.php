<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\delivery;
use App\Models\payment;


class orders extends Model
{
    use HasFactory;
    protected $primaryKey = 'OrderID';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function delivery()
    {
        return $this->belongsTo(delivery::class, 'DeliveryID');
    }

    public function payment()
    {
        return $this->belongsTo(payment::class, 'PaymentID');
    }
}