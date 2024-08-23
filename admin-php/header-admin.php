<?php
session_start();
include("conex.php");
$sesion = $_SESSION['$id'];
if ($sesion == null || $sesion == '') {
    header("Location:../html/index.php");
}

// Proceso para mostrar el nombre de usuario y no el correo del usuario
if ($conexion) {
    $consul = "SELECT * FROM administradores WHERE idAdmin='$sesion'";
    $resul = mysqli_query($conexion, $consul);
    if ($resul) {
        while ($row = $resul->fetch_array()) {
            $nomAdmin = $row['nomAdmin'];
            $foto = $row['foto'];
        }
    }
}
$delete = $conexion->query("SELECT * FROM administradores where idAdmin='$sesion'");
$resul = mysqli_num_rows($delete);
if (!($resul)) {
    session_destroy();
    echo "<script>
window.location.href = '../html/index.php';
</script>";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header-admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!--Link de los iconos de boostrap admin --> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
/*buscador */
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
            color: #000000;
            padding: 5px 10px;
        }

        .fijo{
            background-color: #4d86e3; 
            color: white; 
            cursor: default;
        }

        .fijo:hover {
            cursor: default;
            background-color: #4d86e3; 
            color: white;
        }

        .nav-link.dropdown-toggle::after {
            display: none;
        }

         .dropdown-menu {
            position: absolute; 
            left: -50%; 
            transform: translateX(-50%); 
        }


          /* Colores del texto según el tema */
        body[data-bs-theme='dark'] .nav-link {
            color: #fff !important; 
        }

        body[data-bs-theme='light'] .nav-link {
            color: #000 !important; 
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

        .goog-te-banner-frame {
            display: none !important;
            opacity: 0;
            height: 0;
        }

        body {
            top: 0px !important;
        }

        /* Ocultar el logo de Google Translate */
        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            font-size: 0px;
        }    
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary >
    <div  class= "container-fluid">
        <a class="navbar-brand" href="index_admin.php"><img src="../imagen/admin/Logo.png" alt="" id="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Administrador
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item nav-link" href="agregar_admin.php">Agregar</a></li>
                        <li><a class="dropdown-item nav-link" href="editar_admin.php">Editar</a></li>
                        <li><a class="dropdown-item nav-link" href="eliminar_admin.php">Eliminar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Asistente
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item nav-link" href="agregar_asistente.php">Agregar</a></li>
                        <li><a class="dropdown-item nav-link" href="editar_asistente.php">Editar</a></li>
                        <li><a class="dropdown-item nav-link" href="eliminar_asistente.php">Eliminar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Usuario
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="agregar_usuario.php">Agregar</a></li>
                        <li><a class="dropdown-item" href="eliminar_usuario.php">Eliminar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Vuelos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="agregar_vuelo.php">Agregar</a></li>
                        <li><a class="dropdown-item" href="editar_vuelo.php">Editar</a></li>
                        <li><a class="dropdown-item" href="eliminar_vuelo.php">Eliminar</a></li>
                    </ul>
                </li>
            </ul>


    <!--////////////////////////DEMAS BOTONES ////////////////////////////////////////--> 


    <form class="d-flex" role="search">

    <button class="btn ms-1" type="button" id="chats">
    <img src="../imagen/header_ayudante/chats.png" class="me-2" id="" alt="" width="20"> Chats
</button>
</form>
  

<label for="lupa">
    <?php
    if ($foto == null) {
        echo '<div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="../imagen/header_ayudante/logo_usuario.png" class="rounded-circle border ms-2 border-1 border-black mx-1" id="lupa" alt="" height="35px" width="35px">
        </a>

        <ul class="dropdown-menu">
            <li><a class="dropdown-item fijo " type="">¡Hola, ' . htmlspecialchars( $nomAdmin) . '!</a></li><hr>
            <li><a class="dropdown-item" href="datos de cuenta.php">Ver perfil</a></li>
            <li><a class="dropdown-item" href="cerrar.php">Cerrar sesión</a></li>
        </ul>
    </div>';
    
    } else {
        echo '
        <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="datos de cuenta.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="data:image/jpg;base64,' . base64_encode($foto) . '" class="rounded-circle my-auto border border-1 border-black mx-1" id="lupa" alt="" height="35px" width="35px" style="object-fit: cover;">
        </a>

        <ul class="dropdown-menu">
        <hr>
            <li><a class="dropdown-item fijo " type="" id="hello">¡Hola, ' . htmlspecialchars($nomAdmin) . '!</a></li><hr>
            <li><a class="dropdown-item" href="datos de cuenta.php" id="verperfil" >Ver perfil</a></li>
            <li><a class="dropdown-item" href="cerrar.php" id="logout">Cerrar sesión</a></li>
        </ul>
    </div>';
    }
    ?>
</label>

</form>

<!--BOTON DE TEMAS-->
<button  onclick="cambiarTema()" class="btn rounded-fill  ms-1"><i id="dl-icon" class="bi bi-moon-fill"></i></button>

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
<form class="d-flex" role="search">
<button class="btn ms-1" type="button" id="search-btn">
    <img src="../imagen/header/lupa.png" class="" id="lupa" alt="" width="20"> Buscar
</button>
</form>


</div>

</div>
</nav>
        <!--///////////////////////termina DEMAS BOTONES ////////////////////////////////////////--> 


    <script>
        const searchBtn = document.getElementById('search-btn');
        const searchBar = document.getElementById('search-bar');
        const searchInput = document.getElementById('search-input');
        const searchSuggestions = document.getElementById('search-suggestions');

        const pages = [{
                name: "Administrador",
                url: "index_admin.php"
            },
            {
                name: "Agregar Administrador",
                url: "agregar_admin.php"
            },
            {
                name: "Eliminar Administrador",
                url: "eliminar_admin.php"
            },
            {
                name: "Editar Administrador",
                url: "editar_admin.php"
            },

            {
                name: "Agregar Asistente",
                url: "agregar_asistente.php"
            },
            {
                name: "Eliminar Asistente",
                url: "eliminar_asistente.php"
            },
            {
                name: "Editar Asistente",
                url: "editar_asistente.php"
            },

            {
                name: "Agregar Usuario",
                url: "agregar_usuario.php"
            },
            {
                name: "Eliminar Usuario",
                url: "eliminar_usuario.php"
            },


            {
                name: "Agregar Vuelo",
                url: "agregar_vuelo.php"
            },
            {
                name: "Eliminar Vuelo",
                url: "eliminar_vuelo.php"
            },
            {
                name: "Editar Vuelo",
                url: "editar_vuelo.php"
            },

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
                searchSuggestions.style.display = 'block'; // Mostrar sugerencias si hay resultados
            } else {
                searchSuggestions.style.display = 'none'; // Ocultar sugerencias si no hay resultados
            }
        });

        document.addEventListener('click', function(e) {
            if (!searchBar.contains(e.target) && e.target !== searchBtn) {
                searchBar.style.display = 'none'; // Ocultar el buscador si se hace clic fuera de él
            }
        });
    </script>
    <script>
// /////////////MODO OSCURO Y CLARO DE LA PAGINA////////////////////
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

        /*GUARDAR EL IDIOMA Y COLOR*/

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
</body>
</html>
</body>

</html>