<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class Clinics extends Model
{
    protected $primaryKey ='CLINICS_ID';

    protected $fillable = [
        'PHONE',
        'BOOKING_PRICE',
        'ADDRESS',
        'SERVICE_ID',
        'USER_ID'
    ];

    public function requests()
    {
        return $this->hasMany(Request::class,'CLINIC_ID');
    }

    public function services(){
        return $this->belongsTo(Services::class, 'SERVICE_ID');
    }
    public function users(){
        return $this->belongsTo(User::class, 'USER_ID');
    }
    public function days()
    {
        return $this->hasMany(ClinicDays::class,'CLINICS_ID');
    }

}
