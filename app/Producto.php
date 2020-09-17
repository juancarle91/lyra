<?php

namespace App;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    use CrudTrait;

    protected $fillable = [
        'titulo', 'descripcion', 'precio', 'foto', 'visible_en', 'categoria_id'
    ];
}
