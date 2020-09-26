<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $primaryKey ='ADS_ID';

    protected $fillable = [
        'NAME',
        'STATUS',
        'INFO',
        'DATETIME'
    ];
}
