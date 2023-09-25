<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    protected $fillable = [
        'liberado',
        'nome',
        'autor',
        'pagamento',
        'valor',
        'tipo',
        'codigoProd',
        'possui',
        'aula',
        'prova',
        'duracio',
        'img',
        'referencia',
    ];
}
