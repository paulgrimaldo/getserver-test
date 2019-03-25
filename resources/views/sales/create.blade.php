@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="text-center">
                            <span class="font-weight-bold">{{ __('aplication.ventas') }}</span>-{{ __('aplication.registro') }}
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('ventas.store')}}" method="POST">

                            <div class="row">
                                <div class="col-12">
                                    @include('commons.flash-message')
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <strong>
                                                {{__('aplication.usuario').':'}}
                                            </strong>
                                            {{$usuario->nombre}}
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <strong>
                                                {{__('aplication.sucursal').':'}}
                                            </strong>
                                            {{$sucursal->nombre}}
                                        </div>

                                    </div>
                                </div>

                                @csrf
                                <div class="input-group col-md-6  justify-content-center mb-3">
                                    <div class="input-group-prepend ">
                                        <label class="input-group-text"
                                               for="cliente_id">{{__('aplication.cliente')}} <strong>*</strong>
                                        </label>
                                    </div>

                                    <select class="custom-select form-control{{ $errors->has('cliente_id') ? ' is-invalid' : '' }}"
                                            name="cliente_id" id="cliente_id" required>
                                        @foreach($clientes as $cliente)
                                            <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('cliente_id'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('cliente_id') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-12 mb-3">
                                    <p>
                                        <strong>
                                            {{__('aplication.productos').':'}}
                                        </strong>
                                    </p>
                                    @foreach($productos as $producto)
                                        <div class="form-check">
                                            <input class="form-check-input "
                                                   name="productos[]" type="checkbox" value="{{$producto->id}}"
                                                   id="producto-checkbox-{{$producto->id}}">
                                            <label class="form-check-label" for="producto-checkbox-{{$producto->id}}">
                                                {{$producto->nombre}}
                                            </label>


                                        </div>
                                    @endforeach
                                    @if ($errors->has('productos'))
                                        <span class="text-danger">
                                                <strong>{{ $errors->first('productos') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrar venta') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
