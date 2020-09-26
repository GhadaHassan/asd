<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $primaryKey = 'CITY_ID';
    protected $fillable = [
        'NAME',
        'GOV_ID'
    ];

    // gov -> cite
    // 1 -> m
    public function govs(){
        return $this->belongsTo(Governorates::class, 'GOV_ID');
    }

    public function villages()
    {
        return $this->hasMany(Villages::class,'CITY_ID');
    }

    public function address()
    {
        return $this->hasMany(Address::class,'CITY_ID');
    }

}
