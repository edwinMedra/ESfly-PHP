<?php
function isSelected($valor, $pais)
{
    if ($valor == $pais) {
        return "selected";
    }
    return "";
}
error_reporting(0);

if (isset($_POST['agregar'])) {
    $fechaEntrada = $_POST['fechaEntrada'];
    $fechaSalida = $_POST['fechaSalida'];
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $precio = trim($_POST['precio']);
    $precio_float = floatval($precio);
    $foto = $_FILES['foto']['error'];
    // validar los datos de los vuelos 

    if ($origen == $destino) {
        echo '<script>alert("El origen y destino de el vuelo no pueden ser iguales, intentar de nuevo")</script>';
    } else
    if ($foto) {
        echo '<script>alert("Es obligatorio el ingreso de una fotografía")</script>';
    } else {
        include("conex.php");
        $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $insert = "INSERT INTO vuelo(origen,destino,fechaSalida,fechaEntrada,precio,foto) VALUES('$origen','$destino','$fechaSalida', '$fechaEntrada','$precio_float','$foto')";
        $resul = $conexion->query($insert);
        if ($resul) {
            echo '<script>alert("Vuelo agregado con exito")
            window.location.href ="agregar_vuelo.php"
            </script>';
        }
        // proceso para ingresar los asientos en la plataforma 
        // obtener id de la tabla de vuelos para ingresar el valor de los asientos 
        $sql = "SELECT idVuelo FROM vuelo where origen='$origen' and destino='$destino' and fechaSalida='$fechaSalida' and fechaEntrada='$fechaEntrada' and precio='$precio_float' ";
        $resultado = $conexion->query($sql);
        //tomar id de el vuelo
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $idVuelo = $row['idVuelo'];
            }

            // insertar asientos para este vuelo
            $asientos = "INSERT INTO asientos (
                idVuelo, destino, A1, A2, A3, A4, A5, A6,
                B1, B2, B3, B4, B5, B6,
                C1, C2, C3, C4, C5, C6,
                D1, D2, D3, D4, D5, D6,
                E1, E2, E3, E4, E5, E6,
                F1, F2, F3, F4, F5, F6,
                G1, G2, G3, G4, G5, G6,
                H1, H2, H3, H4, H5, H6,
                I1, I2, I3, I4, I5, I6,
                J1, J2, J3, J4, J5, J6,
                K1, K2, K3, K4, K5, K6
            ) VALUES (
                '$idVuelo', '$destino',
                'libre', 'libre', 'libre', 'libre', 'libre', 'libre',
                'libre', 'libre', 'libre', 'libre', 'libre', 'libre',
                'libre', 'libre', 'libre', 'libre', 'libre', 'libre',
                'libre', 'libre', 'libre', 'libre', 'libre', 'libre',
                'libre', 'libre', 'libre', 'libre', 'libre', 'libre',
                'libre', 'libre', 'libre', 'libre', 'libre', 'libre',
                'libre', 'libre', 'libre', 'libre', 'libre', 'libre',
                'libre', 'libre', 'libre', 'libre', 'libre', 'libre',
                'libre', 'libre', 'libre', 'libre', 'libre', 'libre',
                'libre', 'libre', 'libre', 'libre', 'libre', 'libre',
                'libre', 'libre', 'libre', 'libre', 'libre', 'libre'
            )";


            $resulAsientos = $conexion->query($asientos);
            if ($resulAsientos) {
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

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
    <title>ESfly</title>
</head>
<?php
// validacion de para la fecha 
$fecha = Date("20y-m-d");
?>

<body>
    <?php include("header-admin.php") ?>
    <div class="centered-card mt-4">
        <div class=" card-buscar card p-4">
            <div class="card-body">
                <h5 class="card-title text-center text-formu ">Crear Vuelo: </h5>
                <form class="form-inline justify-content-center" method="post" enctype="multipart/form-data">


                    <div class="form-group mt-4">
                        <label class="text-formu">Fecha de Salida: </label>
                        <input type="datetime-local" min="<?php echo $fecha ?>T00:00" class="form-control" id="fechaVuelo" placeholder="Fecha de Vuelo" name="fechaSalida">
                    </div>

                    <div class="form-group mt-4">
                        <label class="text-formu">Fecha de Entrada: </label>
                        <input type="datetime-local" min="<?php echo $fecha ?>T00:00" class="form-control" id="fechaVuelo" placeholder="Fecha de Vuelo" name="fechaEntrada">
                    </div>


                    <div class="form-group mt-4">
                        <label class="text-formu ">País de Origen: </label>
                        <select class="form-control" id="Origen" name="origen">
                            <option value="">Seleccionar país de Origen</option>
                            <option <?php echo isSelected($origen, "Antigua y Barbuda"); ?> value="Antigua y Barbuda">Antigua y Barbuda</option>
                            <option <?php echo isSelected($origen, "Argentina"); ?> value="Argentina">Argentina</option>
                            <option <?php echo isSelected($origen, "Bahamas"); ?> value="Bahamas">Bahamas</option>
                            <option <?php echo isSelected($origen, "Barbados"); ?> value="Barbados">Barbados</option>
                            <option <?php echo isSelected($origen, "Belice"); ?> value="Belice">Belice</option>
                            <option <?php echo isSelected($origen, "Bolivia"); ?> value="Bolivia">Bolivia</option>
                            <option <?php echo isSelected($origen, "Brasil"); ?> value="Brasil">Brasil</option>
                            <option <?php echo isSelected($origen, "Canada"); ?> value="Canadá">Canadá</option>
                            <option <?php echo isSelected($origen, "Chile"); ?> value="Chile">Chile</option>
                            <option <?php echo isSelected($origen, "Colombia"); ?> value="Colombia">Colombia</option>
                            <option <?php echo isSelected($origen, "Costa Rica"); ?> value="Costa Rica">Costa Rica</option>
                            <option <?php echo isSelected($origen, "Cuba"); ?> value="Cuba">Cuba</option>
                            <option <?php echo isSelected($origen, "Dominica"); ?> value="Dominica">Dominica</option>
                            <option <?php echo isSelected($origen, "Ecuador"); ?> value="Ecuador">Ecuador</option>
                            <option <?php echo isSelected($origen, "El Salvador"); ?> value="El Salvador">El Salvador</option>
                            <option <?php echo isSelected($origen, "Estados-Unidos"); ?> value="Estados Unidos">Estados Unidos</option>
                            <option <?php echo isSelected($origen, "Granada"); ?> value="Granada">Granada</option>
                            <option <?php echo isSelected($origen, "Guatemala"); ?> value="Guatemala">Guatemala</option>
                            <option <?php echo isSelected($origen, "Guyana"); ?> value="Guyana">Guyana</option>
                            <option <?php echo isSelected($origen, "Haiti"); ?> value="Haití">Haití</option>
                            <option <?php echo isSelected($origen, "Honduras"); ?> value="Honduras">Honduras</option>
                            <option <?php echo isSelected($origen, "Jamaica"); ?> value="Jamaica">Jamaica</option>
                            <option <?php echo isSelected($origen, "Mexico"); ?> value="México">México</option>
                            <option <?php echo isSelected($origen, "Nicaragua"); ?> value="Nicaragua">Nicaragua</option>
                            <option <?php echo isSelected($origen, "Panama"); ?> value="Panamá">Panamá</option>
                            <option <?php echo isSelected($origen, "Paraguay"); ?> value="Paraguay">Paraguay</option>
                            <option <?php echo isSelected($origen, "Peru"); ?> value="Perú">Perú</option>
                            <option <?php echo isSelected($origen, "Republica Dominicana"); ?> value="República Dominicana">República Dominicana</option>
                            <option <?php echo isSelected($origen, "San Cristobal y Nieves"); ?> value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                            <option <?php echo isSelected($origen, "San Vicente y las Granadinas"); ?> value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                            <option <?php echo isSelected($origen, "Santa Lucia"); ?> value="Santa Lucía">Santa Lucía</option>
                            <option <?php echo isSelected($origen, "Surinam"); ?> value="Surinam">Surinam</option>
                            <option <?php echo isSelected($origen, "Trinidad y Tobago"); ?> value="Trinidad y Tobago">Trinidad y Tobago</option>
                            <option <?php echo isSelected($origen, "Uruguay"); ?> value="Uruguay">Uruguay</option>
                            <option <?php echo isSelected($origen, "Venezuela"); ?> value="Venezuela">Venezuela</option>
                        </select>
                    </div>


                    <div class="form-group mt-4">
                        <label for="Destino" class="text-titulo text-formu">País de Destino: </label>
                        <select class="form-control" id="Destino" name="destino">
                            <option value="">Seleccionar país de Origen</option>
                            <option <?php echo isSelected($destino, "Antigua y Barbuda"); ?> value="Antigua y Barbuda">Antigua y Barbuda</option>
                            <option <?php echo isSelected($destino, "Argentina"); ?> value="Argentina">Argentina</option>
                            <option <?php echo isSelected($destino, "Bahamas"); ?> value="Bahamas">Bahamas</option>
                            <option <?php echo isSelected($destino, "Barbados"); ?> value="Barbados">Barbados</option>
                            <option <?php echo isSelected($destino, "Belice"); ?> value="Belice">Belice</option>
                            <option <?php echo isSelected($destino, "Bolivia"); ?> value="Bolivia">Bolivia</option>
                            <option <?php echo isSelected($destino, "Brasil"); ?> value="Brasil">Brasil</option>
                            <option <?php echo isSelected($destino, "Canada"); ?> value="Canadá">Canadá</option>
                            <option <?php echo isSelected($destino, "Chile"); ?> value="Chile">Chile</option>
                            <option <?php echo isSelected($destino, "Colombia"); ?> value="Colombia">Colombia</option>
                            <option <?php echo isSelected($destino, "Costa Rica"); ?> value="Costa Rica">Costa Rica</option>
                            <option <?php echo isSelected($destino, "Cuba"); ?> value="Cuba">Cuba</option>
                            <option <?php echo isSelected($destino, "Dominica"); ?> value="Dominica">Dominica</option>
                            <option <?php echo isSelected($destino, "Ecuador"); ?> value="Ecuador">Ecuador</option>
                            <option <?php echo isSelected($destino, "El Salvador"); ?> value="El Salvador">El Salvador</option>
                            <option <?php echo isSelected($destino, "Estados-Unidos"); ?> value="Estados Unidos">Estados Unidos</option>
                            <option <?php echo isSelected($destino, "Granada"); ?> value="Granada">Granada</option>
                            <option <?php echo isSelected($destino, "Guatemala"); ?> value="Guatemala">Guatemala</option>
                            <option <?php echo isSelected($destino, "Guyana"); ?> value="Guyana">Guyana</option>
                            <option <?php echo isSelected($destino, "Haiti"); ?> value="Haití">Haití</option>
                            <option <?php echo isSelected($destino, "Honduras"); ?> value="Honduras">Honduras</option>
                            <option <?php echo isSelected($destino, "Jamaica"); ?> value="Jamaica">Jamaica</option>
                            <option <?php echo isSelected($destino, "Mexico"); ?> value="México">México</option>
                            <option <?php echo isSelected($destino, "Nicaragua"); ?> value="Nicaragua">Nicaragua</option>
                            <option <?php echo isSelected($destino, "Panama"); ?> value="Panamá">Panamá</option>
                            <option <?php echo isSelected($destino, "Paraguay"); ?> value="Paraguay">Paraguay</option>
                            <option <?php echo isSelected($destino, "Peru"); ?> value="Perú">Perú</option>
                            <option <?php echo isSelected($destino, "Republica Dominicana"); ?> value="República Dominicana">República Dominicana</option>
                            <option <?php echo isSelected($destino, "San Cristobal y Nieves"); ?> value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                            <option <?php echo isSelected($destino, "San Vicente y las Granadinas"); ?> value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                            <option <?php echo isSelected($destino, "Santa Lucia"); ?> value="Santa Lucía">Santa Lucía</option>
                            <option <?php echo isSelected($destino, "Surinam"); ?> value="Surinam">Surinam</option>
                            <option <?php echo isSelected($destino, "Trinidad y Tobago"); ?> value="Trinidad y Tobago">Trinidad y Tobago</option>
                            <option <?php echo isSelected($destino, "Uruguay"); ?> value="Uruguay">Uruguay</option>
                            <option <?php echo isSelected($destino, "Venezuela"); ?> value="Venezuela">Venezuela</option>
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label class="text-formu">Precio de vuelo: </label>
                        <input type="text" class="form-control" id="fechaVuelo" placeholder="Precio" name="precio" value="<?php echo isset($_POST['precio']) ? $_POST['precio']:''; ?>">
                    </div>

                    <div class="form-group mt-4">
                        <label class="text-formu">Colocar fotografía </label>
                        <label for="foto">
                            <a role="button" class="mx-3  d-flex flex-column align-items-center btn btn-primary" name="agregar">Subir Fotografía</a>
                            <input type="file" class="form-control d-none" id="foto" name="foto" accept="image/*">
                        </label>
                    </div>

                    <button role="submit" class=" mt-5  d-flex flex-column align-items-center btn btn-primary" name="agregar">Agregar vuelo</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>