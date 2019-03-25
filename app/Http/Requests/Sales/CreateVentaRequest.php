<?php

namespace App\Http\Requests;

use App\Producto;
use App\ProductoVenta;
use App\Venta;
use Illuminate\Foundation\Http\FormRequest;

class CreateVentaRequest extends FormRequest implements BaseRequestInterface
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cliente_id' => 'required|numeric',
            'productos' => 'array|required'
        ];
    }

    /**
     *
     *  Crea la cabecera de la venta
     *  Guarda el detalle de la venta que contiene la lista de productos
     *  Actualiza el precio de la venta
     *
     *
     */
    public function store()
    {
        $total = 0;
        $usuario = auth()->user();
        $sucursalId = session()->get('sucursal_id');
        $venta = new Venta(['cliente_id' => $this->get('cliente_id'), 'total' => $total, 'sucursal_id' => $sucursalId]);
        $usuario->ventas()->save($venta);

        $productosIds = $this->get('productos');
        for ($i = 0; $i < sizeof($productosIds); $i++) {
            $venta->producto_ventas()->save(new ProductoVenta(['producto_id' => $productosIds[$i]]));
            $total += Producto::find($productosIds[$i])->precio;
        }
        $venta->update(['total' => $total]);
    }
}
