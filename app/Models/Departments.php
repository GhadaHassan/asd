<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $primaryKey ='DEPARTMENT_ID';

    protected $fillable = [
        'DEPARTMENT_TEXT'
    ];

    public function services()
    {
        return $this->hasMany(Services::class,'DEPARTMENT_ID');
    }

    public function rest()
    {
        return $this->hasMany(Restaurants::class,'DEPARTMENT_ID');
    }

}
