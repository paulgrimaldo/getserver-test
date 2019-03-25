<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{

    protected $table = "sucursales";
    public $timestamps = false;


    public function ventas()
    {
        return $this->hasMany(Venta::class, 'sucursal_id');
    }
}
