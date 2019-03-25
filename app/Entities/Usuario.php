<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;



    public function ventas(){

        return $this->hasMany(Venta::class,'usuario_id');
    }
}
