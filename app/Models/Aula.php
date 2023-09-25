<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $fillable = [
        'curso',
        'titulo',
        'aula',
        'video',
        'comentarioautor',
        'presenca',
        'img',
    ];
}
