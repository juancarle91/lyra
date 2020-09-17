<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    public function search($query, $s) {
        return $query->where('titulo', 'like', '%' .$s. '%');
    }
}
