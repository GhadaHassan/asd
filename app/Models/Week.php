<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $primaryKey ='WEEK_ID';

    protected $fillable = [
        'DAY',
    ];
}
