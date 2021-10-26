<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetails extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'order_number',
        'order_code',
        'quantity_ordered',
        'price_each',
        'orderline_number'
    ];
}
