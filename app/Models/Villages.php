<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Villages extends Model
{
    protected $primaryKey = 'VILLAGE_ID';
    protected $fillable = [
        'NAME',
        'CITY_ID'
    ];

    public function cites(){
        return $this->belongsTo(Cities::class, 'CITY_ID');
    }

    public function address()
    {
        return $this->hasMany(Address::class,'VILLAGE_ID');
    }

}
