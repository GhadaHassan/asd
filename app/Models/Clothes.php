<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    protected $primaryKey ='CLOTHES_ID';

    protected $fillable = [
        'NAME',
        'DETAILS',
        'SHOP_PHONE',
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
