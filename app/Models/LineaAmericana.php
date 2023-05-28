<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaAmericana extends Model
{
    use HasFactory;

    protected $table = 'lineas_americanas';

    protected $fillable = [
        'nombre',
        'notas',
    ];
}
