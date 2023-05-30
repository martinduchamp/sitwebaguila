<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovimientoSaveRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'numero_remolque' => ['required'],
            'placas_remolque' => ['required'],
            'propietario_remolque' => ['required'],
            'cantidad_dias_patio' => ['required'],
            'observaciones' => 'nullable',
            'cerrado_extranjero' => 'required',
            'cruce_directo' => 'required',
            'id_tipo_remolque' => ['required'],
            'id_linea_americana' => ['required'],
            'id_cerca_decagps_origen' => ['required'],
            'id_cerca_decagps_destino' => ['required'],
            'fecha' => ['required'],
            'hora' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'numero_remolque.required' => __('Escribe el número de remolque'),
            'placas_remolque.required' => __('Escribe el número de placas del remolque'),
            'propietario_remolque.required' => __('Escribe el propietario del remolque'),
            'cantidad_dias_patio.required' => __('Escribe la cantidad de dias en patio del remolque'),
            // 'observaciones' => 'nullable',
            // 'cerrado_extranjero' => 'sometimes',
            // 'cruce_directo' => 'sometimes',
            'id_tipo_remolque.required' => __('Selecciona el tipo de remolque'),
            'id_linea_americana.required' => __('Selecciona la línea americana'),
            'id_cerca_decagps_origen.required' => __('Selecciona la cerca GPS de origen'),
            'id_cerca_decagps_destino.required' => __('Selecciona la cerca GPS de destino'),
            'fecha.required' => __('Selecciona o escribe la fecha del movimiento'),
            'hora.required' => __('Selecciona o escribe la hora del movimiento'),
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'cerrado_extranjero' => $this->cerrado_extranjero ? 1 : 0,
            'cruce_directo' => $this->cruce_directo ? 1 : 0,
            'id_tipo_remolque' => $this->tipo_remolque,
            'id_linea_americana' => $this->linea_americana,
            'id_cerca_decagps_origen' => $this->cerca_decagps_origen,
            'id_cerca_decagps_destino' => $this->cerca_decagps_destino,
        ]);
    }
}
