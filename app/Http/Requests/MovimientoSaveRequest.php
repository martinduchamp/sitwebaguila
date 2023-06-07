<?php

namespace App\Http\Requests;

use App\Models\Propietario;
use Illuminate\Foundation\Http\FormRequest;

class MovimientoSaveRequest extends FormRequest
{
    private $propietario;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'numero_remolque' => ['required'],
            'placas_remolque' => ['required'],
            'cantidad_dias_patio' => ['required'],
            'observaciones' => 'nullable',
            'cerrado_extranjero' => 'required',
            'cruce_directo' => 'required',
            'id_propietario_remolque' => ['bail','required', 'exists:App\Models\Propietario,id'],
            'id_tipo_remolque' => ['bail','required', sprintf('in:%s', $this->propietario->tipos_remolque_csv), 'exists:App\Models\TipoRemolque,id'],
            'id_linea_americana' => ['bail','required', 'exists:App\Models\LineaAmericana,id'],
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
            'cantidad_dias_patio.required' => __('Escribe la cantidad de dias en patio del remolque'),
            // 'observaciones' => 'nullable',
            // 'cerrado_extranjero' => 'sometimes',
            // 'cruce_directo' => 'sometimes',
            'id_propietario_remolque.required' => __('Selecciona el propietario del remolque'),
            'id_propietario_remolque.exists' => __('Selecciona un propietario del remolque valido'),
            'id_tipo_remolque.required' => __('Selecciona el tipo de remolque'),
            'id_tipo_remolque.in' => __('Selecciona un tipo de remolque que utiliza el propietario'),
            'id_tipo_remolque.exists' => __('Selecciona un tipo de remolque valido'),
            'id_linea_americana.required' => __('Selecciona la línea americana'),
            'id_linea_americana.exists' => __('Selecciona una línea americana valida'),
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
            'id_propietario_remolque' => $this->propietario_remolque,
            'id_tipo_remolque' => $this->tipo_remolque,
            'id_linea_americana' => $this->linea_americana,
            'id_cerca_decagps_origen' => $this->cerca_decagps_origen,
            'id_cerca_decagps_destino' => $this->cerca_decagps_destino,
        ]);

        $this->propietario = Propietario::find($this->propietario_remolque) ?? new Propietario;
    }
}
