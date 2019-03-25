@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="text-center">
                            <span class="font-weight-bold">{{ __('aplication.clientes') }}</span>-{{ __('aplication.listado') }}
                        </h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3 text-right">
                                <a href="{{route('clientes.create')}}" role="button" class="btn btn-primary">
                                    {{__('aplication.registro')}}
                                </a>
                            </div>

                            <div class="col-12">
                                @include('commons.flash-message')
                            </div>
                            @if($clientes->isNotEmpty())
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-striped table-bordered ">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Nit</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Direcci&oacute;n</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($clientes as $cliente)
                                            <tr>
                                                <td>{{$cliente->id}}</td>
                                                <td>{{$cliente->nombre}}</td>
                                                <td>{{$cliente->nit}}</td>
                                                <td>{{$cliente->email}}</td>
                                                <td>{{empty($cliente->direccion)?'-':$cliente->direccion}}</td>
                                                <td>
                                                    <a href="{{route('clientes.edit',$cliente->id)}}">
                                                        <i class="fas fa-edit "></i>
                                                    </a>
                                                    <a role="button" class="btn" data-toggle="modal"
                                                       data-target="#modal-delete-cliente-{{$cliente->id}}">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    @include('clients.modal-delete-cliente',['cliente'=>$cliente])
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    {!! $clientes->links() !!}
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
