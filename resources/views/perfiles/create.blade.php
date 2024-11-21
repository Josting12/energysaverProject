@extends('layout')

@section('title', 'Añadir Dispositivo')

@section('content')
    <h1 style="color: green; text-align: left; margin-bottom: 20px;">Añadir dispositivo de la residencia</h1>

    <!-- Primer formulario -->
    <form action="{{ route('perfiles.store') }}" method="POST">
        @csrf

        <!-- Sección: Datos del dispositivo -->
        <div style="margin-bottom: 20px;">
            <h3 style="color: black; font-weight: bold;">Datos del dispositivo</h3>
        </div>
        <div class="card" style="background-color: #E5F5E0; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
            <div class="form-row" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                <div class="form-group">
                    <label for="name" style="color: black;">Nombre del Perfil:</label>
                    <input type="text" id="id_residencia" name="Nom_Residencia" class="form-control" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                </div>
                <div class="form-group">
                    <label for="field2" style="color: black;">Nombre del dispositivo:</label>
                    <input type="text" id="field2" name="field2" class="form-control" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                </div>
                <div class="form-group">
                    <label for="field3" style="color: black;">Marca:</label>
                    <input type="text" id="field3" name="field3" class="form-control" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                </div>
                <div class="form-group">
                    <label for="field4" style="color: black;">Modelo:</label>
                    <input type="text" id="field4" name="field4" class="form-control" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                </div>
                <div class="form-group">
                    <label for="date" style="color: black;">Fecha de adquisicíon :</label>
                    <input type="date" id="date" name="date" class="form-control" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                </div>
            </div>
        </div>

        <!-- Sección: Uso del dispositivo -->
        <div style="margin-bottom: 20px;">
            <h3 style="color: black; font-weight: bold;">Uso del dispositivo</h3>
        </div>
        <div class="card" style="background-color: #E5F5E0; padding: 20px; border-radius: 10px;">
            <div class="form-row" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                <div class="form-group">
                    <label for="field1" style="color: black;">Hora de inicio de uso:</label>
                    <input type="text" id="field1" name="field1" class="form-control" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                </div>
                <div class="form-group">
                    <label for="field2" style="color: black;">Hora de fin de uso:</label>
                    <input type="text" id="field2" name="field2" class="form-control" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                </div>
                <div class="form-group">
                    <label for="usage_days" style="color: black;">Cuántos días a la semana se usa:</label>
                    
                </div>
                <div class="form-group">
                    <label for="usage_months" style="color: black;">Cuántos días al mes se usa:</label>
                    
                </div>
                <div class="form-group">
                    <label for="field1" style="color: black;">Dias a la semana:</label>
                    <input type="text" id="field1" name="field1" class="form-control" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                </div>
                <div class="form-group">
                    <label for="field2" style="color: black;">Dias al mes:</label>
                    <input type="text" id="field2" name="field2" class="form-control" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                </div>

                <div class="form-group">
                    <label for="related_devices" style="color: black;">Seleccionar dispositivos con que se utiliza en conjunto:</label>
                    <select id="related_devices" name="related_devices" class="form-control" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                        <option value="">Otros dispositivos</option>
                        <option value="option1">Dispositivo 1</option>
                        <option value="option2">Dispositivo 2</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Botones -->
        <div style="text-align: right; margin-top: 20px;">
            <button type="button" class="custom-button cancel-button" style="margin-right: 10px;">Cancelar</button>
            <button type="submit" class="custom-button save-button">Guardar</button>
        </div>
    </form>

    <!-- Estilos personalizados -->
    <style>
        .custom-button {
            padding: 12px 24px; /* Aumenta el tamaño del botón */
            font-size: 16px; /* Ajusta el tamaño del texto */
            border-radius: 20px; /* Hace el botón redondeado */
            border: none; /* Remueve el borde predeterminado */
            cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
        }

        .custom-button.cancel-button {
            background-color: #cccccc; /* Color gris claro */
            color: black;
        }

        .custom-button.save-button {
            background-color: #28a745; /* Color verde */
            color: white;
        }

        .custom-button:hover {
            opacity: 0.9; /* Efecto de opacidad en el hover */
        }
    </style>
@endsection
