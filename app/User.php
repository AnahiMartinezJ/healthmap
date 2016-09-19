<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'apellido-paterno', 'apellido-materno', 'titulo', 'licenciatura', 'especialidad', 'subespecialidad', 'cedula', 'institucion-add', 'ultimo-grado', 'jerarquia', 'fecha-nacimiento', 'antiguedad', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
}
