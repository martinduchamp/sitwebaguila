<?php

namespace App\Models;

use App\Models\Features\HasHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRemolque extends Model
{
    use HasFactory;
    use HasHelpers;

    protected $table = 'tipos_remolque';

    protected $fillable = [
        'nombre',
        'tipos_remolque_formato_csv',
    ];
}
