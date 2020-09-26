<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $primaryKey = 'MAIN_ID';
    protected $fillable = [
        'NAME',
        'PORTFOLIO',
        'SERVICE_ID'
    ];

    public function services(){
        return $this->belongsTo(Services::class, 'SERVICE_ID');
    }

}
