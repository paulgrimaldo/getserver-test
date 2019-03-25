<div class="form-group row">
    <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}*</label>

    <div class="col-md-6">
        <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
               name="nombre" value="{{ old("nombre") ? old("nombre") : (!empty($cliente) ? $cliente->nombre : null) }}"
               required autofocus>

        @if ($errors->has('nombre'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
        @endif
    </div>
</div>


<div class="form-group row">
    <label for="nit" class="col-md-4 col-form-label text-md-right">{{ __('Nit') }}*</label>

    <div class="col-md-6">
        <input id="nit" type="text" class="form-control{{ $errors->has('nit') ? ' is-invalid' : '' }}" name="nit"
               value="{{ old("nit") ? old("nit") : (!empty($cliente) ? $cliente->nit : null) }}" required autofocus>

        @if ($errors->has('nit'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nit') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}*</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
               value="{{ old("email") ? old("email") : (!empty($cliente) ? $cliente->email : null) }}" required>

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

    <div class="col-md-6">
        <textarea id="direccion" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}"
                  name="direccion" rows="3">{{ old("direccion") ? old("direccion") : (!empty($cliente) ? $cliente->direccion : null) }}
        </textarea>

        @if ($errors->has('direccion'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Guardar') }}
        </button>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h6>{{__('Todos los campos con * son obligatorios')}}</h6>
    </div>
</div>