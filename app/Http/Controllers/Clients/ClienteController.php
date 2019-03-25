<?php

namespace App\Http\Controllers\Clients;

use App\Cliente;
use App\Http\Requests\CreateClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::paginate(20);
        return view('clients.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateClienteRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClienteRequest $request)
    {
        try {
            $request->store();
            return back()->with('success', 'Cliente creado con exito');
        } catch (\Exception $exception) {

            Log::error('ClienteController@store:' . $exception->getMessage());
            return back()->with('error', 'Ha ocurrido un error al intentar guardar los datos: ');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clients.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateClienteRequest $request
     * @param  \App\Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        try {
            $request->store();
            return back()->with('info', 'Cliente actualizado con exito');
        } catch (\Exception $exception) {

            Log::error('ClienteController@update:' . $exception->getMessage());
            return back()->with('error', 'Ha ocurrido un error al intentar guardar los datos: ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        try {
            $cliente->delete();
            return back()->with('success', 'Cliente eliminado con éxito');
        } catch (\Exception $exception) {

            Log::error('ClienteController@update:' . $exception->getMessage());
            return back()->with('error', 'Ha ocurrido un error al intentar guardar los datos: ');
        }

    }
}
