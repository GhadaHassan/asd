<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Governorates extends Model
{
    protected $primaryKey = 'GOV_ID';
    protected $fillable = [
        'NAME'
    ];

    public function cites()
    {
        return $this->hasMany(Cities::class,'GOV_ID');
    }

    public function address()
    {
        return $this->hasMany(Address::class,'GOV_ID');
    }
}
