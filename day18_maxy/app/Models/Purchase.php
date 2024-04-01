<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'day18_purchase';

    protected $fillable = [
        'item',
        'quantity',
        'cost_item',
        'cost_total',
        'date',
    ];
}
