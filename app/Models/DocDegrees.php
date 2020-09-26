<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocDegrees extends Model
{
    protected $primaryKey ='DEGREES_ID';

    protected $fillable = [
        'TEXT'
    ];

    public function doctor()
    {
        return $this->hasMany(Doctors::class,'DEGREES_ID');
    }
}
