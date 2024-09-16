<!DOCTYPE html>
<html lang="en">

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
  <title>Reserva de vuelos</title>

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
  // se inicia proceso para poder llamar a los vuelos el cual ese usuario ha reservad

  ?>
  <!--Fin header-->


  <!-- Estructura principal de pagina principal -->
  <div class="contenedor">

    <div class="texto-superpuesto">
      <p>Reserva tu vuelo</p>
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
  include("conex.php");
  error_reporting(0);
  ?>

  <div class=" texto-titulo container mt-5">
    <h5 id="search-flight-title">Busca un vuelo ></h5>
  </div>
  <!-- CUADRO DE BUSCAR VUELOS -->
  <div class="container mt-4 d-flex justify-content-center">
    <div class="card card-buscar p-4" style="width: 100%; max-width: 900px;">
      <div class="card-body">
        <h5 id="search-flight" class="card-title text-center text-formu" style="font-size: 24px;">Busca tu Vuelo:</h5>
        <form class="form-inline justify-content-center" method="get" action="Reservarvuelos.php">
          <div class="form-group mt-4 d-flex align-items-center" style="width: 100%;">
            <label id="flight-date" class="text-formu font-weight-bold" style="flex: 0 0 150px;">Fecha de Vuelo:</label>
            <input type="date" class="form-control" id="fechaVuelo" placeholder="Fecha de Vuelo" name="fecha" style="flex: 1;">
          </div>
          <div class="form-group mt-4 d-flex align-items-center" style="width: 100%;">
            <label id="origin-country" class="text-formu font-weight-bold" style="flex: 0 0 150px;">País de Origen:</label>
            <select class="form-control" id="Origen" name="origen" style="flex: 1;">
              <option value="Antigua y Barbuda">Antigua y Barbuda</option>
              <option value="Argentina">Argentina</option>
              <option value="Bahamas">Bahamas</option>
              <option value="Barbados">Barbados</option>
              <option value="Belice">Belice</option>
              <option value="Bolivia">Bolivia</option>
              <option value="Brasil">Brasil</option>
              <option value="Canada">Canadá</option>
              <option value="Chile">Chile</option>
              <option value="Colombia">Colombia</option>
              <option value="Costa Rica">Costa Rica</option>
              <option value="Cuba">Cuba</option>
              <option value="Dominica">Dominica</option>
              <option value="Ecuador">Ecuador</option>
              <option value="El Salvador">El Salvador</option>
              <option value="Estados-Unidos">Estados Unidos</option>
              <option value="Granada">Granada</option>
              <option value="Guatemala">Guatemala</option>
              <option value="Guyana">Guyana</option>
              <option value="Haiti">Haití</option>
              <option value="Honduras">Honduras</option>
              <option value="Jamaica">Jamaica</option>
              <option value="Mexico">México</option>
              <option value="Nicaragua">Nicaragua</option>
              <option value="Panama">Panamá</option>
              <option value="Paraguay">Paraguay</option>
              <option value="Peru">Perú</option>
              <option value="Republica Dominicana">República Dominicana</option>
              <option value="San Cristobal y Nieves">San Cristóbal y Nieves</option>
              <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
              <option value="Santa Lucia">Santa Lucía</option>
              <option value="Surinam">Surinam</option>
              <option value="Trinidad y Tobago">Trinidad y Tobago</option>
              <option value="Uruguay">Uruguay</option>
              <option value="Venezuela">Venezuela</option>
            </select>
          </div>
          <div class="form-group mt-4 d-flex align-items-center" style="width: 100%;">
            <label id="destination-country" for="Destino" class="text-titulo text-formu font-weight-bold" style="flex: 0 0 150px;">País de Destino:</label>
            <select class="form-control" id="Destino" name="destino" style="flex: 1;">
              <option value="Antigua y Barbuda">Antigua y Barbuda</option>
              <option value="Argentina">Argentina</option>
              <option value="Bahamas">Bahamas</option>
              <option value="Barbados">Barbados</option>
              <option value="Belice">Belice</option>
              <option value="Bolivia">Bolivia</option>
              <option value="Brasil">Brasil</option>
              <option value="Canada">Canadá</option>
              <option value="Chile">Chile</option>
              <option value="Colombia">Colombia</option>
              <option value="Costa Rica">Costa Rica</option>
              <option value="Cuba">Cuba</option>
              <option value="Dominica">Dominica</option>
              <option value="Ecuador">Ecuador</option>
              <option value="El Salvador">El Salvador</option>
              <option value="Estados-Unidos">Estados Unidos</option>
              <option value="Granada">Granada</option>
              <option value="Guatemala">Guatemala</option>
              <option value="Guyana">Guyana</option>
              <option value="Haiti">Haití</option>
              <option value="Honduras">Honduras</option>
              <option value="Jamaica">Jamaica</option>
              <option value="Mexico">México</option>
              <option value="Nicaragua">Nicaragua</option>
              <option value="Panama">Panamá</option>
              <option value="Paraguay">Paraguay</option>
              <option value="Peru">Perú</option>
              <option value="Republica Dominicana">República Dominicana</option>
              <option value="San Cristobal y Nieves">San Cristóbal y Nieves</option>
              <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
              <option value="Santa Lucia">Santa Lucía</option>
              <option value="Surinam">Surinam</option>
              <option value="Trinidad y Tobago">Trinidad y Tobago</option>
              <option value="Uruguay">Uruguay</option>
              <option value="Venezuela">Venezuela</option>
            </select>
          </div>
          <div class="text-center mt-4">
            <button id="search-btn" type="submit" class="btn btn-primary" style="width: 100%;">Buscar Vuelo</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <?php

    $fechaEntrada = $_GET['fecha'];
    $origen = $_GET['origen'];
    $destino = $_GET['destino'];
    // funcion para llamar a los datos de vuelo para poder colocarlos en la pagina web
    if ($fechaEntrada == null or $origen == null or $destino == null) {
    } else {
      echo '<h2 class="text-center mt-5">Vuelos seleccionados</h2>';
      include("conex.php");
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
                    <a href="botones_tipoVuelo.php?idVuelo=<?php echo $idVuelo?>" class="text-decoration-none text-white btn-primary btn mx-auto">Tomar vuelo</a>
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
  <div class="col-md-3 mt-5 mb-5"></div>

  <?php
  include("pie.php")
  ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>