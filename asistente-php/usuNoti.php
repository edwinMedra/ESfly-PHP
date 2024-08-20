<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESFLY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/headerr.css">
    <link rel="stylesheet" href="../css/pie.css">
</head>
<style>
    #tabla {
        margin-top: 100px !important;
        width: 90%;
    }

    #tabla .col-12 {
        font-size: 12px;
    }

    #tabla img {
        max-height: 40px;
        max-width: 40px;
        object-fit: fill;
    }

    #logo {
        width: 100px !important;
    }
</style>

<body>
    <?php
    include("header_ayudante.php");
    ?>
    <div class="container-fluid mt-5" id="tabla">
        <div class="row">
            <div class="col-lg-1  col-12 border border-black text-center"><b>Vuelo</b></div>
            <div class="col-lg-3  col-12 border border-black text-center"><b>Nombre de usuario</b></div>
            <div class="col-lg-2  col-12 border border-black text-center"><b>Origen</b></div>
            <div class="col-lg-2  col-12 border border-black text-center"><b>Destino</b></div>
            <div class="col-lg-1  col-12 border border-black text-center"><b>Incapacidad</b></div>
            <div class="col-lg-1  col-12 border border-black text-center"><b>Dui</b></div>
            <div class="col-lg-1  col-12 border border-black text-center"><b>Perfil</b></div>
            <div class="col-lg-1  col-12 border border-black text-center"><b>Acción</b></div>
        </div>

        <?php
        // consulta de las notificaciones para este asistente
        $noti = $conexion->query("SELECT * FROM vueloUsuarioAsistente WHERE idAsistente = '$sesion'");
        $resul = mysqli_num_rows($noti);
        // datos de la base de datos 
        while ($row = $noti->fetch_array()) {
            // se toma los datos de la base de datos
            $idUsuario = $row['idUsuario'];
            $idVuelo = $row['idVuelo'];
            // fin base de datos
            $usuario = $conexion->query("SELECT * FROM usuario where idCliente = '$idUsuario'");
            $row1 = $usuario->fetch_array();
            // consulta para la info de vuelo
            $vuelo = $conexion->query("SELECT * FROM vuelo where idVuelo='$idVuelo'");
            $rowV = $vuelo->fetch_array();
            $fotoUsu = $row1['foto'];
            // consulta para la incapacidad de este usuario
            $form = $conexion->query("SELECT * FROM form where idVuelo='$idVuelo' and idUsuario='$idUsuario'");
            $rowF = $form->fetch_array();
        ?>

            <div class="row">
                <div class="col-lg-1   col-12 border border-black text-center"><b><?php echo $idVuelo ?></b></div>
                <div class="col-lg-3  col-12 border border-black text-center"><b><?php echo $row1['nomCliente'] . " " . $row1['apeCliente'] ?></b></div>
                <div class="col-lg-2  col-12 border border-black text-center"><b><?php echo $rowV['origen'] ?></b></div>
                <div class="col-lg-2  col-12 border border-black text-center"><b><?php echo $rowV['destino'] ?></b></div>
                <div class="col-lg-1  col-12 border border-black text-center"><b><?php echo $rowF['tipoIncapacidad']; ?></b></div>
                <div class="col-lg-1  col-12 border border-black text-center"><b><?php echo $row1['dui'] ?></b></div>
                <div class="col-lg-1  col-12 border border-black text-center"><?php if ($fotoUsu == null) {
                                                                                    echo '
            <img src="../imagen/header_ayudante/logo_usuario.png"  alt="" class="w-75 rounded-circle">
            ';
                                                                                } else {
                                                                                    echo '
            <img src="data:image/jpg;base64,<?php echo base64_encode($fotoUsu)?>" alt="" class="w-75 rounded-circle">
            ';
                                                                                } ?></div>
                <div class="col-lg-1  col-12 border border-black text-center">
                    <form action="" method="post">
                    <button href="" class="btn btn-primary my-auto p-1" type="submit">Visto</button></form>
                </div>
            </div>


        <?php
        }

        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
<?php 
    $sql = $conexion->query("UPDATE vueloUsuarioAsistente SET estado=2");
?>