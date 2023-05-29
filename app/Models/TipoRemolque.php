<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRemolque extends Model
{
    use HasFactory;

    protected $table = 'tipos_remolque';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}
