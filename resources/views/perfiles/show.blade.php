@extends('layout')

@section('content')
<div class="container">
    <h1>Detalles de la Residencia: {{ $profile->Nom_Residencia }}</h1>

    <h3>Consumo Total: {{ $consumoTotal }} kWh</h3>
    <h3>Costo Total: ${{ number_format($costoTotal, 2) }}</h3>


    <h3>Dispositivos:</h3>
    <style>
        .table-custom {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table-custom th, .table-custom td {
            border: 1px solid #ddd;
            padding: 12px; /* Aumenta el relleno entre las celdas */
        }
        .table-custom th {
            background-color: #f2f2f2;
            text-align: left;
        }
        .table-custom tr:hover {
            background-color: #f9f9f9; /* Resalta la fila al pasar el mouse */
        }
    </style>

   <table class="table-custom">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Consumo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dispositivos as $dispositivo)
        <tr>
            <td>{{ $dispositivo->Nom_Dispositivo }}</td>
            <td>{{ $dispositivo->Marca }}</td>
            <td>{{ $dispositivo->Modelo }}</td>
            <td>{{ $dispositivo->dec_consumo }} kWh</td>
        </tr>
        @endforeach
    </tbody>
</table>

    <!-- Sección para la gráfica de consumo -->
    <h3>Gráfica de Consumo de Energía</h3>
    <canvas id="chart-consumption" width="400" height="200"></canvas>

    
</div>

<!-- Incluir Chart.js desde el CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Datos de consumo y nombres de dispositivos
    var consumptionData = @json($consumptionData);
    var deviceNames = @json($deviceNames);

    // Gráfica de Consumo Total
    var ctx = document.getElementById('chart-consumption').getContext('2d');
    var consumptionChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: deviceNames,  // Nombres de los dispositivos en el eje X
            datasets: [{
                label: 'Consumo de Energía (kWh)',
                data: consumptionData,  // Consumo de cada dispositivo en el eje Y
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


@endsection
