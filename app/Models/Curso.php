<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'name',
        'Autor',
        'CodigoProd',
        'Possui',
    ];
    protected $hidden = [
        'password',
    ];
}
