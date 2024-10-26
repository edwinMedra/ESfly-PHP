<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">

  <!--Comentario sobre el link para importar la tipografia-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/reservarVuelos1.css" />
  <link rel="stylesheet" href="../css/headerr.css" />
  <link rel="stylesheet" href="../css/pie.css" />
  <title>Boletos</title>

  <style>
    body {
      font-family: "Be Vietnam Pro";
    }

    .text-formu {
      font-weight: bold;
      font-family: "Be Vietnam Pro";
    }


    .contenedor {
      position: relative;
    }

    .carousel-item img {
      filter: brightness(40%);
    }

    .tarjeta-comida {
      position: relative;
      overflow: hidden;
      border-radius: 15px;
    }

    .tarjeta-comida img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 15px;
      transition: 0.3s ease;
    }

    .tarjeta-comida:hover img {
      filter: brightness(30%);
    }

    .tarjeta-comida .cuerpo-tarjeta {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
      width: 100%;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .tarjeta-comida:hover .cuerpo-tarjeta {
      opacity: 1;
    }

    .imagen-empleado {
      width: 50px;
      height: 50px;
      object-fit: cover;
      border-radius: 50%;
      margin-right: 10px;
    }

    .tarjeta-empleado {
      display: flex;
      align-items: center;
    }

    .tarjeta-empleado .cuerpo-tarjeta {
      display: flex;
      align-items: center;
      justify-content: flex-start;
    }

    .tarjeta-empleado .cuerpo-tarjeta h6 {
      margin: 0;
    }

    .info-vuelo .col-md-3 {
      padding: 10px;
    }
  </style>
</head>

<body>

  <?php
  include("header-log.php");
  ?>


  <!-- Estructura principal de pagina principal -->
  <div class="contenedor">

    <div class="texto-superpuesto">
      <p>Boletos reservados</p>
    </div>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="../imagen/reservadevuelos/fondo1.png" class="d-block w-100 h-200" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="../imagen/reservadevuelos/fondo2.png" class="d-block w-100 h-200" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="../imagen/reservadevuelos/fondo3.png" class="d-block w-100 h-200" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>

  <?php
  include("../conex.php");

  ?>


  <div class="container-fluid">
    <?php

    $fechaEntrada = $_GET['fecha'];
    $origen = $_GET['origen'];
    $destino = $_GET['destino'];
    // funcion para llamar a los datos de vuelo para poder colocarlos en la pagina web
    if ($fechaEntrada == null or $origen == null or $destino == null) {
    } else {
      include("../conex.php");
      if ($conexion) {
        $consul = "SELECT * FROM vuelo where origen='$origen' or destino='$destino' or fechaEntrada='$fechaEntrada%'";
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
            <div class="container-fluid my-5">
              <h2 class="text-center">Vuelos seleccionados</h2>
            </div>
            <div class="container rounded-4 border border-1 border-black w-100 p-0 my-5 ">
              <div class="row ">
                <div class="col-8 mt-4">
                  <div class="row d-flex mx-auto my-4 w-75 border border-black border-1 rounded-5">
                    <div class="col py-1 d-flex py-1" id="origen">
                      <img src="../imagen/argentina/plane.png" alt="" class="">
                      <x class="mt-2"> <b>ORIGEN:</b> <?php echo $origen ?></x>
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
    }
    ?>
  </div>
  <!--informacion de los vuelos q ha reservado este usuario-->
  <?php
  // Traer información de el vuelo 
  $infoFactura = $conexion->query("select * from facturaVueloNormal inner join facturaAsientos on facturaVueloNormal.idAsientos = facturaAsientos.id where facturaVueloNormal.idUsuario = $id");
  // verificar si hay facturas para este usuario
  $ban = mysqli_num_rows($infoFactura);
  if ($ban) {
    echo '
  <div class="container-fluid my-5">
    <h2 class="text-center">Reservas realizadas anteriormente</h2>
    <div class="container-fluid">
      <!--Informacion de los vuelos donde el usuario ha seleccionado un asiento-->
    </div>
  </div>
  ';
    while ($rowFactura = $infoFactura->fetch_array()) {
      $idVueloFactura = $rowFactura['idVuelo'];
      $cantidadAsientos = $rowFactura['cantidadAsientos']; // cantidad de asientos que selecciono el usuario
      $precio = $rowFactura['precio']; // precio del vuelo
      $tipoVuelo = $rowFactura['tipoVuelo']; // tipo del vuelo 


      $A1 = $rowFactura['A1'];
      $A2 = $rowFactura['A2'];
      $A3 = $rowFactura['A3'];
      $A4 = $rowFactura['A4'];
      $A5 = $rowFactura['A5'];
      $A6 = $rowFactura['A6'];
      $B1 = $rowFactura['B1'];
      $B2 = $rowFactura['B2'];
      $B3 = $rowFactura['B3'];
      $B4 = $rowFactura['B4'];
      $B5 = $rowFactura['B5'];
      $B6 = $rowFactura['B6'];
      $C1 = $rowFactura['C1'];
      $C2 = $rowFactura['C2'];
      $C3 = $rowFactura['C3'];
      $C4 = $rowFactura['C4'];
      $C5 = $rowFactura['C5'];
      $C6 = $rowFactura['C6'];
      $D1 = $rowFactura['D1'];
      $D2 = $rowFactura['D2'];
      $D3 = $rowFactura['D3'];
      $D4 = $rowFactura['D4'];
      $D5 = $rowFactura['D5'];
      $D6 = $rowFactura['D6'];
      $E1 = $rowFactura['E1'];
      $E2 = $rowFactura['E2'];
      $E3 = $rowFactura['E3'];
      $E4 = $rowFactura['E4'];
      $E5 = $rowFactura['E5'];
      $E6 = $rowFactura['E6'];
      $F1 = $rowFactura['F1'];
      $F2 = $rowFactura['F2'];
      $F3 = $rowFactura['F3'];
      $F4 = $rowFactura['F4'];
      $F5 = $rowFactura['F5'];
      $F6 = $rowFactura['F6'];
      $G1 = $rowFactura['G1'];
      $G2 = $rowFactura['G2'];
      $G3 = $rowFactura['G3'];
      $G4 = $rowFactura['G4'];
      $G5 = $rowFactura['G5'];
      $G6 = $rowFactura['G6'];
      $H1 = $rowFactura['H1'];
      $H2 = $rowFactura['H2'];
      $H3 = $rowFactura['H3'];
      $H4 = $rowFactura['H4'];
      $H5 = $rowFactura['H5'];
      $H6 = $rowFactura['H6'];
      $I1 = $rowFactura['I1'];
      $I2 = $rowFactura['I2'];
      $I3 = $rowFactura['I3'];
      $I4 = $rowFactura['I4'];
      $I5 = $rowFactura['I5'];
      $I6 = $rowFactura['I6'];
      $J1 = $rowFactura['J1'];
      $J2 = $rowFactura['J2'];
      $J3 = $rowFactura['J3'];
      $J4 = $rowFactura['J4'];
      $J5 = $rowFactura['J5'];
      $J6 = $rowFactura['J6'];
      $K1 = $rowFactura['K1'];
      $K2 = $rowFactura['K2'];
      $K3 = $rowFactura['K3'];
      $K4 = $rowFactura['K4'];
      $K5 = $rowFactura['K5'];
      $K6 = $rowFactura['K6'];
      // unción para asiento 

      // llamar información del vuelo 
      $infoVuelo = $conexion->query("SELECT * FROM vuelo where idVuelo = '$idVueloFactura'");
      $rowInfoVuelo = $infoVuelo->fetch_array();
      $origenLlegada = $rowInfoVuelo['origen'];
      $destinoSalida = $rowInfoVuelo['destino'];
      $fechaSalidaFactura = $rowInfoVuelo['fechaSalida'];
      $fechaEntradaFactura = $rowInfoVuelo['fechaEntrada'];
      $fotoPais = $rowInfoVuelo['foto'];
      // Empieza estructura de HTML

  ?>

      <div class="container mt-5">
        <div class="card">

          <h3 class="titulo-tarjeta text-center mt-5 mb-5">
            <img src="../imagen/header/favicon.png" class="img-fluid me-3" width="35" alt="Logo"> Información de tu vuelo:
          </h3>

          <div class="card-body">

            <div class="mb-4">

              <div class="row info-vuelo">
                <div class="col-md-3 text-center">
                  <p><strong>Minutos para Aterrizar:</strong></p>
                  <p id="minutos-para-aterrizar">1h:00:00</p>
                </div>
                <div class="col-md-3 text-center">
                  <p><strong>Hora de Llegada:</strong></p>
                  <p id="hora-llegada"><?php echo $fechaEntradaFactura ?></p>
                </div>
                <div class="col-md-3 text-center">
                  <p><strong>País de Origen:</strong></p>
                  <p><?php echo $origenLlegada ?></p>
                </div>
                <div class="col-md-3 text-center">
                  <p><strong>País de Llegada:</strong></p>
                  <p><?php echo $destinoSalida ?></p>
                </div>
              </div>
            </div>

            <div class="mb-0">
              <h6>Tipo de Vuelo:</h6>
              <button class="btn btn-primary"><?php
                                              if ($tipoVuelo == 1) {
                                                echo "Vuelo Normal";
                                              } else if ($tipoVuelo == 2) {
                                                echo "Vuelo VIP";
                                              } else if ($tipoVuelo == 3) {
                                                echo "Vuelo Especial";
                                              }
                                              ?></button>

            </div>
            <div class="mt-2">
              <h6>Asientos Reservados:</h6>
              <?php
              if ($A1 == 'ocupado') {
                echo '<button class="btn btn-primary">A1</button>';
              }
              if ($A2 == 'ocupado') {
                echo '<button class="btn btn-primary">A2</button>';
              }
              if ($A3 == 'ocupado') {
                echo '<button class="btn btn-primary">A3</button>';
              }
              if ($A4 == 'ocupado') {
                echo '<button class="btn btn-primary">A4</button>';
              }
              if ($A5 == 'ocupado') {
                echo '<button class="btn btn-primary">A5</button>';
              }
              if ($A6 == 'ocupado') {
                echo '<button class="btn btn-primary">A6</button>';
              }

              if ($B1 == 'ocupado') {
                echo '<button class="btn btn-primary">B1</button>';
              }
              if ($B2 == 'ocupado') {
                echo '<button class="btn btn-primary">B2</button>';
              }
              if ($B3 == 'ocupado') {
                echo '<button class="btn btn-primary">B3</button>';
              }
              if ($B4 == 'ocupado') {
                echo '<button class="btn btn-primary">B4</button>';
              }
              if ($B5 == 'ocupado') {
                echo '<button class="btn btn-primary">B5</button>';
              }
              if ($B6 == 'ocupado') {
                echo '<button class="btn btn-primary">B6</button>';
              }

              if ($C1 == 'ocupado') {
                echo '<button class="btn btn-primary">C1</button>';
              }
              if ($C2 == 'ocupado') {
                echo '<button class="btn btn-primary">C2</button>';
              }
              if ($C3 == 'ocupado') {
                echo '<button class="btn btn-primary">C3</button>';
              }
              if ($C4 == 'ocupado') {
                echo '<button class="btn btn-primary">C4</button>';
              }
              if ($C5 == 'ocupado') {
                echo '<button class="btn btn-primary">C5</button>';
              }
              if ($C6 == 'ocupado') {
                echo '<button class="btn btn-primary">C6</button>';
              }

              if ($D1 == 'ocupado') {
                echo '<button class="btn btn-primary">D1</button>';
              }
              if ($D2 == 'ocupado') {
                echo '<button class="btn btn-primary">D2</button>';
              }
              if ($D3 == 'ocupado') {
                echo '<button class="btn btn-primary">D3</button>';
              }
              if ($D4 == 'ocupado') {
                echo '<button class="btn btn-primary">D4</button>';
              }
              if ($D5 == 'ocupado') {
                echo '<button class="btn btn-primary">D5</button>';
              }
              if ($D6 == 'ocupado') {
                echo '<button class="btn btn-primary">D6</button>';
              }

              if ($E1 == 'ocupado') {
                echo '<button class="btn btn-primary">E1</button>';
              }
              if ($E2 == 'ocupado') {
                echo '<button class="btn btn-primary">E2</button>';
              }
              if ($E3 == 'ocupado') {
                echo '<button class="btn btn-primary">E3</button>';
              }
              if ($E4 == 'ocupado') {
                echo '<button class="btn btn-primary">E4</button>';
              }
              if ($E5 == 'ocupado') {
                echo '<button class="btn btn-primary">E5</button>';
              }
              if ($E6 == 'ocupado') {
                echo '<button class="btn btn-primary">E6</button>';
              }

              if ($F1 == 'ocupado') {
                echo '<button class="btn btn-primary">F1</button>';
              }
              if ($F2 == 'ocupado') {
                echo '<button class="btn btn-primary">F2</button>';
              }
              if ($F3 == 'ocupado') {
                echo '<button class="btn btn-primary">F3</button>';
              }
              if ($F4 == 'ocupado') {
                echo '<button class="btn btn-primary">F4</button>';
              }
              if ($F5 == 'ocupado') {
                echo '<button class="btn btn-primary">F5</button>';
              }
              if ($F6 == 'ocupado') {
                echo '<button class="btn btn-primary">F6</button>';
              }

              if ($G1 == 'ocupado') {
                echo '<button class="btn btn-primary">G1</button>';
              }
              if ($G2 == 'ocupado') {
                echo '<button class="btn btn-primary">G2</button>';
              }
              if ($G3 == 'ocupado') {
                echo '<button class="btn btn-primary">G3</button>';
              }
              if ($G4 == 'ocupado') {
                echo '<button class="btn btn-primary">G4</button>';
              }
              if ($G5 == 'ocupado') {
                echo '<button class="btn btn-primary">G5</button>';
              }
              if ($G6 == 'ocupado') {
                echo '<button class="btn btn-primary">G6</button>';
              }

              if ($H1 == 'ocupado') {
                echo '<button class="btn btn-primary">H1</button>';
              }
              if ($H2 == 'ocupado') {
                echo '<button class="btn btn-primary">H2</button>';
              }
              if ($H3 == 'ocupado') {
                echo '<button class="btn btn-primary">H3</button>';
              }
              if ($H4 == 'ocupado') {
                echo '<button class="btn btn-primary">H4</button>';
              }
              if ($H5 == 'ocupado') {
                echo '<button class="btn btn-primary">H5</button>';
              }
              if ($H6 == 'ocupado') {
                echo '<button class="btn btn-primary">H6</button>';
              }

              if ($I1 == 'ocupado') {
                echo '<button class="btn btn-primary">I1</button>';
              }
              if ($I2 == 'ocupado') {
                echo '<button class="btn btn-primary">I2</button>';
              }
              if ($I3 == 'ocupado') {
                echo '<button class="btn btn-primary">I3</button>';
              }
              if ($I4 == 'ocupado') {
                echo '<button class="btn btn-primary">I4</button>';
              }
              if ($I5 == 'ocupado') {
                echo '<button class="btn btn-primary">I5</button>';
              }
              if ($I6 == 'ocupado') {
                echo '<button class="btn btn-primary">I6</button>';
              }

              if ($J1 == 'ocupado') {
                echo '<button class="btn btn-primary">J1</button>';
              }
              if ($J2 == 'ocupado') {
                echo '<button class="btn btn-primary">J2</button>';
              }
              if ($J3 == 'ocupado') {
                echo '<button class="btn btn-primary">J3</button>';
              }
              if ($J4 == 'ocupado') {
                echo '<button class="btn btn-primary">J4</button>';
              }
              if ($J5 == 'ocupado') {
                echo '<button class="btn btn-primary">J5</button>';
              }
              if ($J6 == 'ocupado') {
                echo '<button class="btn btn-primary">J6</button>';
              }

              if ($K1 == 'ocupado') {
                echo '<button class="btn btn-primary">K1</button>';
              }
              if ($K2 == 'ocupado') {
                echo '<button class="btn btn-primary">K2</button>';
              }
              if ($K3 == 'ocupado') {
                echo '<button class="btn btn-primary">K3</button>';
              }
              if ($K4 == 'ocupado') {
                echo '<button class="btn btn-primary">K4</button>';
              }
              if ($K5 == 'ocupado') {
                echo '<button class="btn btn-primary">K5</button>';
              }
              if ($K6 == 'ocupado') {
                echo '<button class="btn btn-primary">K6</button>';
              }
              ?>


            </div>

            <!-- Empleados -->
            <div class="mb-4">
              <?php
              // ver si hay algun asistente 
              $infoAsistente = $conexion->query("SELECT * FROM vueloUsuarioAsistente where idVuelo = '$idVueloFactura' and idUsuario='$id'");
              $banAsistente = mysqli_num_rows($infoAsistente);
              if ($banAsistente) {
                $rowAsistente = $infoAsistente->fetch_array();
                $idAsistente = $rowAsistente['idAsistente'];
                $asistente = $conexion->query("SELECT * FROM asistente where idAsistente = '$idAsistente'");
                $rowInfoAsistente = $asistente->fetch_array();
                $nombreAsistente = $rowInfoAsistente['nomAsistente'];
                $apellidoAsistente = $rowInfoAsistente['apeAsistente'];
                $nombreCompletoAsistente = $nombreAsistente . " " . $apellidoAsistente;
                $fotoAsistente = $rowInfoAsistente['foto'];
              ?>
                <h6>Empleado Especial:</h6>
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <div class="card tarjeta-empleado">
                      <div class="cuerpo-tarjeta">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($fotoAsistente) ?>" alt="" class="imagen-empleado">
                        <h6><?php echo $nombreCompletoAsistente ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>

              <a href="factura.php?idVuelo=<?php echo $idVueloFactura ?>" class="text-decoration-none text-black">
                <div class="row">
                  <h6>Factura:</h6>
                  <div class="col-md-4 mb-5">
                    <div class="card tarjeta-empleado">
                      <div class="cuerpo-tarjeta">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($fotoPais) ?>" alt="" class="imagen-empleado">
                        <h6>Ver Factura completa</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </a>

              <div class="mb-4">
                <h6>Servicio en el Vuelo:</h6>
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <div class="card tarjeta-comida">
                      <img src="data:image/jpg;base64,<?php echo base64_encode($fotoPais) ?>" alt="Comida Aburrido">
                      <div class="cuerpo-tarjeta">
                        <h4>¿Estás ansioso?</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card tarjeta-comida">
                      <img src="data:image/jpg;base64,<?php echo base64_encode($fotoPais) ?>" alt="Comida Ansioso">
                      <div class="cuerpo-tarjeta">
                        <h4>¿Estás aburrido?</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card tarjeta-comida">
                      <img src="data:image/jpg;base64,<?php echo base64_encode($fotoPais) ?>" alt="Comida">
                      <div class="cuerpo-tarjeta">
                        <h4>Comida</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!---->

      </div>

  <?php



    }
  } else {
    echo "<h4 class='text-center my-5'>No hay vuelos reservados</h4>";
  }
  //
  // asientos normales
  /*function idAsiento($id, $asiento){
  include("../conex.php");
    $asientoCon = $conexion->query("SELECT * FROM asientos where cliente$asiento = '$id'");
    $filAsiento = mysqli_num_rows($asientoCon);
    if ($filAsiento) {
  ?>
      <button class="btn btn-primary "><?php echo $asiento ?></button>
    <?php
    }
  }*/

  // Fin asientos VIP
  // mostrar solo los que esten con el propio


  // proceso de los div para mostrar todos los vuelos con su id de vuelo 
  // caso de los boletos sean especiales o comunes
  /* while ($rowVuelo = $misVuelosVIP->fetch_array() ) {
      $idVuelo2 = $rowVuelo['idVuelo'];
      $destino1 = $rowVuelo['destino'];
      $idVuelo1 = $rowVuelo['idVuelo'];
      // consulta para tener información de vuelo
      $conVuelo = $conexion->query("SELECT * FROM vuelo WHERE idVuelo = '$idVuelo1'");
      // consulta de el origen de el vuelo
      $rowOrigen = $conVuelo->fetch_assoc();
      $origen1 = $rowOrigen['origen'];
      $fechaSalida1 = $rowOrigen['fechaSalida'];
      $fechaEntrada1 = $rowOrigen['fechaEntrada'];
      $foto = $rowOrigen['foto'];
    */ ?>
  <!---->

  <?php
  include("pie.php")
  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>