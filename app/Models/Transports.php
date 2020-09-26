<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transports extends Model
{
    protected $primaryKey ='TRANSPORT_ID';

    protected $fillable = [
        'NAME',
        'MACHINE_NUMBER',
        'PORTFOLIO',
        'SERVICE_ID'
    ];

    public function services(){
        return $this->belongsTo(Services::class, 'SERVICE_ID');
    }
}
