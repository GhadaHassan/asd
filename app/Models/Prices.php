<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    protected $primaryKey ='PRICE_ID';

    protected $fillable = [
        'price',
        'price_type'
    ];
}
