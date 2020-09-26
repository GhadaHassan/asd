<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'USER_ID';

    protected $fillable = [
        'NAME',
        'ROLE',
        'PASSWORD',
        'PHONE',
        'IMAGE',
        'ADDRESS_ID'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password){
    $this->attributes['PASSWORD'] = bcrypt($password);
    }
    public function address(){
        return $this->belongsTo(Address::class, 'ADDRESS_ID');
    }

    public function car()
    {
        return $this->hasMany(Car::class,'USER_ID');
    }

    public function rating()
    {
        return $this->hasMany(Ratings::class,'USER_ID');
    }

    public function rest()
    {
        return $this->hasMany(Restaurants::class,'USER_ID');
    }

    public function markets()
    {
        return $this->hasMany(Markets::class,'USER_ID');
    }

    public function clothes()
    {
        return $this->hasMany(Clothes::class,'USER_ID');
    }

    public function clinics()
    {
        return $this->hasMany(Clinics::class,'USER_ID');
    }
}
