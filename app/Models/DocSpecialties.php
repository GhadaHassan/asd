<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocSpecialties extends Model
{
    protected $primaryKey ='SPECIALT_ID';

    protected $fillable = [
        'TEXT'
    ];

    public function doctor()
    {
        return $this->hasMany(Doctors::class,'SPECIALT_ID');
    }
}
