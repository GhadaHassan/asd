<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    protected $primaryKey ='RATE_ID';

    protected $fillable = [
        'COMMENT',
        'RATE_VALUE',
        'USER_ID'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'USER_ID');
    }
}
