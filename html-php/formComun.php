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
    <title>Formulario Especial</title>
</head>

<body>
    <?php
    include("header-log.php");
    ?>

    <div class="card-formu container d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="card p-4 custom-card mt-5">
            <h3 class="card-title text-center mt-5">Reservar vuelo normal</h3>
            <form method="post" enctype="multipart/form-data">

   



                <h5 class="card-title text-center mt-5">Equipaje:</h5>
                <div id="tablaEquipajeSection" class="mb-3">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Tipo maleta</th>
                                <th>Mi maleta</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Artículo personal</td>
                                <td><input type="checkbox" class="check" name="articuloPersonal"></td>
                                <td>
                                    <select class="form-control" name="cantidadArticuloPersonal">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Equipaje de mano</td>
                                <td><input type="checkbox" class="check" name="equipajeMano"></td>
                                <td>
                                    <select class="form-control" name="cantidadEquipajeMano">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Equipaje de bodega</td>
                                <td><input type="checkbox" class="check" name="equipajeBodega"></td>
                                <td>
                                    <select class="form-control" name="cantidadEquipajeBodega">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Cantidad de asientos:</td>
                                <td><input type="checkbox" class="check" name="equipajeBodega"></td>
                                <td>
                                    <select class="form-control" name="cantidadAsientos">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary">Atrás</button>
                    <button type="submit" class="btn btn-primary" name="siguiente">Siguiente</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menorEdadSection = document.getElementById('menorEdadSection');
            const menorEdadSi = document.getElementById('menorEdadSi');
            const menorEdadNo = document.getElementById('menorEdadNo');
            const partidaNacimientoSection = document.getElementById('partidaNacimientoSection');
            const acompananteSi = document.getElementById('acompananteSi');
            const acompananteNo = document.getElementById('acompananteNo');
            const nombreAcompananteSection = document.getElementById('nombreAcompananteSection');
            const duiAcompananteSection = document.getElementById('duiAcompananteSection');
            const mascotasSi = document.getElementById('mascotasSi');
            const mascotasNo = document.getElementById('mascotasNo');
            const tablaMascotasSection = document.getElementById('tablaMascotasSection');
            const paraMi = document.getElementById('paraMi');
            const miHijo = document.getElementById('miHijo');
            const otros = document.getElementById('otros');
            const documentoPasajeroSection = document.getElementById('documentoPasajeroSection');

            function toggleVisibility(element, show) {
                element.style.display = show ? 'block' : 'none';
            }

            paraMi.addEventListener('change', function() {
                toggleVisibility(menorEdadSection, false);
                toggleVisibility(partidaNacimientoSection, false);
                document.querySelector('label[for="documentoPasajero"]').textContent = 'DUI del pasajero';
            });

            miHijo.addEventListener('change', function() {
                toggleVisibility(menorEdadSection, true);
                toggleVisibility(partidaNacimientoSection, menorEdadSi.checked);
                document.querySelector('label[for="documentoPasajero"]').textContent = menorEdadSi.checked ? 'Carnet de menoridad del pasajero' : 'DUI del pasajero';
            });

            otros.addEventListener('change', function() {
                document.querySelector('label[for="documentoPasajero"]').textContent = 'DUI del pasajero';
                toggleVisibility(menorEdadSection, true);
                menorEdadSection.querySelector('label').textContent = 'El pasajero es menor de edad?';
                toggleVisibility(partidaNacimientoSection, menorEdadSi.checked);
            });

            menorEdadSi.addEventListener('change', function() {
                if (miHijo.checked) {
                    document.querySelector('label[for="documentoPasajero"]').textContent = 'Carnet de menoridad del pasajero';
                }
                toggleVisibility(partidaNacimientoSection, true);
            });

            menorEdadNo.addEventListener('change', function() {
                if (miHijo.checked) {
                    document.querySelector('label[for="documentoPasajero"]').textContent = 'DUI del pasajero';
                }
                toggleVisibility(partidaNacimientoSection, false);
            });

            acompananteSi.addEventListener('change', function() {
                toggleVisibility(nombreAcompananteSection, true);
                toggleVisibility(duiAcompananteSection, true);
            });

            acompananteNo.addEventListener('change', function() {
                toggleVisibility(nombreAcompananteSection, false);
                toggleVisibility(duiAcompananteSection, false);
            });

            mascotasSi.addEventListener('change', function() {
                toggleVisibility(tablaMascotasSection, true);
            });

            mascotasNo.addEventListener('change', function() {
                toggleVisibility(tablaMascotasSection, false);
            });

            otros.addEventListener('change', function() {
                document.querySelector('label[for="documentoPasajero"]').textContent = 'DUI del pasajero';
                toggleVisibility(menorEdadSection, true);
                menorEdadSection.querySelector('label').textContent = 'El pasajero es menor de edad?';
                toggleVisibility(partidaNacimientoSection, menorEdadSi.checked);
            });

            menorEdadSi.addEventListener('change', function() {
                if (miHijo.checked || otros.checked) {
                    document.querySelector('label[for="documentoPasajero"]').textContent = 'Carnet de menoridad del pasajero';
                }
                toggleVisibility(partidaNacimientoSection, true);
            });

            menorEdadNo.addEventListener('change', function() {
                if (miHijo.checked || otros.checked) {
                    document.querySelector('label[for="documentoPasajero"]').textContent = 'DUI del pasajero';
                }
                toggleVisibility(partidaNacimientoSection, false);
            });

            // Set initial state based on pre-selected options
            toggleVisibility(partidaNacimientoSection, menorEdadSi.checked);
            toggleVisibility(nombreAcompananteSection, acompananteSi.checked);
            toggleVisibility(duiAcompananteSection, acompananteSi.checked);
            toggleVisibility(tablaMascotasSection, mascotasSi.checked);
            toggleVisibility(menorEdadSection, !paraMi.checked);
            toggleVisibility(partidaNacimientoSection, paraMi.checked ? false : menorEdadSi.checked);

            // Pre-fill the user's information
            document.getElementById('nombreCompleto').value = "<?php echo $nomCliente;
                                                                echo " ";
                                                                echo $apeCliente ?>";
            document.getElementById('dui').value = "<?php echo $dui ?>";
            document.getElementById('pasaporte').value = "<?php echo $pasaporte ?>";
        });
    </script>
</body>

</html>
<?php

$boton = isset($_POST['siguiente']);
if ($boton) {
    # estos datos son del propio usuario que ha iniciado sesión
    $idVuelo = $_GET['idVuelo'];

    // proceso obligatorio 
    $insert = $conexion->query("INSERT INTO form(nombreUsu,duiUsu,pasaporteUsu,idVuelo,idUsuario)VALUES('$nombreCompleto', '$dui','$pasaporte','$idVuelo','$id')");
    // proceso para sacar el id de el formulario
    $select = $conexion->query("SELECT * FROM form where idUsuario='$id' and idVuelo='$idVuelo'");
    $row = $select->fetch_array();
    $idForm = $row['idForm'];
    echo $idForm;


    # equipaje de el usuario
    $cantArticPerso = trim($_POST['cantidadArticuloPersonal']);
    $cantEquiMano = trim($_POST['cantidadEquipajeMano']);
    $cantEquiBodega = trim($_POST['cantidadEquipajeBodega']);
    $asientos = $_POST['cantidadAsientos'];
    $articulos = $conexion->query("UPDATE form SET tipoVuelo='Vuelo Común', artiPersona='$cantArticPerso', equiMano='$cantEquiMano', equiBodega='$cantEquiBodega' where idVuelo='$idVuelo' and idUsuario='$id' and idForm ='$idForm'");
    
    # Insertar datos para la factura
    $insertFactura = $conexion->query("INSERT INTO facturaVueloNormal VALUES (null, null, '$idVuelo' , '$id' ,'$cantArticPerso','$cantEquiMano','$cantEquiBodega','$asientos', null,1)");

    echo "<script>
      window.location.href = 'seleccionDeAsientosVIP.php?idVuelo=" .  $idVuelo . "&asientos=" . $asientos . "'; </script>";
}
?>