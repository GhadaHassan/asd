<?php

namespace App\Models;

use Facade\FlareClient\Http\Client;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $primaryKey ='REQUEST_ID';

    protected $fillable = [
        'USERNAME',
        'req_num',
        'STATUES',
        'req_dateTime_sent',
        'req_dateTime_approved',
        'REJECTING_REASON',
        'CLINIC_ID'
    ];

    public function clinics(){
        return $this->belongsTo(Clinics::class, 'CLINIC_ID');
    }

}
