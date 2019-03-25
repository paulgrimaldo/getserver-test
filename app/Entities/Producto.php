<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;
    protected $table = 'productos';

    protected $fillable = ['nombre', 'descripcion', 'total'];





}
