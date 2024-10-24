<?php
    // proceso para hacer el backend para tener los datos de el usuario
    include("../conex.php");
    session_start();
    $sesion = $_SESSION['$id'];
    if ($sesion == null || $sesion == '') {
        header("Location:../html/index.php");
    }

    // hacer consulta del asistente que ha iniciado sesión 
    $query = $conexion->query("SELECT * FROM asistente where idAsistente='$sesion'");
    $row = $query->fetch_assoc();
    $nombre = $row['nomAsistente'];
    $apellido = $row['apeAsistente'];
    $telefono = $row['numTelefono'];
    $servicios = $row['servicios'];
    $horario = $row['horarioTrabajo'];
    $genero = $row['genero'];
    $correo = $row['correoAsisten'];
    $foto = $row['foto'];
    $descripcion = $row['descri'];
    $dui = $row['dui'];
    $pasaporte = $row['pasaporte'];
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
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/headerr.css">
    <link rel="stylesheet" href="../js/modoOscuroClaro.js">
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

        .navbarText{
            color:#f1f1f1;

        }

        /*Quitar la flechita de el men]u */
        .nav-link.dropdown-toggle::after {
            display: none;
        }
      /*PARA CAMBIAR EL COLOR DE LA LETRA DE EL NAV SEGUN LOS TEMAS DE OSCURO Y CLARO */
      body[data-bs-theme='dark'] .nav-link {
            color: #fff; 
        }
    
        body[data-bs-theme='light'] .nav-link {
            color: #000; 
        }

        /* Ajusta el posicionamiento del menú desplegable */
        .dropdown-menu {
            position: absolute; 
            left: -50%; 
            transform: translateX(-50%); 
        }

        /* TRADUCTOR */
        /* Ocultar el header de Google Translate */

        .VIpgJd-ZVi9od-ORHb-OEVmcd {
            opacity: 0;
            pointer-events: none;
        }

        .VIpgJd-ZVi9od-l4eHX-hSRGPd{
            opacity: 0;
            pointer-events: none;
        }

        .goog-te-banner-frame.skiptranslate {
            display: none !important;
            opacity: 0;
        }

        .goog-te-combo{
            opacity: 100;
            font-family: "Be Vietnam Pro";
            size: 65px;
        }

    </style>
</head>
<body data-bs-theme="light">

    <!--Inicio header-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-navbar fixed-top">
        <div class="container-fluid">    
            <a class="navbar-brand" href="inicioEmpleado.php">
                <img src="../imagen/estoyAnsioso/esflyInfo.png" class="" id="logo" alt="">
            </a>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="datos de cuenta.php">Mi perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ofertasYDestinos.php">Citas</a>
                    </li>

                </ul>
    
                <span class="navbar-text"></span>
    
                <form class="d-flex" role="search">
                <?php
                    if ($foto == null) {
                    ?>
                       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="../imagen/header_ayudante/logo_usuario.png" class="rounded-circle border border-1 border-black mx-1" id="lupa" alt="" height="35px" width="35px">
                       </a>
                   <?php
                    } else {
                    ?>
                       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="data:image/jpg;base64,<?php echo base64_encode($foto) ?>" class="rounded-circle border border-1 border-black mx-1" id="lupa" alt="" height="35px" width="35px" style="object-fit: cover;">
                       </a>
                   <?php
                    }
                    ?>
                   <ul class="dropdown-menu">
                       <li><a class="dropdown-item fijo " type="">¡Hola, <?php echo $nombre ?>!</a></li>
                       <hr>
                       <li><a class="dropdown-item" href="datos de cuenta.php">Ver perfil</a></li>
                       <li><a class="dropdown-item" href="cerrar.php">Cerrar sesión</a></li>
                   </ul>
                </form>

                <!--BOTON DE TEMAS  -->
                <button  onclick="cambiarTema()" class="btn rounded-fill"><i id="dl-icon" class="bi bi-moon-fill"></i></button>

                <!--Traductor-->
                <div class="nav-item dropdown ms-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../imagen/header/traductor.png" class="me-2" alt="Traductor" width="20">
                    </a>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <button class="goog-te-combo" id="google_translate_element">Seleccione el idioma</button>
                    </ul>
                </div>

                <!-- Imagen search Bar -->
                <button class="btn ms-1" type="button" id="search-btn">
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
            { name: "Reserva tu vuelo", url: "Reservarvuelos.php" },
            { name: "Ofertas y destinos", url: "ofertasYDestinos.php" },
            { name: "Check-in", url: "check-in.php" },
            { name: "Iniciar sesión", url: "login.php" },
            { name: "Registrarse", url: "registro.php" }
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

        // MODO OSCURO Y CLARO DE LA PAGINA
        const temaOscuro = () => {
            document.querySelector("body").setAttribute("data-bs-theme", "dark");
            document.querySelector("#dl-icon").setAttribute("class", "bi bi-sun-fill");
            localStorage.setItem("theme", "dark");
        }

        const temaClaro = () => {
            document.querySelector("body").setAttribute("data-bs-theme", "light");
            document.querySelector("#dl-icon").setAttribute("class", "bi bi-moon-fill");
            localStorage.setItem("theme", "light");
        }

        const cambiarTema = () => {
            document.querySelector("body").getAttribute("data-bs-theme") === "light" ? temaOscuro() : temaClaro();
        }

        // PARA GUARDAR EL COLOR DE LA PAGINA (tutorial 2)
        window.addEventListener('load', () => {
            const theme = localStorage.getItem("theme");
            if (theme === "dark") {
                temaOscuro();
            } else {
                temaClaro();
            }
        });

    </script>

    <!-- ////////////////////TRADUCTOR/////////////////////////////////-->

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es', includedLanguajes: 'en,es'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body