<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    protected $primaryKey = 'LEVEL_ID';
    protected $fillable = [
        'LEVEL_TEXT'
    ];

    public function techer()
    {
        return $this->hasMany(Teacher::class,'LEVEL_ID');
    }

    public function groups()
    {
        return $this->hasMany(Group::class,'LEVEL_ID');
    }

}
