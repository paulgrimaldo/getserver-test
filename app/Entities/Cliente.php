<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre', 'nit', 'direccion', 'email'];


    public function ventas()
    {

        return $this->hasMany(Venta::class, 'cliente_id');
    }
}
