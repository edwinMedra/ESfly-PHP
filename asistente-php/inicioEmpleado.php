<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/inicioAyudanteEspecial.css">
    <link rel="stylesheet" href="../css/headerr.css">
    <link rel="stylesheet" href="../css/pie.css">
    <!--Fin tipografia-->

    <title>Inicio Asistente</title>
</head>
<?php include("header_ayudante.php") ?>
<?php
// consultar si hay notificaciones de parte de un usuario
$noti = $conexion->query("SELECT * FROM vueloUsuarioAsistente WHERE idAsistente = '$sesion' and estado=1");
$resul = mysqli_num_rows($noti);
if ($resul){
   $ban = "bg-danger";
   $texto = 'Tienes una cita pendiente';
}else{
    $ban = "bg-primary";
    $texto = "";
}
?>
<!--HEADER DE AYUDANTE ESPECIAL-->
</head>

<style>
    .profile-card {
    background-color: transparent;
    border: 1px solid #999999;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    margin-bottom: 20px;
}


    .profile-card img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
    }

    .profile-info {
        margin-top: 10px;
    }

    .profile-info h5 {
        margin: 10px 0;
    }

    .btn-edit {
        background-color: #0d6efd;
        color: white;
        border-radius: 20px;
        padding: 5px 20px;
        border: none;
    }

    .section-card {
        background-color: #4a6f91;
        color: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .section-card:hover {
        background-color: #6f7f91;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        transform: scale(1.05);
    }

    .section-card:nth-child(2):hover {
        background-color: #8a99a9;
    }

    .section-card h5 {
        margin-bottom: 10px;
    }

    .section-card img {
        width: 100px;
        height: 100px;
    }

    .col-profile {
        flex: 0 0 60%; 
    }

    .col-sections {
        flex: 0 0 40%; 
    }

    .section-card + .section-card {
        margin-top: 15px; 
    }
</style>


<body>

    <div class="back">
        <img src="../imagen/AsistentesDisponibles/asistentes2.png" alt="" />
        <div class="titulo">
            <p>Asistente Especial</p>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <!-- Perfil de Usuario -->
            <div class="col-lg-6 col-md-12 col-profile">
                <div class="profile-card shadow">
                    <a href="#" class="d-block mb-2 text-muted">Mi perfil ></a>
                    <?php
                    if ($foto == null) {
                        ?>
                            <img src="../imagen/datosCuenta/foto_usuario.png" alt="" class="rounded-circle border border-1 border-black mx-5" id="perfil">
                        <?php
                    }else{
                    ?>
                    <img src="data:image/jpg;base64,<?php echo base64_encode($foto)?>" alt="" id="perfil" class="rounded-circle border border-1 border-black mx-5"  height="55px" width="55px">
                    <?php
                    }
                    ?>
                    <div class="profile-info">
                    <h5><?php echo $nombre ?></h5>
                    <p><b>Horario de servicio:</b> <?php echo $horario ?></p>
                    </div>
                    <a class="btn btn-primary mt-3" href="datos de cuenta.php">Editar perfil</a>
                </div>
            </div>

            <!-- Secciones de Citas y Asistente -->
            <div class="col-lg-4 col-md-12 col-sections">
            <a href="citas_empleados.php">
                <div class="section-card shadow">
                    <h5>Citas</h5>
                    <img src="../imagen/inicioAsistente/citas.png" alt="Icono de Citas">
                </div>
                </a>

                <a href="informacion.php">
                <div class="section-card shadow" style="background-color: #6f7f91;">    
                    <h5>¿Qué debe hacer un asistente?</h5>
                    <img src="../imagen/inicioAsistente/mensajes.png" alt="Icono de Asistente">
                </div>
                </a>
            </div>
        </div>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>