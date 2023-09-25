<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provas extends Model
{
    protected $fillable = [
        'curso',
        'titulo',
        'questao',
        'respostas',
        'img',
    ];
}
