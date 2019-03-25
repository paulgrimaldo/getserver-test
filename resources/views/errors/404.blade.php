@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="text-center">
                            <span class="font-weight-bold">{{ __('aplication.error') }}</span>
                        </h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-danger font-weight-bold text-center ">
                                <h3>
                                    {{__('aplication.404')}}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
