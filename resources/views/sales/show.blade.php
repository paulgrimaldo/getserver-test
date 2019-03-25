@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="text-center">
                            <span class="font-weight-bold">{{ __('aplication.ventas') }}</span>-{{ __('aplication.detalle-venta') }}
                        </h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                @include('commons.flash-message')
                            </div>
                            @if($productoVentas->isNotEmpty())
                                <div class="col-12 text-left mb-3">
                                    <strong>{{__('aplication.usuario').':'}}</strong>
                                    {{$venta->usuario->nombre}}
                                </div>
                                <div class="col-12 text-left mb-3">
                                    <strong>{{__('aplication.cliente').':'}}</strong>
                                    {{$venta->cliente->nombre}}
                                </div>
                                <div class="col-12 text-left mb-3">
                                    <strong>{{__('aplication.sucursal').':'}}</strong>
                                    {{$venta->cliente->nombre}}
                                </div>
                                <div class="col-12 text-left mb-3">
                                    <strong>{{__('aplication.total').':'}}</strong>
                                    {{'Bs'.$venta->total}}
                                </div>
                                <div class="col-12 text-left mb-3">
                                    <strong>{{__('aplication.productos').':'}}</strong>

                                    <ul>
                                        @foreach($productoVentas as $productoVenta)
                                            <li>
                                                {{$productoVenta->producto->nombre}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @else
                                <div class="col-12 text-danger font-weight-bold text-center ">
                                    <h3>
                                        <small>
                                            {{__('aplication.sin-registros')}}
                                        </small>
                                    </h3>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
