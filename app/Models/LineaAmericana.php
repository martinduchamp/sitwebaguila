<?php

namespace App\Models;

use App\Models\Features\HasHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaAmericana extends Model
{
    use HasFactory;
    use HasHelpers;

    protected $table = 'lineas_americanas';

    protected $fillable = [
        'nombre',
        'notas',
    ];
}
