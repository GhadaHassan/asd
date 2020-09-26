<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $primaryKey ='GROUP_ID';

    protected $fillable = [
        'GROUP_TEXT',
        'LEVEL_ID'
    ];

    public function levels(){
        return $this->belongsTo(Levels::class, 'LEVEL_ID');
    }
}
