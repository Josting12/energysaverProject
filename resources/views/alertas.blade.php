@extends('layout')

@section('title', 'Alertas')

@section('content')
    <!-- Modal de Alertas -->
    <div id="alertModal" class="modal" style="display: block;"> <!-- Mostrar el modal directamente al cargar -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 class="modal-header">Alertas</h2> <!-- Título con fondo verde y letras blancas -->
            <div class="alert-card">
                <h3 class="alert-title">¡Alerta de consumo elevado! </h3>
                <p class="alert-description">El consumo energético de la nevera ha superado el umbral permitido, registrando un total de 350 kWh este mes. Este nivel de consumo puede ser indicativo de un mal funcionamiento, un uso ineficiente o una acumulación de escarcha en el congelador. Te recomendamos revisar el estado del electrodoméstico, descongelarlo si es necesario y verificar si las puertas están correctamente selladas. Reducir el consumo puede ayudarte a evitar costos adicionales en tu factura.</p>
            </div>
        </div>
    </div>

    <style>
        /* Estilos para el modal */
        .modal {
            display: block; /* Se muestra directamente */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            border-radius: 5px;
            text-align: center;
            position: relative; /* Permite posicionar elementos como el botón de cierre */
        }
        .modal-header {
            background-color: #4CAF50; /* Fondo verde */
            color: white; /* Letras blancas */
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }
        .close {
            color: #aaa;
            position: absolute;
            right: 15px; /* Ajusta el espacio entre el borde derecho y el botón */
            top: 10px; /* Ajusta la distancia desde el borde superior */
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        /* Estilo de la tarjeta de alerta */
        .alert-card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            text-align: left;
            margin-top: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .alert-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .alert-description {
            font-size: 14px;
            color: #555;
        }
    </style>

    <script>
        // Obtener el modal
        var modal = document.getElementById("alertModal");

        // Obtener el elemento <span> que cierra el modal
        var span = document.getElementsByClassName("close")[0];

        // Bloquea el scroll de fondo
        document.body.classList.add('modal-open');

        // Cuando el usuario haga clic en <span> (x), cierra el modal
        span.onclick = function() {
            modal.style.display = "none";
            document.body.classList.remove('modal-open'); // Habilita el scroll si cierras el modal
            window.location.href = '/'; // Redirige a la página principal si cierras el modal
        }

        // Cuando el usuario haga clic fuera del modal, se cierra
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                document.body.classList.remove('modal-open'); // Habilita el scroll si cierras el modal
                window.location.href = '/'; // Redirige a la página principal si cierras el modal
            }
        }
    </script>
@endsection
