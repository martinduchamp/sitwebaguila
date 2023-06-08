<?php

namespace App\Models;

use App\Models\Features\HasHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;
    use HasHelpers;

    protected $table = 'propietarios';

    protected $fillable = [
        'nombre',
        'tipos_remolque_formato_csv',
    ];

    public function getTiposRemolqueArrayAttribute()
    {
        return str_getcsv($this->tipos_remolque_formato_csv) ?? [];
    }

    public function getTiposRemolqueCsvAttribute()
    {
        return $this->tipos_remolque_formato_csv ?? '';
    }

    public function getContadorTiposRemolqueAttribute()
    {
        return count($this->tipos_remolque_array);
    }
}
