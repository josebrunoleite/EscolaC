<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questaos extends Model
{
    protected $fillable = [
        'curso',
        'questao',
        'resposta',
        'img',
    ];
}
