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

// llamar datos de el vuelo en cuestion
$vuelo = $conexion->query("SELECT * FROM vuelo where idVuelo='$idVuelo'");
$rowVuelo = $vuelo->fetch_array();
$origen = $rowVuelo['origen']; // origen de el vuelo
$destino = $rowVuelo['destino']; // destino de el vuelo
$fechaSalida = $rowVuelo['fechaSalida']; // fecha salida de el vuelo
$fecha = strtotime($fechaSalida);
$dia = date("Y-m-d",$fecha);
$hora = date("H:i");
?>
<body>
    <div class="card-formu container d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="card p-4 custom-card    mt-5">
            <h3 class="card-title text-center mt-5 mb-5"><img src="../imagen/header/favicon.png" class="img-fluid me-3" width="35"></a> Formulario de pago ESfly</h3>
            <form>
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

                <div class="form-group mb-3">
                    <label for="nombrePasajero">Nombre completo del pasajero <span class="text-danger"></span></label>
                    <input type="text" class="form-control" id="nombrePasajero" value="<?php echo $nombrePasajero ?>" disabled readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="dui">DUI del pasajero </label>
                    <input type="text" class="form-control" id="dui" disabled readonly value="<?php echo $duiPasajero ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="dui">Tarjeta de crédito del pasajero </label>
                    <input type="text" class="form-control" id="dui" required>
                </div>

                <div class="form-group mb-3">
                    <label for="dui">Número de teléfono</label>
                    <input type="text" class="form-control" id="dui" required>
                </div>

                <label for="dui">Tipo de vuelo del pasajero</label><br>
                <select class="form-group form-control mb-3 " disabled selected>
                    <option value="comun">Vuelo Común</option>
                    <option value="especial">Vuelo Especial</option>
                    <option value="vip">Vuelo VIP</option>
                </select>


                <div class="form-group mb-3">
                    <label for="pasaporte">País de origen </label>
                    <input type="text" class="form-control" id="pasaporte" disabled selected value="<?php echo $origen?>" readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="pasaporte">País de destino </label>
                    <input type="text" class="form-control" id="pasaporte" disabled selected value="<?php echo $destino?>" readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="pasaporte">Cantidad de boletos</label>
                    <input type="text" class="form-control" id="pasaporte" disabled selected value="3818970" readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="pasaporte">Fecha de vuelo </label>
                    <input type="text" class="form-control" id="pasaporte" disabled selected value="<?php echo $dia?>" readonly>
                </div>


                <div class="form-group mb-3">
                    <label for="pasaporte">Hora de vuelo</label>
                    <input type="text" class="form-control" id="pasaporte" disabled selected value="<?php echo $hora?>" readonly>
                </div>



                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary">Atrás</button>
                    <button type="submit" class="btn btn-primary">Siguiente</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>