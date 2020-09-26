<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $primaryKey ='IMG_ID';

    protected $fillable = [
        'IMAGE',
        'IMG_TYPE'
    ];
}
