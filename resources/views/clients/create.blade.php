@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="text-center">
                            <span class="font-weight-bold">{{ __('aplication.clientes') }}</span>-{{ __('aplication.registro') }}
                        </h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                @include('commons.flash-message')
                            </div>
                        </div>
                        <form action="{{route('clientes.store')}}" method="POST">
                            @csrf
                            @include('clients.partials.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
