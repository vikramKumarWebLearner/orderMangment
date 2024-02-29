<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'name',
        'qty',
        'amount',
        'total'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}