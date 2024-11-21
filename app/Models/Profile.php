<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'residencia';

    // Clave primaria
    protected $primaryKey = 'id_residencia';

    // Campos asignables masivamente
    protected $fillable = [
        'Nom_Residencia', // Cambiado para coincidir con la columna en la tabla
        'address',
        'city',
        'date_created'
    ];

    public function dispositivos()
{
    return $this->hasMany(Device::class, 'id_residencia');  // Debe ser 'profile_id' como clave foránea
}
public function facturas()
{
    return $this->hasMany(Factura::class, 'id_residencia');
}

}
