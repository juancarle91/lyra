<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'talle', 'color', 'cantidad', 'cantidad_min', 'producto_id'
    ];
}
