<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    use HasFactory;

    protected $table = 'ciclos';

    protected $fillable = [
        'cerrado',
        'remolque',
        'placas_remolque',
        'observaciones',
        'id_movimiento',
        'id_linea_americana',
        'id_tipo_remolque',
        'fecha',
        'hora',
        'direccion_letra',
    ];

    public $timestamps = false;

    public static function guardarMovimiento(Movimiento $movimiento)
    {
        return self::create([
            'cerrado' => $movimiento->cerrado_extranjero,
            'remolque' => $movimiento->numero_remolque,
            'placas_remolque' => $movimiento->placas_remolque,
            'observaciones' => $movimiento->observaciones,
            'id_movimiento' => $movimiento->id,
            'id_linea_americana' => $movimiento->id_linea_americana,
            'id_tipo_remolque' => $movimiento->id_tipo_remolque,
            'fecha' => $movimiento->fecha,
            'hora' => $movimiento->hora,
            'direccion_letra' => "A",
        ]);
    }

    public static function actualizarMovimiento(Movimiento $movimiento)
    {
        return self::where('id_movimiento', $movimiento->id)->update([
            'cerrado' => $movimiento->cerrado_extranjero,
            'remolque' => $movimiento->numero_remolque,
            'placas_remolque' => $movimiento->placas_remolque,
            'observaciones' => $movimiento->observaciones,
            'id_linea_americana' => $movimiento->id_linea_americana,
            'id_tipo_remolque' => $movimiento->id_tipo_remolque,
            'fecha' => $movimiento->fecha,
            'hora' => $movimiento->hora,
            'direccion_letra' => "A",
        ]);
    }
}
