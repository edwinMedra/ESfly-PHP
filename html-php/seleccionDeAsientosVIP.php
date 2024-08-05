<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap">
  <title>ESfly</title>
  <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f0f0;
    }

    .container {
      margin-top: 30px;
    }

    .titulo {
      display: flex;
      justify-content: center;
      margin: 50px 0;
    }

    .titulo .titulo-1 {
      font-family: "Bayon";
      font-size: 30px;
      color: #273758;
      margin: 0 20px;
    }

    .reserve-button {
      display: block;
      width: 200px;
      margin: 20px auto;
      padding: 10px;
      font-family: 'Bayon', sans-serif;
      font-size: 20px;
      color: white;
      background-color: #1A3D8C;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.3s;
    }

    .reserve-button:hover {
      background-color: #142d69;
      transform: scale(1.05);
    }

    .titulo .img img {
      width: 22px;
    }

    .seating {
      text-align: center;
      margin-top: 20px;
      background-color: #f0f0f0;
      padding: 20px;
      border-left: 10px solid #d0d0d0;
      border-right: 10px solid #d0d0d0;
    }

    .row-label {
      margin-bottom: 5px;
    }

    .seat {
      display: inline-block;
      width: 60px;
      height: 50px;
      line-height: 50px;
      text-align: center;
      border: 1px solid #ccc;
      margin: 2px;
      cursor: pointer;
      transition: transform 0.3s, background-color 0.3s, color 0.3s;
      border-radius: 5px;
    }

    .seat-group {
      margin-right: 10px;
    }

    .seat:hover {
      background-color: #1A3D8C;
      color: white;
      border: 1px solid white;
      transform: scale(1.1);
    }

    .seat.selected {
      background-color: #1A3D8C;
      color: white;
      border: 1px solid #ccc;
    }

    .row-offset {
      margin-top: 20px;
    }

    .row-separator {
      border-bottom: 2px solid #ccc;
      margin: 30px 0;
      padding-bottom: 10px;
    }

    .counter {
      background-color: #1b3366;
      color: white;
      padding: 6px 10px;
      border-radius: 8px;
      display: inline-block;
      font-size: 0.8rem;
      font-weight: bold;
    }

    .row-spacing {
      margin-top: 20px;
    }

    .seat-passage {
      width: 30px;
      border: none;
      background-color: transparent;
      cursor: default;
    }
  </style>
</head>
<?php
// proceso para poder insertar el cliente tambien
session_start();
$sesion = $_SESSION['$id'];
if ($sesion == null || $sesion == ''){
  header("Location:../html-php/index.php");
}
$inc1 = include("conex.php");
if ($inc1) {
  $consul = "SELECT * FROM usuario where idCliente='$sesion'";
  $resul = mysqli_query($conexion, $consul);
  if ($resul) {
    while ($row = $resul->fetch_array()) {
      $idCliente = $row['idCliente'];
    }
  }
}
// proceso para llamar a el vuelo en cuestion
$id = $_GET['idVuelo'];
include("conex.php");
if ($conexion) {
  $consul = "SELECT * FROM vuelo where idVuelo='$id' ";
  $resul = mysqli_query($conexion, $consul);
  if ($resul) {
    while ($row = $resul->fetch_array()) {
      $idvuelo = $row['idVuelo'];
      $destino = $row['destino'];
      $fechaentrada = $row['fechaEntrada'];
      $fechasalida = $row['fechaSalida'];
      $precio = $row['precio'];
    }
  }
}

?>
<?php
// proceso para ver los asientos disponibles de este vuelo 
if ($conexion) {
  $asientos = "SELECT * FROM asientos where idVuelo='$id'";
  $resulAsientos = $conexion->query($asientos);
  if ($resulAsientos) {
    while ($rowAsientos = $resulAsientos->fetch_array()) {
      // Asignar valores de las columnas A1 a K6 a variables
      $A1 = $rowAsientos['A1'];
      $A2 = $rowAsientos['A2'];
      $A3 = $rowAsientos['A3'];
      $A4 = $rowAsientos['A4'];
      $A5 = $rowAsientos['A5'];
      $A6 = $rowAsientos['A6'];

      $B1 = $rowAsientos['B1'];
      $B2 = $rowAsientos['B2'];
      $B3 = $rowAsientos['B3'];
      $B4 = $rowAsientos['B4'];
      $B5 = $rowAsientos['B5'];
      $B6 = $rowAsientos['B6'];

      $C1 = $rowAsientos['C1'];
      $C2 = $rowAsientos['C2'];
      $C3 = $rowAsientos['C3'];
      $C4 = $rowAsientos['C4'];
      $C5 = $rowAsientos['C5'];
      $C6 = $rowAsientos['C6'];

      $D1 = $rowAsientos['D1'];
      $D2 = $rowAsientos['D2'];
      $D3 = $rowAsientos['D3'];
      $D4 = $rowAsientos['D4'];
      $D5 = $rowAsientos['D5'];
      $D6 = $rowAsientos['D6'];

      $E1 = $rowAsientos['E1'];
      $E2 = $rowAsientos['E2'];
      $E3 = $rowAsientos['E3'];
      $E4 = $rowAsientos['E4'];
      $E5 = $rowAsientos['E5'];
      $E6 = $rowAsientos['E6'];

      $F1 = $rowAsientos['F1'];
      $F2 = $rowAsientos['F2'];
      $F3 = $rowAsientos['F3'];
      $F4 = $rowAsientos['F4'];
      $F5 = $rowAsientos['F5'];
      $F6 = $rowAsientos['F6'];

      $G1 = $rowAsientos['G1'];
      $G2 = $rowAsientos['G2'];
      $G3 = $rowAsientos['G3'];
      $G4 = $rowAsientos['G4'];
      $G5 = $rowAsientos['G5'];
      $G6 = $rowAsientos['G6'];

      $H1 = $rowAsientos['H1'];
      $H2 = $rowAsientos['H2'];
      $H3 = $rowAsientos['H3'];
      $H4 = $rowAsientos['H4'];
      $H5 = $rowAsientos['H5'];
      $H6 = $rowAsientos['H6'];

      $I1 = $rowAsientos['I1'];
      $I2 = $rowAsientos['I2'];
      $I3 = $rowAsientos['I3'];
      $I4 = $rowAsientos['I4'];
      $I5 = $rowAsientos['I5'];
      $I6 = $rowAsientos['I6'];

      $J1 = $rowAsientos['J1'];
      $J2 = $rowAsientos['J2'];
      $J3 = $rowAsientos['J3'];
      $J4 = $rowAsientos['J4'];
      $J5 = $rowAsientos['J5'];
      $J6 = $rowAsientos['J6'];

      $K1 = $rowAsientos['K1'];
      $K2 = $rowAsientos['K2'];
      $K3 = $rowAsientos['K3'];
      $K4 = $rowAsientos['K4'];
      $K5 = $rowAsientos['K5'];
      $K6 = $rowAsientos['K6'];
    }
  }
}
// funcion para colocar la clase en el codigo
function validar($numAsiento)
{
  if ($numAsiento == "ocupado") {
    echo 'class="seat btn-danger" disabled ';
  } else {
    echo 'class="seat" ';
  }
}

?>

<body>
  <div class="container">
    <div class="text-center">
      <div class="titulo">
        <div class="titulo-1">
          <h4>ASIENTOS ESPECIALES</h4>
        </div>

        <div class="img"><img src="../imagen/asientosVip/logito.png" alt=""></div>
      </div>
      <div class="container-fluid my-5">
        <h5>Usted ha seleccionado el vuelo con destino a <?php echo $destino ?> </h5>
        <h5>Con la fecha de entrada de: <?php echo $fechaentrada ?></h5>
        <h5>Con la fecha de salida de: <?php echo $fechasalida ?></h5>
      </div>
      <div class="row">
        <div class="col-md-6 text-center">
          <div class="counter">
            <p>Total de Boletos: <span id="total-boletos">2</span></p>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <div class="counter">
            <p>Asientos reservados: <span id="asientos-reservados">0</span></p>
          </div>
        </div>
      </div>
    </div>
    <form method="post" id="prueba" action="formularioPago.php?idVuelo=<?php echo $idvuelo?>">
      <div class="seating" id="seating">

        <!-- Asientos del Avion-->
        <div class="row justify-content-center row-spacing">
          <!-- Fila A -->
          <div class="seat-group">
            <label for="A1d">
              <button type="button" <?php validar($A1) ?> id="A1" onclick="toggleCheckbox('A1d')">A1</button>
              <input type="checkbox" id="A1d" name="A1" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="A2d">
              <button type="button" <?php validar($A2) ?> id="A2" onclick="toggleCheckbox('A2d')">A2</button>
              <input type="checkbox" id="A2d" name="A2" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas A y B -->
          <div class="seat-group">
            <label for="A3d">
              <button type="button" <?php validar($A3) ?> id="A3" onclick="toggleCheckbox('A3d')">A3</button>
              <input type="checkbox" id="A3d" name="A3" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="A4d">
              <button type="button" <?php validar($A4) ?> id="A4" onclick="toggleCheckbox('A4d')">A4</button>
              <input type="checkbox" id="A4d" name="A4" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="A5d">
              <button type="button" <?php validar($A5) ?> id="A5" onclick="toggleCheckbox('A5d')">A5</button>
              <input type="checkbox" id="A5d" name="A5" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="A6d">
              <button type="button" <?php validar($A6) ?> id="A6" onclick="toggleCheckbox('A6d')">A6</button>
              <input type="checkbox" id="A6d" name="A6" value="ocupado" class="xd">
            </label>
          </div>
        </div>

        <div class="row justify-content-center row-spacing">
          <!-- Fila B -->
          <div class="seat-group">
            <label for="B1d">
              <button type="button" <?php validar($B1) ?> id="B1" onclick="toggleCheckbox('B1d')">B1</button>
              <input type="checkbox" id="B1d" name="B1" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="B2d">
              <button type="button" <?php validar($B2) ?> id="B2" onclick="toggleCheckbox('B2d')">B2</button>
              <input type="checkbox" id="B2d" name="B2" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas B y C -->
          <div class="seat-group">
            <label for="B3d">
              <button type="button" <?php validar($B3) ?> id="B3" onclick="toggleCheckbox('B3d')">B3</button>
              <input type="checkbox" id="B3d" name="B3" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="B4d">
              <button type="button" <?php validar($B4) ?> id="B4" onclick="toggleCheckbox('B4d')">B4</button>
              <input type="checkbox" id="B4d" name="B4" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="B5d">
              <button type="button" <?php validar($B5) ?> id="B5" onclick="toggleCheckbox('B5d')">B5</button>
              <input type="checkbox" id="B5d" name="B5" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="B6d">
              <button type="button" <?php validar($B6) ?> id="B6" onclick="toggleCheckbox('B6d')">B6</button>
              <input type="checkbox" id="B6d" name="B6" value="ocupado" class="xd">
            </label>
          </div>
        </div>

        <div class="row justify-content-center row-spacing">
          <!-- Fila C -->
          <div class="seat-group">
            <label for="C1d">
              <button type="button" <?php validar($C1) ?> id="C1" onclick="toggleCheckbox('C1d')">C1</button>
              <input type="checkbox" id="C1d" name="C1" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="C2d">
              <button type="button" <?php validar($C2) ?> id="C2" onclick="toggleCheckbox('C2d')">C2</button>
              <input type="checkbox" id="C2d" name="C2" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas C y D -->
          <div class="seat-group">
            <label for="C3d">
              <button type="button" <?php validar($C3) ?> id="C3" onclick="toggleCheckbox('C3d')">C3</button>
              <input type="checkbox" id="C3d" name="C3" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="C4d">
              <button type="button" <?php validar($C4) ?> id="C4" onclick="toggleCheckbox('C4d')">C4</button>
              <input type="checkbox" id="C4d" name="C4" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="C5d">
              <button type="button" <?php validar($C5) ?> id="C5" onclick="toggleCheckbox('C5d')">C5</button>
              <input type="checkbox" id="C5d" name="C5" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="C6d">
              <button type="button" <?php validar($C6) ?> id="C6" onclick="toggleCheckbox('C6d')">C6</button>
              <input type="checkbox" id="C6d" name="C6" value="ocupado" class="xd">
            </label>
          </div>
        </div>

        <div class="row justify-content-center row-spacing">
          <!-- Fila D -->
          <div class="seat-group">
            <label for="D1d">
              <button type="button" <?php validar($D1) ?> id="D1" onclick="toggleCheckbox('D1d')">D1</button>
              <input type="checkbox" id="D1d" name="D1" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="D2d">
              <button type="button" <?php validar($D2) ?> id="D2" onclick="toggleCheckbox('D2d')">D2</button>
              <input type="checkbox" id="D2d" name="D2" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas D y E -->
          <div class="seat-group">
            <label for="D3d">
              <button type="button" <?php validar($D3) ?> id="D3" onclick="toggleCheckbox('D3d')">D3</button>
              <input type="checkbox" id="D3d" name="D3" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="D4d">
              <button type="button" <?php validar($D4) ?> id="D4" onclick="toggleCheckbox('D4d')">D4</button>
              <input type="checkbox" id="D4d" name="D4" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="D5d">
              <button type="button" <?php validar($D5) ?> id="D5" onclick="toggleCheckbox('D5d')">D5</button>
              <input type="checkbox" id="D5d" name="D5" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="D6d">
              <button type="button" <?php validar($D6) ?> id="D6" onclick="toggleCheckbox('D6d')">D6</button>
              <input type="checkbox" id="D6d" name="D6" value="ocupado" class="xd">
            </label>
          </div>
        </div>

        <div class="row justify-content-center row-spacing">
          <!-- Fila E -->
          <div class="seat-group">
            <label for="E1d">
              <button type="button" <?php validar($E1) ?> id="E1" onclick="toggleCheckbox('E1d')">E1</button>
              <input type="checkbox" id="E1d" name="E1" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="E2d">
              <button type="button" <?php validar($E2) ?> id="E2" onclick="toggleCheckbox('E2d')">E2</button>
              <input type="checkbox" id="E2d" name="E2" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas E y F -->
          <div class="seat-group">
            <label for="E3d">
              <button type="button" <?php validar($E3) ?> id="E3" onclick="toggleCheckbox('E3d')">E3</button>
              <input type="checkbox" id="E3d" name="E3" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="E4d">
              <button type="button" <?php validar($E4) ?> id="E4" onclick="toggleCheckbox('E4d')">E4</button>
              <input type="checkbox" id="E4d" name="E4" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="E5d">
              <button type="button" <?php validar($E5) ?> id="E5" onclick="toggleCheckbox('E5d')">E5</button>
              <input type="checkbox" id="E5d" name="E5" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="E6d">
              <button type="button" <?php validar($E6) ?> id="E6" onclick="toggleCheckbox('E6d')">E6</button>
              <input type="checkbox" id="E6d" name="E6" value="ocupado" class="xd">
            </label>
          </div>
        </div>

        <div class="row justify-content-center row-spacing">
          <!-- Fila F -->
          <div class="seat-group">
            <label for="F1d">
              <button type="button" <?php validar($F1) ?> id="F1" onclick="toggleCheckbox('F1d')">F1</button>
              <input type="checkbox" id="F1d" name="F1" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="F2d">
              <button type="button" <?php validar($F2) ?> id="F2" onclick="toggleCheckbox('F2d')">F2</button>
              <input type="checkbox" id="F2d" name="F2" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas F y G -->
          <div class="seat-group">
            <label for="F3d">
              <button type="button" <?php validar($F3) ?> id="F3" onclick="toggleCheckbox('F3d')">F3</button>
              <input type="checkbox" id="F3d" name="F3" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="F4d">
              <button type="button" <?php validar($F4) ?> id="F4" onclick="toggleCheckbox('F4d')">F4</button>
              <input type="checkbox" id="F4d" name="F4" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="F5d">
              <button type="button" <?php validar($F5) ?> id="F5" onclick="toggleCheckbox('F5d')">F5</button>
              <input type="checkbox" id="F5d" name="F5" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="F6d">
              <button type="button" <?php validar($F6) ?> id="F6" onclick="toggleCheckbox('F6d')">F6</button>
              <input type="checkbox" id="F6d" name="F6" value="ocupado" class="xd">
            </label>
          </div>
        </div>

        <div class="row justify-content-center row-spacing">
          <!-- Fila G -->
          <div class="seat-group">
            <label for="G1d">
              <button type="button" <?php validar($G1) ?> id="G1" onclick="toggleCheckbox('G1d')">G1</button>
              <input type="checkbox" id="G1d" name="G1" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="G2d">
              <button type="button" <?php validar($G2) ?> id="G2" onclick="toggleCheckbox('G2d')">G2</button>
              <input type="checkbox" id="G2d" name="G2" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas G y H -->
          <div class="seat-group">
            <label for="G3d">
              <button type="button" <?php validar($G3) ?> id="G3" onclick="toggleCheckbox('G3d')">G3</button>
              <input type="checkbox" id="G3d" name="G3" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="G4d">
              <button type="button" <?php validar($G4) ?> id="G4" onclick="toggleCheckbox('G4d')">G4</button>
              <input type="checkbox" id="G4d" name="G4" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="G5d">
              <button type="button" <?php validar($G5) ?> id="G5" onclick="toggleCheckbox('G5d')">G5</button>
              <input type="checkbox" id="G5d" name="G5" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="G6d">
              <button type="button" <?php validar($G6) ?> id="G6" onclick="toggleCheckbox('G6d')">G6</button>
              <input type="checkbox" id="G6d" name="G6" value="ocupado" class="xd">
            </label>
          </div>
        </div>

        <div class="row justify-content-center row-spacing">
          <!-- Fila H -->
          <div class="seat-group">
            <label for="H1d">
              <button type="button" <?php validar($H1) ?> id="H1" onclick="toggleCheckbox('H1d')">H1</button>
              <input type="checkbox" id="H1d" name="H1" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="H2d">
              <button type="button" <?php validar($H2) ?> id="H2" onclick="toggleCheckbox('H2d')">H2</button>
              <input type="checkbox" id="H2d" name="H2" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas H y I -->
          <div class="seat-group">
            <label for="H3d">
              <button type="button" <?php validar($H3) ?> id="H3" onclick="toggleCheckbox('H3d')">H3</button>
              <input type="checkbox" id="H3d" name="H3" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="H4d">
              <button type="button" <?php validar($H4) ?> id="H4" onclick="toggleCheckbox('H4d')">H4</button>
              <input type="checkbox" id="H4d" name="H4" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="H5d">
              <button type="button" <?php validar($H5) ?> id="H5" onclick="toggleCheckbox('H5d')">H5</button>
              <input type="checkbox" id="H5d" name="H5" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="H6d">
              <button type="button" <?php validar($H6) ?> id="H6" onclick="toggleCheckbox('H6d')">H6</button>
              <input type="checkbox" id="H6d" name="H6" value="ocupado" class="xd">
            </label>
          </div>
        </div>

        <div class="row justify-content-center row-spacing">
          <!-- Fila I -->
          <div class="seat-group">
            <label for="I1d">
              <button type="button" <?php validar($I1) ?> id="I1" onclick="toggleCheckbox('I1d')">I1</button>
              <input type="checkbox" id="I1d" name="I1" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="I2d">
              <button type="button" <?php validar($I2) ?> id="I2" onclick="toggleCheckbox('I2d')">I2</button>
              <input type="checkbox" id="I2d" name="I2" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas I y J -->
          <div class="seat-group">
            <label for="I3d">
              <button type="button" <?php validar($I3) ?> id="I3" onclick="toggleCheckbox('I3d')">I3</button>
              <input type="checkbox" id="I3d" name="I3" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="I4d">
              <button type="button" <?php validar($I4) ?> id="I4" onclick="toggleCheckbox('I4d')">I4</button>
              <input type="checkbox" id="I4d" name="I4" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="I5d">
              <button type="button" <?php validar($I5) ?> id="I5" onclick="toggleCheckbox('I5d')">I5</button>
              <input type="checkbox" id="I5d" name="I5" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="I6d">
              <button type="button" <?php validar($I6) ?> id="I6" onclick="toggleCheckbox('I6d')">I6</button>
              <input type="checkbox" id="I6d" name="I6" value="ocupado" class="xd">
            </label>
          </div>
        </div>

        <div class="row justify-content-center row-spacing">
          <!-- Fila J -->
          <div class="seat-group">
            <label for="J1d">
              <button type="button" <?php validar($J1) ?> id="J1" onclick="toggleCheckbox('J1d')">J1</button>
              <input type="checkbox" id="J1d" name="J1" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="J2d">
              <button type="button" <?php validar($J2) ?> id="J2" onclick="toggleCheckbox('J2d')">J2</button>
              <input type="checkbox" id="J2d" name="J2" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas J y K -->
          <div class="seat-group">
            <label for="J3d">
              <button type="button" <?php validar($J3) ?> id="J3" onclick="toggleCheckbox('J3d')">J3</button>
              <input type="checkbox" id="J3d" name="J3" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="J4d">
              <button type="button" <?php validar($J4) ?> id="J4" onclick="toggleCheckbox('J4d')">J4</button>
              <input type="checkbox" id="J4d" name="J4" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="J5d">
              <button type="button" <?php validar($J5) ?> id="J5" onclick="toggleCheckbox('J5d')">J5</button>
              <input type="checkbox" id="J5d" name="J5" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="J6d">
              <button type="button" <?php validar($J6) ?> id="J6" onclick="toggleCheckbox('J6d')">J6</button>
              <input type="checkbox" id="J6d" name="J6" value="ocupado" class="xd">
            </label>
          </div>
        </div>

        <div class="row justify-content-center row-spacing">
          <!-- Fila K -->
          <div class="seat-group">
            <label for="K1d">
              <button type="button" <?php validar($K1) ?> id="K1" onclick="toggleCheckbox('K1d')">K1</button>
              <input type="checkbox" id="K1d" name="K1" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="K2d">
              <button type="button" <?php validar($K2) ?> id="K2" onclick="toggleCheckbox('K2d')">K2</button>
              <input type="checkbox" id="K2d" name="K2" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas K y L -->
          <div class="seat-group">
            <label for="K3d">
              <button type="button" <?php validar($K3) ?> id="K3" onclick="toggleCheckbox('K3d')">K3</button>
              <input type="checkbox" id="K3d" name="K3" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="K4d">
              <button type="button" <?php validar($K4) ?> id="K4" onclick="toggleCheckbox('K4d')">K4</button>
              <input type="checkbox" id="K4d" name="K4" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="K5d">
              <button type="button" <?php validar($K5) ?> id="K5" onclick="toggleCheckbox('K5d')">K5</button>
              <input type="checkbox" id="K5d" name="K5" value="ocupado" class="xd">
            </label>
          </div>
          <div class="seat-group">
            <label for="K6d">
              <button type="button" <?php validar($K6) ?> id="K6" onclick="toggleCheckbox('K6d')">K6</button>
              <input type="checkbox" id="K6d" name="K6" value="ocupado" class="xd">
            </label>
          </div>
        </div>
      </div>
      <button type="submit" class="reserve-button" id="reserve-button">Reservar</button>
    </form>
  </div>

  <!-- Bootstrap and jQuery JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function redirect() {
      window.location.href = 'insert-asientos.php';
    }
    const totalBoletos = 2; // Cambia esto si el límite de boletos cambia

    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const totalBoletosElement = document.getElementById('total-boletos');
    const asientosReservadosElement = document.getElementById('asientos-reservados');
    const reserveButton = document.getElementById('reserve-button');

    let asientosReservados = 0;

    checkboxes.forEach(checkbox => {
      checkbox.addEventListener('change', (event) => {
        const checkbox = event.target;
        const isChecked = checkbox.checked;
        if (isChecked) {
          asientosReservados++;
        } else {
          asientosReservados--;
        }
        updateUI();
      });
    });

    function updateUI() {
      asientosReservadosElement.textContent = asientosReservados;
      if (asientosReservados >= totalBoletos) {
        checkboxes.forEach(checkbox => {
          if (!checkbox.checked) {
            checkbox.disabled = true;
          }
        });
      } else {
        checkboxes.forEach(checkbox => {
          checkbox.disabled = false;
        });
      }
    }

    function toggleCheckbox(id) {
      const checkbox = document.getElementById(id);
      checkbox.checked = !checkbox.checked;
      const event = new Event('change');
      checkbox.dispatchEvent(event);
    }

    function redirect() {
      document.getElementById('redirect-form').submit();
      window.location = ('insert-asientos.php');
    }
    reserveButton.addEventListener('click', () => {
      if (asientosReservados < totalBoletos) {} else {
        // Aquí puedes manejar el envío del formulario o la lógica de reserva
        redirect()
        alert("")
      }
    });
  </script>
</body>

</html>