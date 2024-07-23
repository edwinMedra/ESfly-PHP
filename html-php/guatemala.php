<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESfly</title>
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

</head>
<style>
    .back img {
        width: 100%;
        object-fit: cover;
        max-height: 600px;
        filter: brightness(50%);
        z-index: -1;
    }

    .titulo {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: "red hat display";
        font-size: 100px;
    }

    @media screen and (max-width:768px) {
        .titulo {
            position: absolute;
            top: 21%;
            font-size: 60px;
        }

        div>x {
            font-size: 10px;
        }

        .row {
            display: inline-block;
            width: 150%;
            margin: 0 auto;
        }

        .col-4 {
            margin: 0 17%;
        }

        #origen #calendar {
            width: 20px;
            margin-top: 6px;
        }
    }
</style>

<body>
    <?php
    include("header-log.php");
    ?>
    <div class="back">
        <div><img src="../imagen/guatemala/back.avif" alt=""></div>
        <div class="titulo text-white">Guatemala</div>
    </div>
    <!---->
    <div class="container m-5 fs-5">
        <p>Vuelos disponibles ></p>
    </div>
    <br>
    <hr>
    <?php
    include("conex.php");
    if ($conexion) {
        $consul = "SELECT * FROM vuelo where destino='Guatemala'";
        $resul = mysqli_query($conexion, $consul);
        if ($resul) {
            while ($row = $resul->fetch_array()) {
                $origen = $row['origen'];
                $destino = $row['destino'];
                $fechaSalida = $row['fechaSalida'];
                $fechaEntrada = $row['fechaEntrada'];
                $foto = $row['foto'];
                $idVuelo = $row['idVuelo'];
    ?>
                <div class="container rounded-4 border border-1 border-black w-100 p-0 my-5">
                    <div class="row">
                        <div class="col-8 mt-4">
                            <div class="row d-flex mx-auto my-4 w-75 border border-black border-1 rounded-5">
                                <div class="col py-1 d-flex py-1" id="origen">
                                    <img src="../imagen/argentina/plane.png" alt="" class="">
                                    <x class="mt-2"> <b>ORIGEN:</b> <?php echo $origen?></x>
                                </div>
                                <div class="col d-flex border border-top-0 border-end-0 border-bottom-0 border-black" id="origen">
                                    <img src="../imagen/argentina/end.png" alt="" class="mt-2">
                                    <x class="mt-3"> <b>DESTINO:</b> <?php echo $destino ?></x>
                                </div>
                            </div>
                            <!---->
                            <div class="row d-flex mx-auto my-4 w-75 border border-black border-1 rounded-5">
                                <div class="col py-1 d-flex py-1" id="origen">
                                    <img src="../imagen/argentina/calendar.png" alt="" class="" id="calendar">
                                    <x class="mt-2"> <b>IDA:</b> <?php echo $fechaSalida ?></x>
                                </div>
                                <div class="col d-flex border border-top-0 border-end-0 border-bottom-0 border-black" id="origen">
                                    <img src="../imagen/argentina/calendar.png" alt="" class="mt-1" id="calendar">
                                    <x class="mt-2"> <b>VUELTA:</b> <?php echo $fechaEntrada ?></x>
                                </div>
                            </div>
                            <div class="d-flex " id="boton">
                            <a href="formularioVueloEspecial.php?idVuelo=<?php echo $idVuelo ?>" class="text-decoration-none text-white btn-primary btn mx-auto">Tomar vuelo</a>
                            </div>
                        </div>
                        <!---->
                        <div class="col-4">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($foto) ?>" alt="" class="w-100 rounded-4 pe-0">
                        </div>
                    </div>
                </div>
    <?php
            }
        }
    }
    include("pie.php")
    ?>
</body>

</html>