<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Usuarios extends Model implements JWTSubject
{
    use HasFactory;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $fillable=[
        'id',
        'name',
        'lastname',
        'email',
        'password',
        'status',
        'role_id'
    ];

    public function roles(){
        return $this->hasMany(Role::class);
    }
}
