<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    protected $table = 'movimientos';

    protected $fillable = [
        'numero_remolque',
        'placas_remolque',
        'cantidad_dias_patio',
        'cerrado_extranjero',
        'cruce_directo',
        'observaciones',
        'id_propietario_remolque',
        'id_tipo_remolque',
        'id_linea_americana',
        'id_cerca_decagps_origen',
        'id_cerca_decagps_destino',
        'fecha',
        'hora',
    ];

    // Atributos
    public function getRespondeEsCruceDirectoAttribute()
    {
        return $this->cruce_directo ? 'si' : 'no';
    }

    public function getRespondeEsCerradoExtranjeroAttribute()
    {
        return $this->cerrado_extranjero ? 'si' : 'no';
    }


    // Relaciones

    public function propietario()
    {
        return $this->belongsTo(Propietario::class, 'id_propietario_remolque', 'id');
    }

    public function tipoRemolque()
    {
        return $this->belongsTo(TipoRemolque::class, 'id_tipo_remolque', 'id');
    }

    public function lineaAmericana()
    {
        return $this->belongsTo(LineaAmericana::class, 'id_linea_americana', 'id');
    }

    public function cercaGpsOrigen()
    {
        return $this->belongsTo(CercaDecaGps::class, 'id_cerca_decagps_origen', 'id');
    }

    public function cercaGpsDestino()
    {
        return $this->belongsTo(CercaDecaGps::class, 'id_cerca_decagps_destino', 'id');
    }
}
