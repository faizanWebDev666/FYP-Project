<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'orderId');
    }
    

}
