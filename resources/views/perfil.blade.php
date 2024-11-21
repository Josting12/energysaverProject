@extends('layout')

@section('title', 'Gestionar Perfiles')

@section('content')
    <h1 style="color: #4CAF50; text-align: center; margin-bottom: 20px;">Perfiles del hogar</h1>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff; /* Fondo blanco para la página */
            margin: 0;
            padding: 20px;
        }
        .card-container {
            background-color: #e8f5e8; /* Fondo específico para la sección de las tarjetas */
            padding: 20px;
            border-radius: 10px;
        }
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Configuración adaptable para 2 cards por fila */
            gap: 30px;
            justify-items: center;
            align-items: start;
            padding: 20px;
        }
        .profile-card {
            width: 300px;
            height: 350px;
            background: #E1E1E1;
            border-radius: 10px;
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            position: relative;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 4px 8px 20px rgba(0, 0, 0, 0.15);
        }
        .profile-card img {
            width: 130px;
            height: 130px;
            margin-bottom: 15px;
            border-radius: 50%;
        }
        .profile-card h3 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }
        .profile-card button {
            margin: 8px;
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-size: 15px;
        }
        .edit-btn {
            background-color: #4CAF50;
        }
        .delete-btn {
            background-color: #FF0000;
        }
        .add-profile {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 300px;
            height: 350px;
            background: #E8E8E8;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
        }
        .add-profile:hover {
            background-color: #dcdcdc;
            transform: translateY(-5px);
        }
        .add-profile .circle {
            width: 120px;
            height: 120px;
            border: 2px solid #666;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .add-profile .circle span {
            font-size: 40px; /* Tamaño del "+" */
            color: #666;
            font-weight: bold;
        }
        .add-profile span.text {
            font-size: 18px;
            color: #333;
        }
        a {
            text-decoration: none; /* Quita el subrayado de los enlaces */
        }
    </style>

    <div class="card-container">
        <div class="container">
            @foreach ($profiles as $profile)
                <a href="{{ route('perfiles.show', ['id' => $profile['id']]) }}" style="text-decoration: none; color: inherit;">
                    <div class="profile-card">
                        <img src="https://i.postimg.cc/FRs2tKK1/casa-ig.png" alt="Icono de perfil">
                        <h3>{{ $profile['name'] }}</h3>
                        <button class="edit-btn">Editar</button>
                        <button class="delete-btn">Eliminar</button>
                    </div>
                </a>
            @endforeach
        

            <a href="{{ route('perfiles.create') }}">
                <div class="add-profile">
                    <div class="circle">
                        <span>+</span> <!-- Símbolo "+" dentro del círculo -->
                    </div>
                    <span class="text">Añadir Perfil</span>
                </div>
            </a>
        </div>
    </div>
@endsection