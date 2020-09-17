<?php

namespace App;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    use CrudTrait;

    protected $fillable = [
        'titulo', 'foto', 'visible_home', 'descripcion',
    ];
}
