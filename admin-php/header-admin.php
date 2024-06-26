<link rel="stylesheet" href="../css/header-admin.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../imagen/admin/Logo.png" alt="" id="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!---->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Administrador
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="agregar_admin.php">Agregar</a></li>
                            <li><a class="dropdown-item" href="editar_admin.php">Editar</a></li>
                            <li><a class="dropdown-item" href="elimnar_admin.php">Eliminar</a></li>
                        </ul>
                    </li>
                    <!---->
                    <!---->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Empleado
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="agregar_empleado.php">Agregar</a></li>
                            <li><a class="dropdown-item" href="editar_empleado.php">Editar</a></li>
                            <li><a class="dropdown-item" href="elimnar_empleado.php">Eliminar</a></li>
                        </ul>
                    </li>
                    <!---->
                    <!---->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Usuario
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="agregar_usuario.php">Agregar</a></li>
                            <li><a class="dropdown-item" href="editar_usuario.php">Editar</a></li>
                            <li><a class="dropdown-item" href="elimnar_usuario.php">Eliminar</a></li>
                        </ul>
                    </li>
                    <!---->

                </ul>
                <a class="btn btn-registro ms-1 " href="../html/registro.php" type="submit">Registrarse</a>
                <a href="../html/busqueda.html" class="btn  btn-primary-outline ms-1" type="submit"><img
                        src="../imagen/header/lupa.png" class="" id="lupa" alt="" width="30"> Buscar</a>
            </div>
        </div>
    </nav>