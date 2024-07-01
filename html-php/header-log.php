<?php
session_start();
include("conex.php");
$sesion = $_SESSION['correo'];
if ($sesion == null || $sesion == '') {
    header("Location:../html/index.html");
?><h1>Usted no tiene autorización para ingresar a esta pagina</h1><br>
    <h1>Ingrese nuevamente</h1> <?php
                            }
                            // proceso para poder mostrar el nombre de usuario y no el correo de el usuario 
                            $inc = include("conex.php");
                            if ($inc) {
                                $consul = "SELECT * FROM usuario where correo='$sesion'";
                                $resul = mysqli_query($conexion, $consul);
                                if ($resul) {
                                    while ($row = $resul->fetch_array()) {
                                        $nomCliente = $row['nomCliente'];
                                        $apeCliente = $row['apeCliente'];
                                        $dui = $row['dui'];
                                        $email = $row['correo'];
                                        $pasaporte = $row['pasaporte'];
                                        $foto = $row['foto'];
                                        $idCliente = $row['idCliente'];
                                        $pass = $row['pass'];
                                    }
                                }
                            }
                            // se incluye el header para no tener que cambiar las demas rutas

                                ?>
<!--Inicio header-->
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
                    <a class="nav-link " aria-current="page" href="Reservarvuelos.php">Reserva tu vuelo</a>
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
       
                <a href="cerrar.php" class="btn btn-primary-outline-success btn-primary ms-1" type="submit">Cerrar sesión</a>
                <label for="lupa">
                <?php
                if ($foto == null) {
                    echo '<a href="datos de cuenta.php"><img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" class="rounded-circle my-auto border border-1 border-black mx-1" id="lupa" alt=""  height="35px" width="35px"></a>';
                } else {
                ?> <a href="datos de cuenta.php"> <img src="data:image/jpg;base64,<?php echo base64_encode($foto) ?>" class="rounded-circle my-auto border border-1 border-black mx-1" id="lupa" alt="" height="35px" width="35px"></a>
                <?php
                }
                ?>
                </label>


                <a class="btn btn-registro ms-1 " href="datos de cuenta.php" type="submit"><?php echo $nomCliente ?></a>

            </form>
            <a href="busqueda.php" class="btn  btn-primary-outline ms-1" type="submit"><img src="../imagen/header/lupa.png" class="" id="lupa" alt="" width="30"> Buscar</a>
        </div>
    </div>
</nav>

<!--Fin header-->