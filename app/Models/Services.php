<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Transport\Transport;

class Services extends Model
{
    protected $primaryKey ='SERVICE_ID';

    protected $fillable = [
        'DEPARTMENT_ID',
        'SERVICE_TEXT'
    ];

    public function departments(){
        return $this->belongsTo(Departments::class, 'DEPARTMENT_ID');
    }

    public function maintenance()
    {
        return $this->hasMany(Maintenance::class,'SERVICE_ID');
    }

    public function car()
    {
        return $this->hasMany(Car::class,'SERVICE_ID');
    }

    public function rest()
    {
        return $this->hasMany(Restaurants::class,'SERVICE_ID');
    }

    public function techer()
    {
        return $this->hasMany(Teacher::class,'SERVICE_ID');
    }

    public function markets()
    {
        return $this->hasMany(Markets::class,'SERVICE_ID');
    }

    public function transports()
    {
        return $this->hasMany(Transport::class,'SERVICE_ID');
    }

    public function clothes()
    {
        return $this->hasMany(Clothes::class,'SERVICE_ID');
    }

    public function clinics()
    {
        return $this->hasMany(Clinics::class,'SERVICE_ID');
    }
}
