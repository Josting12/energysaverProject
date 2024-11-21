<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'factura';  // Especificamos el nombre correcto de la tabla

    // Relación con Profile (si es necesario)
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'residencia_id'); // Asegúrate de la clave foránea
    }
}