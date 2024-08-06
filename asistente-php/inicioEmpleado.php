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

<!--HEADER DE AYUDANTE ESPECIAL-->
</head>

<style>
 
    #perfil {
    min-height: 180px;
    max-height: 180px;
    min-width:  180px;
    max-width:  180px;
    object-fit: cover;
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

        <div class=" texto-titulo container-fluid  mt-5 mb-5 ps-5">
            <h5>Algunas ofertas ></h5>
        </div>

        <div class="perfil-ayudante">
            <?php
            if ($foto == null) {
                ?>
                <img src="../imagen/datosCuenta/foto_usuario.png" alt="" class="rounded-circle border border-1 border-black mx-5" id="perfil">
                <?php
            }else{
                ?>
                <img src="data:image/jpg;base64,<?php echo base64_encode($foto)?>" alt="" id="perfil" class="rounded-circle border border-1 border-black mx-5"  height="35px" width="35px">
                <?php
            }
            ?>
            <div>
                <h5><?php echo $nombre ?></h5>
                <p>Horas de servicio</p>
                <?php echo $horario ?>
                <button class="btn btn-primary">Editar perfil</button>
            </div>
        </div>


        <div class=" texto-titulo container-fluid  mt-5 mb-5 ps-5">
            <h5>Datos y chats</h5>
        </div>


        <div class="seccion-datos row mt-4">
            <div class="col-md-6">
                <div class=" chat-boton card p-4 mt-2 mb-5">
                    <div class="  card-body">
                        <h5 class="text-white">Chat</h5>
                        <img src="../imagen/inicioAsistente/mensajes.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="citas-boton card p-4  mt-2 mb-5">
                    <div class="card-body">
                        <h5 class="text-white">Citas</h5>
                        <img src="../imagen/inicioAsistente/citas.png" alt="" />

                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>