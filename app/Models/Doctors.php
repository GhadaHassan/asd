<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $primaryKey ='DOCTOR_ID';

    protected $fillable = [
        'EXPERIENCE_YEARS',
        'SPECIALT_ID',
        'DEGREES_ID'
    ];

    public function specialt(){
        return $this->belongsTo(DocSpecialties::class, 'SPECIALT_ID');
    }

    public function degree(){
        return $this->belongsTo(DocDegrees::class, 'DEGREES_ID');
    }


}
