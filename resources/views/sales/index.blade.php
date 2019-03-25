@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="text-center">
                            <span class="font-weight-bold">{{ __('aplication.ventas') }}</span>-{{ __('aplication.listado') }}
                        </h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3 text-right">
                                <a href="{{route('ventas.create')}}" role="button" class="btn btn-primary">
                                    {{__('aplication.registro')}}
                                </a>
                            </div>

                            <div class="col-12">
                                @include('commons.flash-message')
                            </div>
                            @if($ventas->isNotEmpty())
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-striped table-bordered ">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Sucursal</th>
                                            <th scope="col">Total (Bs.)</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($ventas as $venta)
                                            <tr>
                                                <td>{{$venta->id}}</td>
                                                <td>{{\Carbon\Carbon::parse($venta->created_at)->toDateString()}}</td>
                                                <td>{{$venta->cliente->nombre}}</td>
                                                <td>{{$venta->usuario->nombre}}</td>
                                                <td>{{$venta->sucursal->nombre}}</td>
                                                <td>{{$venta->total}}</td>
                                                <td>
                                                    <a href="{{route('ventas.show',$venta->id)}}">
                                                        <i class="fas fa-eye "></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    {!! $ventas->links() !!}
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
