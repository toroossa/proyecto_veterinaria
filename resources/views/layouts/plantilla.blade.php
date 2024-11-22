<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Veterinaria</title>
    <style>
        body {
            background-color: #f1f9fc;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #045b75;
            padding: 1rem;
            display: flex;
            justify-content: space-between; /* Alinea los elementos entre sí */
            align-items: center; /* Centra los elementos verticalmente */
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
            font-size: 1.5rem;
            text-transform: uppercase;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .dropdown-toggle {
            background-color: #0d8fa8;
            color: #fff;
            border: none;
        }

        .dropdown-menu {
            background-color: #e8f6fa;
            border: none;
            box-shadow: 0px 10px 8px rgba(0, 0, 0, 0.5);
        }

        .dropdown-menu a {
            color: #045b75;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s ease-in-out;
        }

        .dropdown-menu a:hover {
            color: #0d8fa8;
        }

        footer {
            background-color: #045b75;
            color: #fff;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menú
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/">Inicio</a></li>
                <li><a class="dropdown-item" href="/veterinarios">Agendar Cita</a></li>
                <li><a class="dropdown-item" href="/envios">Registros de Envío</a></li>
            </ul>
            <a href="/" class="navbar-brand">🐈 🐈‍⬛ 🐇 🦔 🐹 🐾 Veterinaria Toroossa 🐾 🐕 🐩 🦮 🐕‍🦺</a>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2024 Veterinaria Torossa 🐾 | Juliana Ossa Toro</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>



