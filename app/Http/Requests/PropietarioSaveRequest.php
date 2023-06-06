<?php

namespace App\Http\Requests;

use App\Models\LineaAmericana;
use Illuminate\Foundation\Http\FormRequest;

class PropietarioSaveRequest extends FormRequest
{
    public $propietario_id;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => [
                'required',
                sprintf(
                    'unique:%s,nombre,%s',
                    Propietario::getTableName(),
                    $this->propietario_id
                ),
            ],
            'notas' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => __('Escribe el nombre'),
            'nombre.unique' => __('Escribe un nombre diferente'),
        ];
    }

    public function prepareForValidation()
    {
        $this->propietario_id = $this->propietario->id ?? 0;
    }
}
