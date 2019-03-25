<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = "ventas";
    protected $fillable = ['sucursal_id', 'cliente_id', 'usuario_id', 'total'];


    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'sucursal_id');
    }


    public function producto_ventas()
    {
        return $this->hasMany(ProductoVenta::class, 'venta_id');
    }
}
