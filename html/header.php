<?php
error_reporting(0);
session_start();
include("conex.php");
$sesion = $_SESSION['correo'];
if (!($sesion == null || $sesion == '')){
  header("Location:../html-php/index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/pie.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/headerr.css">

    <title>header</title>
    <style>
        /* Diseño del buscador */
        #search-bar {
            display: none;
            position: absolute;
            top: 70px;
            right: 10px;
            width: 300px;
            z-index: 1000;
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
            border-radius: 8px;
        }

        #search-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .search-suggestions {
            border: 1px solid #ddd;
            border-top: none;
            max-height: 200px;
            overflow-y: auto;
            background-color: white;
            border-radius: 8px;
            margin-top: 5px;
        }

        .search-suggestions a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: black;
            border-bottom: 1px solid #ddd;
        }

        .search-suggestions a:hover {
            background-color: #f1f1f1;
        }

        /* Asegura que el estilo del botón no interfiera */
        .btn-primary-outline {
            background-color: transparent;
            border: 1px solid #000000;
            color: #000000;
            border-radius: 30px;
            padding: 5px 10px;
        }

        .btn-primary-outline:hover {
            background-color: #e4e2e2;
            color: rgb(0, 0, 0);
        }

        .btn-primary-outline img {
            margin-right: 5px;
        }
    </style>
</head>
<body>

    <!--Inicio header-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-navbar fixed-top">
        <div class="container-fluid">
    
            <a class="navbar-brand" href="index.html">
                <img src="../imagen/estoyAnsioso/esflyInfo.png" class="" id="logo" alt="">
            </a>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Reservarvuelos.html">Reserva tu vuelo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ofertasYDestinos.html">Ofertas y destinos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="check-in.html">Check-in</a>
                    </li>
                </ul>
    
                <span class="navbar-text"></span>
    
                <form class="d-flex" role="search">
                    <a href="../html/login.html" class="btn btn-primary-outline-success btn-primary ms-1" type="submit">Iniciar sesión</a>
                    <a href="../html/registro.html" class="btn btn-registro ms-1" href="../html/registro.html" type="submit">Registrarse</a>
                </form>
                <button class="btn btn-primary-outline ms-1" type="button" id="search-btn">
                    <img src="../imagen/header/lupa.png" class="" id="lupa" alt="" width="20"> Buscar
                </button>
            </div>
        </div>
    </nav>
    
    <!-- Search Bar -->
    <div id="search-bar" class="input-group mt-3 p-3">
        <input type="text" class="form-control" id="search-input" placeholder="Buscar...">
        <div class="search-suggestions" id="search-suggestions"></div>
    </div>
    
    <!--Fin header-->   
    
    
    <script>
        const searchBtn = document.getElementById('search-btn');
        const searchBar = document.getElementById('search-bar');
        const searchInput = document.getElementById('search-input');
        const searchSuggestions = document.getElementById('search-suggestions');

        const pages = [
            { name: "Reserva tu vuelo", url: "Reservarvuelos.html" },
            { name: "Ofertas y destinos", url: "ofertasYDestinos.html" },
            { name: "Check-in", url: "check-in.html" },
            { name: "Iniciar sesión", url: "../html/login.html" },
            { name: "Registrarse", url: "../html/registro.html" }

        ];

        searchBtn.addEventListener('click', () => {
            searchBar.style.display = searchBar.style.display === 'none' ? 'block' : 'none';
            searchInput.focus();
        });

        searchInput.addEventListener('input', () => {
            const query = searchInput.value.toLowerCase();
            searchSuggestions.innerHTML = '';

            if (query) {
                const filteredPages = pages.filter(page => page.name.toLowerCase().includes(query));
                filteredPages.forEach(page => {
                    const suggestion = document.createElement('a');
                    suggestion.href = page.url;
                    suggestion.textContent = page.name;
                    searchSuggestions.appendChild(suggestion);
                });
            }
        });

        document.addEventListener('click', (event) => {
            if (!searchBar.contains(event.target) && event.target !== searchBtn && !searchBtn.contains(event.target)) {
                searchBar.style.display = 'none';
            }
        });


        searchBar.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    </script>
</body>
</html>
