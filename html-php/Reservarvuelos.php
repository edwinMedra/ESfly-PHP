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
    body{
      font-family: "Be Vietnam Pro";
    }

    .text-formu{
      font-weight: bold;
      font-family: "Be Vietnam Pro";
    }

    .texto-superpuesto {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 50px;
    text-align: center;
    padding: 10px;
    border-radius: 10px;
    z-index: 2;
    width: 80%;
  }
  .contenedor {
    position: relative;
  }

  .carousel-item img {
    filter: brightness(40%); 
  }
  </style>
</head>

<body>

  <?php
  include("header-log.php");
  // se inicia proceso para poder llamar a los vuelos el cual ese usuario ha reservad
  error_reporting(0);
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


<div class=" texto-titulo container mt-5">
    <h5 id="search-flight-title">Vuelos que he reservado ></h5>
</div>

  <div class="container-fluid">
    <?php

    $fechaEntrada = $_GET['fecha'];
    $origen = $_GET['origen'];
    $destino = $_GET['destino'];
    // funcion para llamar a los datos de vuelo para poder colocarlos en la pagina web
    if ($fechaEntrada == null or $origen == null or $destino == null) {
    } else {


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

  $misVuelos = $conexion->query("SELECT * FROM asientos WHERE 
  clienteA1 = '$id' OR 
  clienteA2 = '$id' OR 
  clienteA3 = '$id' OR 
  clienteA4 = '$id' OR 
  clienteA5 = '$id' OR 
  clienteA6 = '$id' OR 
  clienteB1 = '$id' OR 
  clienteB2 = '$id' OR 
  clienteB3 = '$id' OR 
  clienteB4 = '$id' OR 
  clienteB5 = '$id' OR 
  clienteB6 = '$id' OR 
  clienteC1 = '$id' OR 
  clienteC2 = '$id' OR 
  clienteC3 = '$id' OR 
  clienteC4 = '$id' OR 
  clienteC5 = '$id' OR 
  clienteC6 = '$id' OR 
  clienteD1 = '$id' OR 
  clienteD2 = '$id' OR 
  clienteD3 = '$id' OR 
  clienteD4 = '$id' OR 
  clienteD5 = '$id' OR 
  clienteD6 = '$id' OR 
  clienteE1 = '$id' OR 
  clienteE2 = '$id' OR 
  clienteE3 = '$id' OR 
  clienteE4 = '$id' OR 
  clienteE5 = '$id' OR 
  clienteE6 = '$id' OR 
  clienteF1 = '$id' OR 
  clienteF2 = '$id' OR 
  clienteF3 = '$id' OR 
  clienteF4 = '$id' OR 
  clienteF5 = '$id' OR 
  clienteF6 = '$id' OR 
  clienteG1 = '$id' OR 
  clienteG2 = '$id' OR 
  clienteG3 = '$id' OR 
  clienteG4 = '$id' OR 
  clienteG5 = '$id' OR 
  clienteG6 = '$id' OR 
  clienteH1 = '$id' OR 
  clienteH2 = '$id' OR 
  clienteH3 = '$id' OR 
  clienteH4 = '$id' OR 
  clienteH5 = '$id' OR 
  clienteH6 = '$id' OR 
  clienteI1 = '$id' OR 
  clienteI2 = '$id' OR 
  clienteI3 = '$id' OR 
  clienteI4 = '$id' OR 
  clienteI5 = '$id' OR 
  clienteI6 = '$id' OR 
  clienteJ1 = '$id' OR 
  clienteJ2 = '$id' OR 
  clienteJ3 = '$id' OR 
  clienteJ4 = '$id' OR 
  clienteJ5 = '$id' OR 
  clienteJ6 = '$id' OR 
  clienteK1 = '$id' OR 
  clienteK2 = '$id' OR 
  clienteK3 = '$id' OR 
  clienteK4 = '$id' OR 
  clienteK5 = '$id' OR 
  clienteK6 = '$id'");

  function idAsiento($id, $asiento)
  {
    include("conex.php");
    $asientoCon = $conexion->query("SELECT * FROM asientos where cliente$asiento = '$id'");
    $filAsiento = mysqli_num_rows($asientoCon);
    if ($filAsiento) {
    ?>
    <button class="bg-primary text-white border-0 p-2 rounded-3"><?php echo $asiento?></button>
    <?php
    }
  }

  // mostrar solo los que esten con el propio
  $fila = mysqli_num_rows($misVuelos);
  if (!($fila)) {
    echo "<h4 class='text-center'>No hay vuelos reservados</h4>";
  } else {
    echo '  <div class="container-fluid my-5">
    <h2 class="text-center">Reservas realizadas anteriormente</h2>
    <div class="container-fluid">
      <!--Informacion de los vuelos donde el usuario ha seleccionado un asiento-->
    </div>
  </div>';
    // proceso de los div para mostrar todos los vuelos con su id de vuelo 
    while ($rowVuelo = $misVuelos->fetch_array()) {
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
  ?>

      <div class="container-fluid  border border-black rounded-5 w-75 mx-auto p-3">
        <!--origen y destino de el vuelo-->
        <div class="row">
          <div class="col-lg-6 text-center"><strong>Origen: </strong><?php echo $origen1 ?></div>
          <div class="col-lg-6 text-center"><strong>Destino: </strong><?php echo $destino1 ?></div>
        </div>
        <!--hora y fecha de ese vuelo-->
        <div class="row mx-auto">
          <div class="col-lg-6 text-center"><strong>Fecha de entrada: </strong><?php echo $fechaEntrada1 ?></div>
          <div class="col-lg-6 text-center"><strong>Fecha de salida: </strong><?php echo $fechaSalida1 ?></div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <img src="data:image/jpg;base64,<?php echo base64_encode($foto) ?>" alt="" class="w-50 rounded-4 mx-auto m-2">
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <h5>Asientos Reservados:</h5>
            <?php 
            echo idAsiento($id, 'A1');
            echo idAsiento($id, 'A2');
            echo idAsiento($id, 'A3');
            echo idAsiento($id, 'A4');
            echo idAsiento($id, 'A5');
            echo idAsiento($id, 'A6');
            echo idAsiento($id, 'B1');
            echo idAsiento($id, 'B2');
            echo idAsiento($id, 'B3');
            echo idAsiento($id, 'B4');
            echo idAsiento($id, 'B5');
            echo idAsiento($id, 'B6');
            echo idAsiento($id, 'C1');
            echo idAsiento($id, 'C2');
            echo idAsiento($id, 'C3');
            echo idAsiento($id, 'C4');
            echo idAsiento($id, 'C5');
            echo idAsiento($id, 'C6');
            echo idAsiento($id, 'D1');
            echo idAsiento($id, 'D2');
            echo idAsiento($id, 'D3');
            echo idAsiento($id, 'D4');
            echo idAsiento($id, 'D5');
            echo idAsiento($id, 'D6');
            echo idAsiento($id, 'E1');
            echo idAsiento($id, 'E2');
            echo idAsiento($id, 'E3');
            echo idAsiento($id, 'E4');
            echo idAsiento($id, 'E5');
            echo idAsiento($id, 'E6');
            echo idAsiento($id, 'F1');
            echo idAsiento($id, 'F2');
            echo idAsiento($id, 'F3');
            echo idAsiento($id, 'F4');
            echo idAsiento($id, 'F5');
            echo idAsiento($id, 'F6');
            echo idAsiento($id, 'G1');
            echo idAsiento($id, 'G2');
            echo idAsiento($id, 'G3');
            echo idAsiento($id, 'G4');
            echo idAsiento($id, 'G5');
            echo idAsiento($id, 'G6');
            echo idAsiento($id, 'H1');
            echo idAsiento($id, 'H2');
            echo idAsiento($id, 'H3');
            echo idAsiento($id, 'H4');
            echo idAsiento($id, 'H5');
            echo idAsiento($id, 'H6');
            echo idAsiento($id, 'I1');
            echo idAsiento($id, 'I2');
            echo idAsiento($id, 'I3');
            echo idAsiento($id, 'I4');
            echo idAsiento($id, 'I5');
            echo idAsiento($id, 'I6');
            echo idAsiento($id, 'J1');
            echo idAsiento($id, 'J2');
            echo idAsiento($id, 'J3');
            echo idAsiento($id, 'J4');
            echo idAsiento($id, 'J5');
            echo idAsiento($id, 'J6');
            echo idAsiento($id, 'K1');
            echo idAsiento($id, 'K2');
            echo idAsiento($id, 'K3');
            echo idAsiento($id, 'K4');
            echo idAsiento($id, 'K5');
            echo idAsiento($id, 'K6'); 
            //  verificar si en este vuelo a reservado un asistente
            $sqlAsistente = $conexion->query("SELECT * FROM vueloUsuarioAsistente WHERE idUsuario = '$id' and idVuelo = '$idVuelo2' ");
            $rowAsis = $sqlAsistente->fetch_array();
            if($rowAsis['estado'] == 1){
              # echo "Usted tiene asistente";
              $idAsis = $rowAsis['idAsistente'];
              $takeAsis = $conexion->query("SELECT * FROM asistente WHERE idAsistente = '$idAsis'");
              $roAsis = $takeAsis->fetch_assoc();
              $nomAsis = $roAsis['nomAsistente'];
              $apeAsistente = $roAsis['apeAsistente'];
              $foto2 = $roAsis['foto'];
              ?>
              <div class="row">
                <div class="col-12">
                  <strong>Nombre de Asistente: <br></strong><?php echo $nomAsis . " " . $apeAsistente?><br>
                  <img src="data:image/jpg;base64,<?php echo base64_encode($foto2)?>" alt="" class="w-25 rounded-circle" style="object-fit: cover; min-width:100px; max-width:100px; min-height:100px; max-height:100px;" >
                </div>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
  <?php
    }
  }
  ?>
  <div class="col-md-3 mt-5 mb-5"></div>
  
  <?php
  include("pie.php")
  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>