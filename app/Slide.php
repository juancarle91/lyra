<?php

namespace App;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{

    use CrudTrait;

    protected $fillable = [
        'titulo', 'texto', 'boton', 'foto', 'link'
    ];
}
