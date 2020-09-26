<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $primaryKey = 'SUBJECT_ID';
    protected $fillable = [
        'SUBJECT_TEXT'
    ];

    public function techer()
    {
        return $this->hasMany(Teacher::class,'SUBJECT_ID');
    }

}
