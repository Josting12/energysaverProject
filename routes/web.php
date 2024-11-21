<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;

// Rutas específicas (como 'create') deben ir antes de las rutas con parámetros dinámicos
Route::get('/perfiles/create', [PerfilController::class, 'create'])->name('perfiles.create');
Route::post('/perfiles', [PerfilController::class, 'store'])->name('perfiles.store');
Route::get('/perfiles/{id}', [PerfilController::class, 'show'])->name('perfiles.show');
Route::get('/perfiles/{name}/edit', [PerfilController::class, 'edit'])->name('perfiles.edit');
Route::get('/perfiles', [PerfilController::class, 'index'])->name('perfiles.index');

// Define solo una ruta para la raíz
Route::get('/', function () {
    return view('navbar'); // Cambia esto si necesitas cargar otra vista.
});

Route::get('/historial', function () {
    return view('historial');
})->name('historial');

Route::get('/recomendaciones', function () {
    return view('recomendaciones');
})->name('recomendaciones');

Route::get('/alertas', function () {
    return view('alertas');
})->name('alertas');
