<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected $primaryKey ='REST_ID';

    protected $fillable = [
        'REST_NAME',
        'REST_DETAILS',
        'SERVICE_ID',
        'USER_ID'
    ];

    public function services(){
        return $this->belongsTo(Services::class, 'SERVICE_ID');
    }
    public function users(){
        return $this->belongsTo(User::class, 'USER_ID');
    }
}
