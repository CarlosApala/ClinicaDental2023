<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaAtencion extends Model
{
    use HasFactory;

    protected $fillable=[
        'dia',
        'descripcion'
    ];
}
