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
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/formularioVueloEspecial.css">
    <link rel="stylesheet" href="../css/headerr.css">
    <link rel="stylesheet" href="../css/pie.css">
    <title>Formulario de pago ESfly</title>
</head>
<?php
include("header-log.php");
// llamar datos de el formulario anterior
$idVuelo = $_GET['idVuelo'];
$sql = $conexion->query("SELECT * FROM form where idVuelo='$idVuelo' and idUsuario='$id'");
$row = $sql->fetch_array();
$nombrePasajero = $row['nombrePasajero'];
$duiPasajero = $row['duiPasajero'];
$tipoVuelo = $row['tipoVuelo'];

// llamar datos de el vuelo en cuestion
$vuelo = $conexion->query("SELECT * FROM vuelo where idVuelo='$idVuelo'");
$rowVuelo = $vuelo->fetch_array();
$origen = $rowVuelo['origen']; // origen de el vuelo
$destino = $rowVuelo['destino']; // destino de el vuelo
$precio = $rowVuelo['precio'];
$fechaSalida = $rowVuelo['fechaSalida']; // fecha salida de el vuelo
$fecha = strtotime($fechaSalida);
$dia = date("Y-m-d", $fecha);

$hora = date("h:i", $fecha);
$nombreCompleto = $nomCliente . " " . $apeCliente;
$total = 2 * $precio;
?>

<body>
    <div class="card-formu container d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="card p-4 custom-card    mt-5">
            <h3 class="card-title text-center mt-5 mb-5"><img src="../imagen/header/favicon.png" class="img-fluid me-3" width="35"></a> Formulario de pago ESfly</h3>
            <form method="POST">
                <div class="form-group mb-3">
                    <label for="nombreCompleto">Nombre Completo de usuario</span></label>
                    <input type="text" class="form-control" id="nombreCompleto" disabled selected value="<?php echo $nombreCompleto ?>" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="dui">DUI de usuario </label>
                    <input type="text" class="form-control" id="dui" disabled selected value="<?php echo $dui ?>" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="pasaporte">Pasaporte de usuario </label>
                    <input type="text" class="form-control" id="pasaporte" disabled selected value="<?php echo $pasaporte ?>" readonly>
                </div>



                <?php
                if (!($tipoVuelo == 'Vuelo Común')) {
                    echo '
                     <div class="form-group mb-3">
                    <label for="nombrePasajero">Nombre completo del pasajero <span class="text-danger"></span></label>
                    <input type="text" class="form-control" id="nombrePasajero" value="<?php echo $nombrePasajero ?>" disabled readonly>
                </div>
                    

                  <div class="form-group mb-3">
                    <label for="dui">DUI del pasajero </label>
                    <input type="text" class="form-control" id="dui" disabled readonly value="<?php echo $duiPasajero ?>">
                </div>
                    ';
                }
                ?>








                <label for="dui">Tipo de vuelo del pasajero</label><br>
                <select class="form-group form-control mb-3 " disabled selected>
                    <option value="comun"><?php echo $tipoVuelo ?></option>
                </select>


                <div class="form-group mb-3">
                    <label for="pasaporte">País de origen </label>
                    <input type="text" class="form-control" id="pasaporte" disabled selected value="<?php echo $origen ?>" readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="pasaporte">País de destino </label>
                    <input type="text" class="form-control" id="pasaporte" disabled selected value="<?php echo $destino ?>" readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="pasaporte">Cantidad de boletos</label>
                    <input type="text" class="form-control" id="pasaporte" disabled selected value="2" readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="pasaporte">Fecha de vuelo </label>
                    <input type="text" class="form-control" id="pasaporte" disabled selected value="<?php echo $dia ?>" readonly>
                </div>


                <div class="form-group mb-3">
                    <label for="pasaporte">Hora de vuelo</label>
                    <input type="text" class="form-control" id="pasaporte" disabled selected value="<?php echo $hora ?>" readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="dui">Tarjeta de crédito </label>
                    <input type="text" class="form-control" id="dui" name="numTargeta" maxlength="15" minlength="15" required value="<?php echo isset($_POST['numTargeta']) ? htmlspecialchars($_POST['numTargeta']) : ''; ?>">
                </div>


                <div class="form-group mb-3">
                    <label for="dui">Nombre completo de el propietario de la tarjeta </label>
                    <input type="text" class="form-control" id="dui" name="nombreTargeta" required value="<?php echo isset($_POST['nombreTargeta']) ? htmlspecialchars($_POST['nombreTargeta']) : ''; ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="dui">CVV</label>
                    <input type="text" class="form-control" id="dui" maxlength="3" name="cvv" required value="<?php echo isset($_POST['cvv']) ? htmlspecialchars($_POST['cvv']) : ''; ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="dui">Fecha de vencimiento</label><br>
                    <select name="mes" id="" class="border-0 p-2 rounded-5 me-2">
                        <option value="">Seleccione el mes</option>
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <select name="year" id="" class="border-0 p-2 rounded-5 mx-2">
                        <option value="">Seleccione el Año</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="dui">Número de teléfono</label>
                    <input type="text" class="form-control" id="dui" maxlength="8" name="numTelefono" required value="<?php echo isset($_POST['numTelefono']) ? htmlspecialchars($_POST['numTelefono']) : ''; ?>">
                </div>


                <div class="form-group mb-3">
                    <label for="dui">Costo total del vuelo</label>
                    <input type="text" class="form-control" id="precioTotal" value="$ <?php echo $total ?>" disabled>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary" name="pagar">Siguiente</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php
// proceso para tomar el año 
date_default_timezone_set('America/El_Salvador');
$año = date('Y');
$mes = date('m');
//Codigo para gestionar la notificacion
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_SESSION['$id']; // Supone que el ID del usuario está en la sesión
    // Actualiza la base de datos para indicar que hay una notificación
    $sql = "UPDATE usuario SET notificacion = 1 WHERE idCliente = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
}
if (isset($_POST['pagar'])) {
    $numTargeta = trim($_POST['numTargeta']);
    $nombreTargeta = trim($_POST['nombreTargeta']);
    $cvv = trim($_POST['cvv']);
    $numTelefono = trim(($_POST['numTelefono']));
    $mes1 = $_POST['mes'];
    $year = $_POST['year'];
    // validación de los datos ingresados
    if (preg_match("/[a-zA-Z]/", $numTargeta) || !(strlen($numTargeta) == 15)) {
        echo "<script>alert('Número de targeta de credito no valida')</script>";
    } else if (preg_match("/[0-9]/", $nombreTargeta)) {
        # header("infoAsistentes_disponibles.php?idVuelo=$idVuelo");
        echo "<script>alert('Nombre de propietario no valido')</script>";
    } else if (preg_match("/[a-zA-Z]/", $cvv) || !(strlen($cvv) == 3)) {
        echo "<script>alert('CVV no valido')</script>";
    } else if ($mes1 < $mes || $año < $year || empty($mes1) || empty($year)) {
        echo "<script>alert('Fecha de vencimiento de tarjeta no valida')</script>";
    } else if (preg_match("/[a-zA-Z]/", $numTelefono) || !(strlen($numTelefono) == 8)) {
        echo "<script>alert('Número de telefono no valido')</script>";
    } else {
        # header("");
        echo "<script>
       alert('Pago realizado con exito')
       window.location.href = 'infoAsistentes_disponibles.php?idVuelo=$idVuelo';
       </script>";
    }
}
?>