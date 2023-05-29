<?php

namespace App\Http\Requests;

use App\Models\LineaAmericana;
use Illuminate\Foundation\Http\FormRequest;

class LineaAmericanaSaveRequest extends FormRequest
{
    public $linea_americana_id;

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
                    LineaAmericana::getTableName(), 
                    $this->linea_americana_id
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
        $this->linea_americana_id = $this->lineaAmericana->id ?? 0;
    }
}
