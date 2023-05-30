<?php

namespace App\Http\Requests;

use App\Models\TipoRemolque;
use Illuminate\Foundation\Http\FormRequest;

class TipoRemolqueSaveRequest extends FormRequest
{
    public $tipo_remolque_id;

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
                    TipoRemolque::getTableName(), 
                    $this->tipo_remolque_id
                ),
            ],
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
        $this->tipo_remolque_id = $this->tipoRemolque->id ?? 0;
    }
}
