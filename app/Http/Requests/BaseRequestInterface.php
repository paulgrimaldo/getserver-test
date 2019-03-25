<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 24/03/2019
 * Time: 20:38
 */

namespace App\Http\Requests;

/**
 *  La interfaz define los metodos comunes que tendran
 *  Opcional, para no sobrecargar los Controller
 *
 */
interface BaseRequestInterface
{
    public function store();
}