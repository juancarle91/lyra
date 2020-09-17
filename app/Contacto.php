<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public $table = 'contacto';
    public $fillable = [
        'nombre', 'email', 'telefono', 'asunto', 'mensaje'
    ];
}
