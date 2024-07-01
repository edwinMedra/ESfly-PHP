<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESFLY</title>
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin3.css">
</head>
<style>

</style>
<body>
    <?php include("header-admin.php"); ?>
    <div class="back">
        <div><img src="../imagen/admin/back.png" alt=""></div>
        <div class="titulo text-white text-center">Editar Vuelos</div>
    </div>
    <div class="container-fluid my-5">
        <h2 class="text-center">Vuelos Registrados</h2>
    </div>
    <div class="col-lg-12 col-12 border border-black text-center mx-auto" id="usuT" >
                <h5>Vuelos</h5>
    </div>
    <div class="container-fluid" id="tabla" >
        <div class="row">
            <div class="col-lg-2  col-12 border border-black text-center"><b>Origen</b></div>
            <div class="col-lg-2  col-12 border border-black text-center"><b>Destino</b></div>
            <div class="col-lg-2  col-12 border border-black text-center"><b>Fecha de salida</b></div>
            <div class="col-lg-2  col-12 border border-black text-center"><b>Fecha de entrada</b></div>
            <div class="col-lg-1  col-12 border border-black text-center"><b>Precio</b></div>
            <div class="col-lg-1  col-12 border border-black text-center"><b>Foto</b></div>
            <div class="col-lg-1  col-12 border border-black text-center"><b>ID</b></div>
            <div class="col-lg-1  col-12 border border-black text-center"><b>Opción</b></div>
        </div>
    </div>
    <?php
    $inc = include("conex.php");
    if ($inc){
        $select = "SELECT * FROM vuelo";
        $query = mysqli_query($conexion,$select);
        if ($query){
            while ($row = $query->fetch_array()){
            $origen = $row['origen'];
            $destino = $row['destino'];
            $fechaSalida = $row['fechaSalida'];
            $fechaEntrada = $row['fechaEntrada'];
            $precio = $row['precio'];
            $foto = $row['foto'];
            $idVuelo = $row['idVuelo'];
            ?>
        <div class="container-fluid  rounded-1" id="tabla">
        <div class="row">
            <!--Tabla de datos de los usuarios-->
            <div class="col-lg-2  col-12 border border-black text-center"><?php echo $origen?></div>
            <div class="col-lg-2  col-12 border border-black text-center"><?php echo $destino?></div>
            <div class="col-lg-2  col-12 border border-black text-center"><?php echo $fechaSalida?></div>
            <div class="col-lg-2  col-12 border border-black text-center"><?php echo $fechaEntrada?></div>
            <div class="col-lg-1  col-12 border border-black text-center"><?php echo $precio?></div>
            <div class="col-lg-1  col-12 border border-black text-center"><img src="data:image/jpg;base64,<?php echo base64_encode($foto)?>" class="rounded-circle mx-1 my-auto border border-1 border-black" id="lupa" alt=""  height="35px" width="35px"></div>
            <div class="col-lg-1  col-12 border border-black text-center"><?php echo $idVuelo?></div>
            <div class="col-lg-1  col-12 border border-black text-center p-1"><a class="btn btn-primary" href="form-vuelo.php?idVuelo=<?php echo $idVuelo?> " role="button" id="link">Editar</a></div>            
            <!---->
        </div>
    </div>
            <?php
            }
        }
    }
    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>