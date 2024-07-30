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
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header-admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        #search-bar {
            display: none;
            position: absolute;
            top: 70px;
            /* Ajusta según tu diseño */
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
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary >
    <div class=" container-fluid">
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
                        <li><a class="dropdown-item" href="agregar_admin.php">Agregar</a></li>
                        <li><a class="dropdown-item" href="editar_admin.php">Editar</a></li>
                        <li><a class="dropdown-item" href="eliminar_admin.php">Eliminar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Asistente
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="agregar_asistente.php">Agregar</a></li>
                        <li><a class="dropdown-item" href="editar_asistente.php">Editar</a></li>
                        <li><a class="dropdown-item" href="eliminar_asistente.php">Eliminar</a></li>
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
            <a href="../chat/chat_admin.php" class="btn btn-outline-success ms-1" type="button">
                <i class="bi bi-chat"></i> Chat
            </a>
            <a class="btn btn-registro ms-1" href="cerrar.php" type="button">Cerrar Sesión</a>
            <?php
            // codigo para imprimir la foto de perfil o en caso de que se si tenga
            if (!($foto == null)) {
                 ?>
                <img src="data:image/jpg;base64,<?php echo base64_encode($foto) ?>" class="rounded-circle mx-1 my-auto border border-1 border-black" id="lupa" alt="" height="35px" width="35px">

            <?php ;
            } else {
                 ?>
                      <img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" class="rounded-circle mx-1 my-auto border border-1 border-black" id="lupa" alt="" height="35px" width="35px">
                 <?php
            }
            ?>
            <button class="btn btn-primary-outline ms-1" type="button" id="search-btn">
                <img src="../imagen/header/lupa.png" id="lupa" alt="" width="30"> Buscar
            </button>
        </div>
        </div>
    </nav>

    <!-- Search Bar -->
    <div id="search-bar" class="input-group mt-3 p-3">
        <input type="text" class="form-control" id="search-input" placeholder="Buscar...">
        <div class="search-suggestions" id="search-suggestions"></div>
    </div>

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
</body>

</html>