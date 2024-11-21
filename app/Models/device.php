<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    // Define la tabla asociada
    protected $table = 'dispositivo';  // Cambia si usas un nombre de tabla diferente

    // Campos que pueden ser rellenados masivamente
    protected $fillable = ['name', 'power_consumption', 'profile_id'];

    // Relación con Profile
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');  // Cambia 'profile_id' si es necesario
    }
}
