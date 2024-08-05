<?php
include("conex.php");
session_start();
$id = $_SESSION['$id'];

if ($id == null || $id == '') {
    header("Location:../html/index.php");
}
// hacer consulta en caso de que el usuario haya sido eliminado
$delete = $conexion->query("SELECT * FROM usuario where idCliente='$id'");
$resul = mysqli_num_rows($delete);
if (!($resul)) {
    session_destroy();
    echo "<script>
window.location.href = '../html/index.php';
</script>";
}

// Proceso para mostrar el nombre de usuario en lugar del correo
include("conex.php");
if ($conexion) {
    $consul = "SELECT * FROM usuario where idCliente='$id'";
    $resul = mysqli_query($conexion, $consul);
    $filas = mysqli_num_rows($resul);
    if ($filas) {
        while ($row = $resul->fetch_array()) {
            $nomCliente = $row['nomCliente'];
            $apeCliente = $row['apeCliente'];
            $dui = $row['dui'];
            $email = $row['correo'];
            $pasaporte = $row['pasaporte'];
            $foto = $row['foto'];
            $idCliente = $row['idCliente'];
            $pass = $row['pass'];
            $nombreCompleto = $nomCliente ." ".$apeCliente;
        }
    } else {
        header("Location:../admin-php/index_admin.php");
    }
}
?>
<!--Inicio header-->

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

        .fijo {
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
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-navbar fixed-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="index.php">
                <img src="../imagen/estoyAnsioso/esflyInfo.png" class="" id="logo" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Reservarvuelos.php">Reserva tu vuelo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ofertasYDestinos.php">Ofertas y destinos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="check-in.php">Check-in</a>
                    </li>
                </ul>

                <span class="navbar-text"></span>



                <form class="d-flex" role="search">

                    <a href="../chat/chat_cliente.php" class="btn  " type="button">
                        <img src="../imagen/header_ayudante/boleto.png" class="" id="" alt="" width="20"> Boletos
                    </a>

                    <a href="../chat/chat_cliente.php" class="btn  " type="button">
                        <img src="../imagen/header_ayudante/chats.png" class="" id="" alt="" width="20"> Chats
                    </a>

                    <label for="lupa">
                        <?php
                        if ($foto == null) {
                            echo '<div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../imagen/header_ayudante/logo_usuario.png" class="rounded-circle border ms-2 border-1 border-black mx-1" id="lupa" alt="" height="35px" width="35px">
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item fijo " type="">¡Hola, ' . htmlspecialchars($nomCliente) . '!</a></li><hr>
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
                            <li><a class="dropdown-item fijo " type="">¡Hola, ' . htmlspecialchars($nomCliente) . '!</a></li><hr>
                            <li><a class="dropdown-item" href="datos de cuenta.php">Ver perfil</a></li>
                            <li><a class="dropdown-item" href="cerrar.php">Cerrar sesión</a></li>
                        </ul>
                    </div>';
                        }
                        ?>
                    </label>





                </form>
                <!--<a class="btn  ms-" href="datos de cuenta.php" type="submit"><?php //echo $nomCliente; 
                                                                                    ?></a>-->


                <!--BOTON DE TEMAS  -->
                <button onclick="cambiarTema()" class="btn rounded-fill  ms-1"><i id="dl-icon" class="bi bi-moon-fill"></i></button>

                <div class="nav-item dropdown ms-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../imagen/header/traductor.png" class="me-2" id="lupa" alt="" width="20">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" onclick="setLanguage('es')" href="">Español</a></li>
                        <li><a class="dropdown-item" onclick="setLanguage('en')" href="">Inglés</a></li>
                    </ul>
                </div>


                <form class="d-flex" role="search">
                    <button class="btn ms-1" type="button" id="search-btn">
                        <img src="../imagen/header/lupa.png" class="" id="lupa" alt="" width="20"> Buscar
                    </button>
                </form>






            </div>


        </div>
    </nav>

    <!-- Search Bar -->
    <div id="search-bar" class="input-group mt-3 p-3">
        <input type="text" class="form-control" id="search-input" placeholder="Buscar...">
        <div class="search-suggestions" id="search-suggestions"></div>
    </div>

    <script>
        /*////////////////////////TRADUCTOR//////////////////////////////////////////*/

        // Diccionario de traducción
        const translations = {
            "es": {
                "text": "Hola, ¿cómo estás? Gracias por visitar mi página."
            },
            "en": {
                "text": "Hello, how are you? Thank you for visiting my page."
            }
        };

        function setLanguage(language) {
            // Obtener el texto traducido según el idioma seleccionado
            const translatedText = translations[language].text;

            // Actualizar el contenido del DOM
            document.getElementById("textContent").textContent = translatedText;
        }

        // Configurar idioma inicial (opcional)
        setLanguage('es'); // Cambia 'es' a 'en' si deseas comenzar en inglés


        /*//////////////////////////////////////////////////////////////////*/
        const searchBtn = document.getElementById('search-btn');
        const searchBar = document.getElementById('search-bar');
        const searchInput = document.getElementById('search-input');
        const searchSuggestions = document.getElementById('search-suggestions');

        const pages = [{
                name: "Reserva tu vuelo",
                url: "Reservarvuelos.php"
            },
            {
                name: "Ofertas y destinos",
                url: "ofertasYDestinos.php"
            },
            {
                name: "Check-in",
                url: "check-in.php"
            },
            {
                name: "Iniciar sesión",
                url: "login.php"
            },
            {
                name: "Registrarse",
                url: "registro.php"
            }
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

</body>

</html>