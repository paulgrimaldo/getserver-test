<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoVenta extends Model
{

    protected $table = "producto_ventas";
    public $timestamps = false;
    protected $fillable = ['producto_id', 'venta_id'];


    public function venta()
    {
        return $this->belongsTo(Venta::class, 'venta_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
