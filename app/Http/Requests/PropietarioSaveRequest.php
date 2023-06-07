<?php

namespace App\Http\Requests;

use App\Models\Propietario;
use App\Models\TipoRemolque;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'tipos_remolque' => [
                'required',
                'array',
            ],
            'tipos_remolque.*' => [
                sprintf('exists:%s,id', TipoRemolque::getTableName()),
            ],
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => __('Escribe el nombre'),
            'nombre.unique' => __('Escribe un nombre diferente'),
            'tipos_remolque' => __('Selecciona un tipo de remolque de la lista mostrada.'),
            'tipos_remolque.*' => __('Selecciona un tipo de remolque existente'),
        ];
    }

    public function prepareForValidation()
    {
        $this->propietario_id = $this->propietario->id ?? 0;

        $this->merge([
            'tipos_remolque' => isset($this->tipos_remolque) ? $this->tipos_remolque : [],
        ]);
    }

    public function validated($key = null, $default = null)
    {
        $validated = parent::validated($key, $default);

        return array_merge($validated, [
            'tipos_remolque_formato_csv' => implode(',', $this->tipos_remolque),
        ]);
    }
}
