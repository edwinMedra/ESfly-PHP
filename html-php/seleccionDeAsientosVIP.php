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
$sesion = $_SESSION['correo'];
$inc1 = include("conex.php");
if ($inc1) {
  $consul = "SELECT * FROM usuario where correo='$sesion'";
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
      $A1 = $rowAsientos['A1'];
      $A2 = $rowAsientos['A2'];
      $A3 = $rowAsientos['A3'];
      $A4 = $rowAsientos['A4'];
      $A5 = $rowAsientos['A5'];
      $A6 = $rowAsientos['A6'];
    }
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
    <form action="" method="post">
      <div class="seating" id="seating">

        <!-- Asientos del Avion-->
        <div class="row justify-content-center row-spacing">
          <div class="seat-group">


            <label for="A1d">
              <button type="button" class="seat" id="A1" onclick="toggleCheckbox('A1d')">A1</button>
              <input type="checkbox" id="A1d" name="A1" value="A1" class="">
            </label>


          </div>
          <div class="seat-group">


            <label for="A2d">
              <button type="button" class="seat" id="A2" onclick="toggleCheckbox('A2d')">A2</button>
              <input type="checkbox" id="A2d" name="A2" value="A2" class="">
            </label>



          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas 2 y 3 -->
          <div class="seat-group">

            <label for="A3d">
              <button type="button" class="seat" id="A3" onclick="toggleCheckbox('A3d')">A3</button>
              <input type="checkbox" id="A3d" name="A3" value="A3" class="">
            </label>



          </div>
          <div class="seat-group">

            <label for="A4d">
              <button type="button" class="seat" id="A4" onclick="toggleCheckbox('A4d')">A4</button>
              <input type="checkbox" id="A4d" name="A4" value="A4" class="">
            </label>


          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas 4 y 5 -->
          <div class="seat-group">



            <label for="A5d">
              <button type="button" class="seat" id="A5" onclick="toggleCheckbox('A5d')">A5</button>
              <input type="checkbox" id="A5d" name="A5" value="A5" class="">
            </label>


          </div>
          <div class="seat-group">


            <label for="A6d">
              <button type="button" class="seat" id="A6" onclick="toggleCheckbox('A6d')">A6</button>
              <input type="checkbox" id="A6d" name="A6" value="A6" class="">
            </label>

          </div>
        </div>
        <div class="row justify-content-center row-spacing">
          <div class="seat-group">
            <div class="seat" id="B1">B1</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="B2">B2</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="B3">B3</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="B4">B4</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="B5">B5</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="B6">B6</div>
          </div>
        </div>
        <div class="row justify-content-center row-spacing row-offset">
          <div class="seat-group">
            <div class="seat" id="C1">C1</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="C2">C2</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="C3">C3</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="C4">C4</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="C5">C5</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="C6">C6</div>
          </div>
        </div>
        <div class="row justify-content-center row-spacing row-offset">
          <div class="seat-group">
            <div class="seat" id="D1">D1</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="D2">D2</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="D3">D3</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="D4">D4</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="D5">D5</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="D6">D6</div>
          </div>
        </div>
        <div class="row justify-content-center row-spacing row-offset">
          <div class="seat-group">
            <div class="seat" id="E1">E1</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="E2">E2</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="E3">E3</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="E4">E4</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="E5">E5</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="E6">E6</div>
          </div>
        </div>
        <div class="row justify-content-center row-spacing row-offset">
          <div class="seat-group">
            <div class="seat" id="F1">F1</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="F2">F2</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="F3">F3</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="F4">F4</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="F5">F5</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="F6">F6</div>
          </div>
        </div>

        <div class="row justify-content-center row-spacing row-offset">
          <div class="seat-group">
            <div class="seat" id="G1">G1</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="G2">G2</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="G3">G3</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="G4">G4</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="G5">G5</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="G6">G6</div>
          </div>
        </div>
        <div class="row justify-content-center row-spacing row-offset">
          <div class="seat-group">
            <div class="seat" id="H1">H1</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="H2">H2</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="H3">H3</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="H4">H4</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="H5">H5</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="H6">H6</div>
          </div>
        </div>
        <div class="row justify-content-center row-spacing row-offset">
          <div class="seat-group">
            <div class="seat" id="I1">I1</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="I2">I2</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="I3">I3</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="I4">I4</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="I5">I5</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="I6">I6</div>
          </div>
        </div>
        <div class="row justify-content-center row-spacing row-offset">
          <div class="seat-group">
            <div class="seat" id="J1">J1</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="J2">J2</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="J3">J3</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="J4">J4</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="J5">J5</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="J6">J6</div>
          </div>
        </div>
        <div class="row justify-content-center row-spacing row-offset">
          <div class="seat-group">
            <div class="seat" id="K1">K1</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="K2">K2</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="K3">K3</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="K4">K4</div>
          </div>
          <div class="seat-passage"></div>
          <div class="seat-group">
            <div class="seat" id="K5">K5</div>
          </div>
          <div class="seat-group">
            <div class="seat" id="K6">K6</div>
          </div>
        </div>
      </div>



  </div>
  <button role="submit" class="reserve-button" onclick="reserveSeats()" name="reserva">Reservar</button>
  </div>
  </form>
  <!--parte de inputs para poder almacenar los asientos que se compren y se guarden-->
  <script>
    function redireccionar() {
      window.location.href = 'index.php';
    }
    const seats = document.querySelectorAll('.seat');
    const totalBoletos = document.getElementById('total-boletos');
    const asientosReservados = document.getElementById('asientos-reservados');
    const seatLimit = parseInt(totalBoletos.textContent);

    seats.forEach(seat => {
      seat.addEventListener('click', () => {
        toggleSeatSelection(seat);
      });
    });

    function toggleSeatSelection(seat) {
      if (seat.classList.contains('selected')) {
        seat.classList.remove('selected');
      } else if (document.querySelectorAll('.seat.selected').length < seatLimit) {
        seat.classList.add('selected');
      }
      updateReservedCount();
    }

    function updateReservedCount() {
      const reservedSeats = document.querySelectorAll('.seat.selected').length;
      asientosReservados.textContent = reservedSeats;
    }

    function reserveSeats() {
      const reservedSeats = document.querySelectorAll('.seat.selected');
      if (reservedSeats.length === 0) {
        alert('Por favor selecciona al menos un asiento antes de reservar.');
      } else if (reservedSeats.length < seatLimit) {
        alert(`Aún te faltan boletos por reservar. Has seleccionado ${reservedSeats.length} asientos, pero necesitas ${seatLimit}.`);
      } else if (reservedSeats.length > seatLimit) {
        alert(`Has seleccionado más boletos de los permitidos. Solo puedes reservar ${seatLimit} asientos.`);
      } else {
        const reservedSeatNumbers = Array.from(reservedSeats).map(seat => seat.id);
        alert(`¡Vuelos reservados con éxito para los asientos: ${reservedSeatNumbers.join(', ')}!`)
      }
    }
  </script>
  <script>
    function toggleCheckbox(checkboxId) {
      var checkbox = document.getElementById(checkboxId);
      checkbox.checked = !checkbox.checked;
    }
  </script>
</body>

</html>

<?php
error_reporting(0);
// proceso para insertar los asientos
include("conex.php");
// adjuntar valores de los asientos
if (isset($_POST['reserva'])) {
  $A1 = $_POST['A1'];
  $A2 = $_POST['A2'];
  $A3 = $_POST['A3'];
  $A4 = $_POST['A4'];
  $A5 = $_POST['A5'];
  $A6 = $_POST['A6'];

  if ($A1 == "A1") {
    $update = "UPDATE asientos set A1='ocupado', clienteA1='$idCliente'";
    $resulUpdate = $conexion->query($update);
  }

  if ($A2 == "A2") {
    $update = "UPDATE asientos set A2='ocupado', clienteA2='$idCliente'";
    $resulUpdate = $conexion->query($update);
  }

  if ($A2 == "A2") {
    $update = "UPDATE asientos set A2='ocupado', clienteA2='$idCliente'";
    $resulUpdate = $conexion->query($update);
  }

  if ($A3 == "A3") {
    $update = "UPDATE asientos set A3='ocupado', clienteA3='$idCliente'";
    $resulUpdate = $conexion->query($update);
  }

  if ($A4 == "A4") {
    $update = "UPDATE asientos set A4='ocupado', clienteA4='$idCliente'";
    $resulUpdate = $conexion->query($update);
  }

  if ($A5 == "A5") {
    $update = "UPDATE asientos set A5='ocupado', clienteA5='$idCliente'";
    $resulUpdate = $conexion->query($update);
  }

  if ($A6 == "A6") {
    $update = "UPDATE asientos set A6='ocupado', clienteA6='$idCliente'";
    $resulUpdate = $conexion->query($update);
  }
  echo "<script>
   function redireccionar() {
window.location.href = 'infoAsistentes_disponibles.php?idVuelo=" .  $id . "';
}
redireccionar();
</script>";
  // actualizar estado de los asientos
}
// crear el insert para ingresar el valor de la base de datos

?>