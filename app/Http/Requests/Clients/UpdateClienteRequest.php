<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest implements BaseRequestInterface
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

        $clienteId = $this->cliente->id;
        return [
            'nombre' => 'required|string|max:191',
            'nit' => 'required|max:191',
            'email' => 'required|max:191|unique:clientes,email,' . $clienteId,
            'direccion' => 'max:191,nullable'
        ];
    }


    public function store()
    {
        $this->cliente->update($this->all());
    }
}
