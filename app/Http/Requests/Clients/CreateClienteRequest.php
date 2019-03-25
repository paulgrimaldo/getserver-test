<?php

namespace App\Http\Requests;

use App\Cliente;
use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest implements BaseRequestInterface
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
            'nombre' => 'required|string|max:191',
            'nit' => 'required|max:191',
            'email' => 'required|unique:clientes|max:191',
            'direccion' => 'max:191,nullable'
        ];
    }

    public function store()
    {
        Cliente::create($this->all());
    }
}
