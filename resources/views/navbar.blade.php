<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnergySaver</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            transition: margin-left 0.3s;
        }

        /* Navbar superior */
        .top-navbar {
            height: 50px;
            background-color: #2f312f;
            color: #4CAF50;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: fixed;
            top: 0;
            left: 60px; /* Ajuste inicial para la posición */
            z-index: 1000; /* Se asegura de que esté sobre otros elementos */
            width: calc(100% - 60px);
            transition: left 0.3s, width 0.3s; /* Transición para moverse */
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

        /* Navbar lateral */
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

        /* Ajuste del contenido */
        .content {
            margin-left: 60px; /* Empieza después del navbar vertical */
            margin-top: 50px; /* Empieza después del navbar superior */
            padding: 20px;
            transition: margin-left 0.3s; /* Transición para moverse */
        }
    </style>
</head>
<body>
    <!-- Navbar superior -->
    <div class="top-navbar" id="topNavbar">
        <div class="logo">
            <img src="https://i.postimg.cc/YSKJHYRX/Leonardo-Phoenix-Create-a-simple-modern-and-harmonious-logo-fe-3-removebg-preview.png/30" alt="Logo"> <!-- Puedes reemplazar la URL con tu imagen de logo -->
            <h1>Energy Saver</h1>
        </div>
    </div>

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

    <!-- Contenido principal -->
    <div class="content" id="content">
        <h1>Contenido Principal</h1>
        <p>Aquí puedes agregar el contenido de tu aplicación.</p>
    </div>

    <script>
        function toggleNavbar() {
            const navbar = document.getElementById("navbar");
            const content = document.getElementById("content");
            const topNavbar = document.getElementById("topNavbar");

            navbar.classList.toggle("expanded");

            if (navbar.classList.contains("expanded")) {
                content.style.marginLeft = "200px"; /* Desplazar el contenido */
                topNavbar.style.left = "200px"; /* Desplazar la barra superior */
                topNavbar.style.width = "calc(100% - 200px)";
            } else {
                content.style.marginLeft = "60px"; /* Volver al estado original */
                topNavbar.style.left = "60px";
                topNavbar.style.width = "calc(100% - 60px)";
            }
        }
    </script>
</body>
</html>