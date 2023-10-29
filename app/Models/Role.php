<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuarios;

class Role extends Model
{
    use HasFactory;
    protected $table='role';

    public function usuarios(){
        return $this->hasMany(Usuarios::class);
    }
}
