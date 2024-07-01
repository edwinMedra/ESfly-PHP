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

<body>
    <?php include("header-admin.php") ?>
    <div class="centered-card mt-4">
        <div class=" card-buscar card p-4">
            <div class="card-body">
                <h5 class="card-title text-center text-formu ">Crear Vuelo: </h5>
                <form class="form-inline justify-content-center" method="post" enctype="multipart/form-data">


                    <div class="form-group mt-4">
                        <label class="text-formu">Fecha de Salida: </label>
                        <input type="datetime-local" class="form-control" id="fechaVuelo" placeholder="Fecha de Vuelo" name="fechaSalida">
                    </div>

                    <div class="form-group mt-4">
                        <label class="text-formu">Fecha de Entrada: </label>
                        <input type="datetime-local" class="form-control" id="fechaVuelo" placeholder="Fecha de Vuelo" name="fechaEntrada">
                    </div>


                    <div class="form-group mt-4">
                        <label class="text-formu ">País de Origen: </label>
                        <select class="form-control" id="Origen" name="origen">
                            <option value="">Seleccionar país de Origen</option>
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


                    <div class="form-group mt-4">
                        <label for="Destino" class="text-titulo text-formu">País de Destino: </label>
                        <select class="form-control" id="Destino" name="destino">
                            <option value="">Seleccionar país de destino</option>
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
                    <div class="form-group mt-4">
                        <label class="text-formu">Precio de vuelo: </label>
                        <input type="text7" class="form-control" id="fechaVuelo" placeholder="Precio" name="precio">
                    </div>

                    <div class="form-group mt-4">
                        <label class="text-formu">Colocar fotografía </label>
                        <label for="foto">
                            <a role="button" class="mx-3  d-flex flex-column align-items-center btn btn-primary" name="agregar">Subir Fotografía</a>
                            <input type="file" class="form-control d-none" id="foto" name="foto">
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
<?php
if (isset($_POST['agregar'])) {
    $fechaEntrada = $_POST['fechaEntrada'];
    $fechaSalida = $_POST['fechaSalida'];
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $precio = trim($_POST['precio']);
    $precio_float = floatval($precio);
    $foto = $_FILES['foto']['error'];

    if ($foto) {
        echo '<script>alert("Es obligatorio el ingreso de una fotografía")</script>';
    } else {
        include("conex.php");
        $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $insert = "INSERT INTO vuelo(origen,destino,fechaSalida,fechaEntrada,precio,foto) VALUES('$origen','$destino','$fechaSalida', '$fechaEntrada','$precio_float','$foto')";
        $resul = $conexion->query($insert);
        if ($resul) {
            echo '<script>alert("Vuelo agregado con exito")</script>';
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
            $asientos = "INSERT INTO asientos (idVuelo,destino,A1,A2,A3,A4,A5,A6) VALUES ('$idVuelo','$destino','libre','libre','libre','libre','libre','libre')";
            $resulAsientos = $conexion->query($asientos);
            if ($resulAsientos) {
                
            }
        }
    }
}
?>