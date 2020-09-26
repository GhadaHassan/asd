<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $primaryKey ='CAR_ID';

    protected $fillable = [
        'NAME',
        'DETAILS',
        'SERVICE_PHONE',
        'USER_ID',
        'SERVICE_ID'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'USER_ID');
    }

    public function services(){
        return $this->belongsTo(Services::class, 'SERVICE_ID');
    }
}
