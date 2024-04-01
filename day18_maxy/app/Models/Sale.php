<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'day18_sale';

    protected $fillable = [
        'item',
        'quantity',
        'price_item',
        'price_total',
        'date',
    ];
}
