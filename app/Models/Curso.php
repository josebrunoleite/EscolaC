<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
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
