<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $primaryKey = 'ADDRESS_ID';
    protected $fillable = [
        'GOV_ID',
        'CITY_ID',
        'VILLAGE_ID'
    ];

    public function govs(){
        return $this->belongsTo(Governorates::class, 'GOV_ID');
    }

    public function cites(){
        return $this->belongsTo(Cities::class, 'CITY_ID');
    }

    public function villages(){
        return $this->belongsTo(Villages::class, 'VILLAGE_ID');
    }

    public function users()
    {
        return $this->hasMany(User::class,'ADDRESS_ID');
    }


}
