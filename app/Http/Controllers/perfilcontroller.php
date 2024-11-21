<?php

namespace App\Http\Controllers;

use App\Models\Profile; // Asegúrate de importar el modelo
use App\Models\Device;  // Asegúrate de importar el modelo Device
use App\Models\Factura; // Asegúrate de importar el modelo Factura
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    // Método para mostrar la lista de perfiles
    public function index()
    {
        $profiles = Profile::all();  // Recupera todos los perfiles desde la base de datos
        return view('perfiles.index', compact('profiles'));
    }

    // Método para mostrar el formulario de creación de un nuevo perfil
    public function create()
    {
        return view('perfiles.create');
    }

    // Método para almacenar un nuevo perfil
    public function store(Request $request)
{
    // Validación de los datos enviados desde el formulario
    $validated = $request->validate([
        'Nom_Residencia' => 'required|string|max:255',  
        'field2' => 'required|string|max:255',
        'field3' => 'required|string|max:255',
        'field4' => 'required|string|max:255',
    ]);

    // Crear el perfil
    $profile = Profile::create([
        'Nom_Residencia' => $validated['Nom_Residencia'],  
        'field2' => $validated['field2'],
        'field3' => $validated['field3'],
        'field4' => $validated['field4'],
    ]);

    return redirect()->route('perfiles.index');
}
    
//------------------parte 1---------------/////////////



    // Método para mostrar un perfil específico
    public function show($id)
    {
        // Buscar el perfil (residencia) por su ID
        $profile = Profile::findOrFail($id);

        // Obtener los dispositivos y las facturas relacionadas
        $dispositivos = $profile->dispositivos; // Usamos la relación definida en el modelo
        $facturas = Factura::where('id_residencia', $id)->get(); 
        // Calculo el consumo total
         $consumoTotal = $dispositivos->sum('dec_consumo');


        // Calcular el costo total (ejemplo: suponiendo un costo fijo por unidad de consumo)
        $costoPorUnidad = 0.15; 
        $costoTotal = $consumoTotal * $costoPorUnidad;

        // Datos para la gráfica
        $consumptionData = $dispositivos->pluck('dec_consumo'); // Pluck de la columna 'dec_consumo' de los dispositivos
        $deviceNames = $dispositivos->pluck('Nom_Dispositivo'); // Pluck de la columna 'Nom_Dispositivo' de los dispositivos

        // Pasamos los datos a la vista
        return view('perfiles.show', compact('profile', 'dispositivos', 'facturas', 'consumptionData', 'deviceNames','consumoTotal', 'costoTotal'));
    }


    /// Método para calcular el costo total de un perfil
public function calculateTotalCost($profile)
{
    // Verifica si el perfil tiene dispositivos
    if ($profile && $profile->dispositivos->isNotEmpty()) {
        foreach ($profile->dispositivos as $device) {
            
        }
    } else {
        
        return response()->json(['message' => 'No devices found for this profile.'], 404);
    }
}
    
    private function getConsumptionData($profile)
    {
        
        return [
            'Enero' => 100,
            'Febrero' => 120,
            'Marzo' => 110,
        ];
    }

    // Método para obtener los datos de demanda máxima (esto es solo un ejemplo)
    private function getMaxDemandData($profile)
    {
        // Ejemplo de datos, deberías personalizarlo según cómo almacenas la demanda
        return [
            'Enero' => 200,
            'Febrero' => 210,
            'Marzo' => 190,
        ];
    }
}
