<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Markets extends Model
{
    protected $primaryKey ='MARKET_ID';

    protected $fillable = [
        'MARKET_NAME',
        'DETAILS',
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
