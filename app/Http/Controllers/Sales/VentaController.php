<?php

namespace App\Http\Controllers\Sales;

use App\Cliente;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateVentaRequest;
use App\Producto;
use App\Sucursal;
use App\Venta;
use Illuminate\Support\Facades\Log;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::paginate(20);
        return view('sales.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     * Cuando el usuario inicia sesión se almacena solo el Id de la sucursal elegida, para evitar carga en memoria.
     * El id de la Sucursal esta almacenada en la sesion como 'sucrusal_id'
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $clientes = Cliente::all();
            $productos = Producto::all();
            $usuario = auth()->user();
            $sucursal = Sucursal::findOrFail(session()->get('sucursal_id'));

            return view('sales.create', compact('clientes', 'productos', 'usuario', 'sucursal'));
        } catch (\Exception $exception) {
            Log::error('VentaController@create:' . $exception->getMessage());
            return back()->with('error', 'Error al intentar cargar');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateVentaRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVentaRequest $request)
    {
        try {
            $request->store();
            return back()->with('success', 'Venta registrada');
        } catch (\Exception $exception) {
            Log::error('VentaController@create:' . $exception->getMessage());
            return back()->with('error', 'No se pudo registrar la venta');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        $productoVentas = $venta->producto_ventas()->get();
        return view('sales.show', compact('venta', 'productoVentas'));
    }


}
