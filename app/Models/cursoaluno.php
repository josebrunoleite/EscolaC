<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cursoaluno extends Model
{
    protected $fillable = [
        'curso',
        'titulo',
        'provafeitas',
        'aulasfeitas',
    ];
}
