<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $primaryKey ='TECHER_ID';

    protected $fillable = [
        'TEACHER_NAME',
        'PORTFOLIO',
        'LEVEL_ID',
        'SUBJECT_ID',
        'SERVICE_ID'
    ];

    public function levels(){
        return $this->belongsTo(Levels::class, 'LEVEL_ID');
    }
    public function subjects(){
        return $this->belongsTo(Subject::class, 'SUBJECT_ID');
    }
    public function services(){
        return $this->belongsTo(Services::class, 'SERVICE_ID');
    }

}
