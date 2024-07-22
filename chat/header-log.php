<?php
include("conex.php");
session_start();

date_default_timezone_set('America/El_Salvador');

$id = $_SESSION['$id'];
if ($id == null || $id == '') {
    header("Location:../html/index.php");
}
// proceso para poder mostrar el nombre de usuario y no el correo de el usuario 
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
        }
    } else {
        header("Location:../admin-php/index_admin.php");
    }
}
?>
<!--Inicio header-->

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-navbar fixed-top">
    <div class="container-fluid">

        <a class="navbar-brand" href="../html-php/index.php">
            <img src="../imagen/estoyAnsioso/esflyInfo.png" class="" id="logo" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../html-php/Reservarvuelos.php">Reserva tu vuelo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html-php/ofertasYDestinos.php">Ofertas y destinos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html-php/check-in.php">Check-in</a>
                </li>
            </ul>

            <span class="navbar-text"></span>

            <form class="d-flex justify-content-center" role="search">
                <a href="chat_cliente.php" class="btn btn-outline-success ms-1 " type="button">
                    <i class="bi bi-chat"></i> Chat
                </a>
                <a href="../html-php/cerrar.php" class="btn btn-outline-primary ms-1" type="submit">Cerrar sesión</a>
                <label for="lupa">
                    <?php
                    if ($foto == null) {
                        echo '<a href="../html-php/datos de cuenta.php"><img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" class="rounded-circle my-auto border border-1 border-black mx-1" id="lupa" alt=""  height="35px" width="35px"></a>';
                    } else {
                        echo '<a href="../html-php/datos de cuenta.php"><img src="data:image/jpg;base64,' . base64_encode($foto) . '" class="rounded-circle my-auto border border-1 border-black mx-1" id="lupa" alt="" height="35px" width="35px" style="object-fit: cover;"></a>';
                    }
                    ?>
                </label>
                <a class="btn btn-registro ms-1" href="../html-php/datos de cuenta.php" type="submit"><?php echo $nomCliente; ?></a>
            </form>
            <a href="../html-php/busqueda.php" class="btn btn-outline-primary ms-1" type="submit"><img src="../imagen/header/lupa.png" class="" id="lupa" alt="" width="30"> Buscar</a>
        </div>
    </div>
</nav>

<!--Fin header-->
