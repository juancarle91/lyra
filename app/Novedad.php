<?php

namespace App;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    use CrudTrait;

    protected $table = 'novedades';
    public $fillable = [
        'titulo', 'texto1', 'texto2', 'foto'
    ];
}

