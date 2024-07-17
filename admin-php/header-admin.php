<?php
session_start();
include ("conex.php");
$sesion= $_SESSION['correo'];
if ($sesion == null || $sesion=='' ){
    header ("Location:../html/index.php");
}
// proceso para poder mostrar el nombre de usuario y no el correo de el usuario 

if ($conexion){
    $consul = "SELECT * FROM administradores where email='$sesion'";
    $resul = mysqli_query($conexion,$consul);
    if ($resul){
        while ($row = $resul->fetch_array()){
            $nomAdmin = $row['nomAdmin'];
            $foto = $row['foto'];
        }
    }
}
    // se incluye el header para no tener que cambiar las demas rutas
?>
<link rel="stylesheet" href="../css/header-admin.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index_admin.php"><img src="../imagen/admin/Logo.png" alt="" id="logo"></a>
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
                            <li><a class="dropdown-item" href="eliminar_admin.php">Eliminar</a></li>
                        </ul>
                    </li>
                    <!---->
                    <!---->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Asistente
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="agregar_asistente.php">Agregar</a></li>
                            <li><a class="dropdown-item" href="editar_empleado.php">Editar</a></li>
                            <li><a class="dropdown-item" href="eliminar_empleado.php">Eliminar</a></li>
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
                            <li><a class="dropdown-item" href="eliminar_usuario.php">Eliminar</a></li>
                        </ul>
                    </li>
                    <!---->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Vuelos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="agregar_vuelo.php">Agregar</a></li>
                            <li><a class="dropdown-item" href="editar_vuelo.php">Editar</a></li>
                            <li><a class="dropdown-item" href="eliminar_vuelo.php">Eliminar</a></li>
                        </ul>
                    </li>

                </ul>
                <a class="btn btn-registro ms-1 " href="cerrar.php" type="button">Cerrar Sesión</a>
                <img src="data:image/jpg;base64,<?php echo base64_encode($foto)?>" class="rounded-circle mx-1 my-auto border border-1 border-black" id="lupa" alt=""  height="35px" width="35px">

                <a href="../html/busqueda.html" class="btn  btn-primary-outline ms-1" type="submit"><img
                        src="../imagen/header/lupa.png" class="" id="lupa" alt="" width="30"> Buscar</a>
            </div>
        </div>
    </nav>