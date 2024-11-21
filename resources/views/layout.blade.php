<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Energy Saver')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .top-navbar {
            height: 50px;
            width: calc(100% - 60px);
            background-color: #2f312f;
            color: #4CAF50;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: fixed;
            top: 0;
            left: 60px;
            z-index: 1000;
            transition: left 0.3s, width 0.3s;
        }
        .top-navbar h1 {
            margin: 0;
            font-size: 18px;
        }
        .top-navbar .logo {
            display: flex;
            align-items: center;
        }
        .top-navbar img {
            height: 30px;
            margin-right: 10px;
        }
        .navbar {
            height: 100vh;
            width: 60px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            transition: width 0.3s;
            overflow: hidden;
        }
        .navbar.expanded {
            width: 200px;
        }
        .navbar .icon {
            display: block;
            color: white;
            padding: 18px;
            text-align: center;
        }
        .navbar a {
            display: flex;
            align-items: center;
            color: white;
            padding: 18px;
            text-decoration: none;
            font-size: 16px;
            overflow: hidden;
            white-space: nowrap;
            transition: opacity 0.3s;
        }
        .navbar.expanded a .text {
            opacity: 1;
        }
        .navbar a .text {
            opacity: 0;
            margin-left: 10px;
            transition: opacity 0.3s;
        }
        .navbar a:hover {
            background-color: #7D7D7D;
        }
        .content {
            margin-left: 60px;
            margin-top: 50px;
            padding: 20px;
            transition: margin-left 0.3s;
        }
        .navbar.expanded ~ .content {
            margin-left: 200px;
        }
        .navbar.expanded ~ .top-navbar {
            left: 200px;
            width: calc(100% - 200px);
        }
    </style>
</head>
<body>
    <!-- Navbar lateral -->
    <div class="navbar" id="navbar">
        <a href="#" class="icon" onclick="toggleNavbar()">
            <i class="fas fa-bars"></i>
        </a>
        <a href="{{ route('perfiles.index') }}">
            <i class="fas fa-home"></i>
            <span class="text">Inicio</span>
        </a>
        <a href="{{ route('perfiles.index') }}">
            <i class="fas fa-users-cog"></i>
            <span class="text">Gestionar perfiles</span>
        </a>
        <a href="{{ route('historial') }}">
            <i class="fa-regular fa-file"></i>
            <span class="text">Historial de facturas</span>
        </a>
        <a href="{{ route('recomendaciones') }}">
            <i class="fas fa-lightbulb"></i>
            <span class="text">Recomendaciones</span>
        </a>
        <a href="{{ route('alertas') }}">
            <i class="fas fa-exclamation-circle"></i>
            <span class="text">Alertas</span>
        </a>
    </div>

    <!-- Navbar superior -->
    <div class="top-navbar">
        <div class="logo">
            <img src="https://i.postimg.cc/YSKJHYRX/Leonardo-Phoenix-Create-a-simple-modern-and-harmonious-logo-fe-3-removebg-preview.png/30" alt="Logo"> <!-- Reemplaza con tu logo -->
            <h1>Energy Saver</h1>
        </div>
    </div>

    <!-- Contenido dinámico -->
    <div class="content">
        @yield('content')
    </div>

    <script>
        function toggleNavbar() {
            const navbar = document.getElementById("navbar");
            navbar.classList.toggle("expanded");
        }
    </script>
</body>
</html>
