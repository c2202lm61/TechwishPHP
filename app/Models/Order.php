<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Delivery;
use App\Models\Payment;
use App\Models\User;
class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'OrderID';
    protected $table = 'orders';


    public $fillable = [
        'Quantity',
        'OrderDate',
        'total',
        'StatusBill',
        'StatusDilevery',
        'UserID',
        'DeliveryID',
        'PaymentID'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class, 'DeliveryID');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'PaymentID');
    }
}
