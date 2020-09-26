<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicDays extends Model
{
    protected $primaryKey ='DAY_ID';

    protected $fillable = [
        'OPEN_TIME',
        'END_TIME',
        'CLINICS_ID'
    ];

    public function clinics(){
        return $this->belongsTo(Clinics::class, 'CLINICS_ID');
    }


}
