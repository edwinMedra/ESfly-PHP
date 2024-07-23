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
      $A1 = $rowAsientos['A1'];
      $A2 = $rowAsientos['A2'];
      $A3 = $rowAsientos['A3'];
      $A4 = $rowAsientos['A4'];
      $A5 = $rowAsientos['A5'];
      $A6 = $rowAsientos['A6'];
    }
  }
}
// funcion para colocar la clase en el codigo
function validar($numAsiento){
  if ($numAsiento == "ocupado" ) {
    echo 'class="seat btn-danger" disabled ' ;
  }else{
    echo 'class="seat" ' ;
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
              <button type="button" <?php validar($A1)?> id="A1" onclick="toggleCheckbox('A1d')">A1</button>
              <input type="checkbox" id="A1d" name="A1" value="ocupado" class="hola">
            </label>
          </div>
          <div class="seat-group">
            <label for="A2d">
              <button type="button" <?php validar($A2)?> id="A2" onclick="toggleCheckbox('A2d')">A2</button>
              <input type="checkbox" id="A2d" name="A2" value="ocupado" class="hola">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas 2 y 3 -->
          <div class="seat-group">
            <label for="A3d">
              <button type="button" <?php validar($A3)?> id="A3" onclick="toggleCheckbox('A3d')">A3</button>
              <input type="checkbox" id="A3d" name="A3" value="ocupado" class="hola">
            </label>
          </div>
          <div class="seat-group">
            <label for="A4d">
              <button type="button" <?php validar($A4)?> id="A4" onclick="toggleCheckbox('A4d')">A4</button>
              <input type="checkbox" id="A4d" name="A4" value="ocupado" class="hola">
            </label>
          </div>
          <div class="seat-group">
            <label for="A5d">
              <button type="button" <?php validar($A5)?> id="A5" onclick="toggleCheckbox('A5d')">A5</button>
              <input type="checkbox" id="A5d" name="A5" value="ocupado" class="hola">
            </label>
          </div>
          <div class="seat-group">
            <label for="A6d">
              <button type="button" <?php validar($A6)?> id="A6" onclick="toggleCheckbox('A6d')">A6</button>
              <input type="checkbox" id="A6d" name="A6" value="ocupado" class="hola">
            </label>
          </div>
        </div>
        <div class="row justify-content-center row-spacing">
          <div class="seat-group">
            <label for="A1d">
              <button type="button" <?php validar($B1)?> id="B1" onclick="toggleCheckbox('B1d')">B1</button>
              <input type="checkbox" id="B1d" name="B1" value="ocupado" class="hola">
            </label>
          </div>
          <div class="seat-group">
            <label for="A2d">
              <button type="button" <?php validar($B2)?> id="B2" onclick="toggleCheckbox('B2d')">B2</button>
              <input type="checkbox" id="A2d" name="A2" value="ocupado" class="hola">
            </label>
          </div>
          <div class="seat-passage"></div> <!-- Pasillo entre columnas 2 y 3 -->
          <div class="seat-group">
            <label for="A3d">
              <button type="button" <?php validar($A3)?> id="A3" onclick="toggleCheckbox('A3d')">A3</button>
              <input type="checkbox" id="A3d" name="A3" value="ocupado" class="hola">
            </label>
          </div>
          <div class="seat-group">
            <label for="A4d">
              <button type="button" <?php validar($A4)?> id="A4" onclick="toggleCheckbox('A4d')">A4</button>
              <input type="checkbox" id="A4d" name="A4" value="ocupado" class="hola">
            </label>
          </div>
          <div class="seat-group">
            <label for="A5d">
              <button type="button" <?php validar($A5)?> id="A5" onclick="toggleCheckbox('A5d')">A5</button>
              <input type="checkbox" id="A5d" name="A5" value="ocupado" class="hola">
            </label>
          </div>
          <div class="seat-group">
            <label for="A6d">
              <button type="button" <?php validar($A6)?> id="A6" onclick="toggleCheckbox('A6d')">A6</button>
              <input type="checkbox" id="A6d" name="A6" value="ocupado" class="hola">
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

    reserveButton.addEventListener('click', () => {
      if (asientosReservados < totalBoletos) {
        alert('Por favor, seleccione todos los boletos.');
      } else {
        // Aquí puedes manejar el envío del formulario o la lógica de reserva
        alert('¡Reserva completada!');
      }
    });
  </script>
</body>

</html>
