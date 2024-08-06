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
            <h3 class="card-title text-center mt-5">Reservar Vuelo Especial</h3>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="nombreCompleto">Nombre Completo de usuario</label>
                    <input type="text" name="name" class="form-control" id="nombreCompleto" value="<?php echo htmlspecialchars($nombreCompleto); ?>" disabled readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="dui">DUI de usuario</label>
                    <input type="text" name="dui" class="form-control" id="dui" value="<?php echo htmlspecialchars($dui); ?>" disabled readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="pasaporte">Pasaporte de usuario</label>
                    <input type="text" class="form-control" id="pasaporte" name="pasaporte" value="<?php echo htmlspecialchars($pasaporte); ?>" disabled readonly>
                </div>

                <div class="form-group mb-3">
                    <label>Boleto para:</label>
                    <div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="boletoPara" id="paraMi" value="paraMi" checked>
                            <label class="form-check-label" for="paraMi">Para mí</label>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="boletoPara" id="miHijo" value="miHijo">
                            <label class="form-check-label" for="miHijo">Mi hijo/a</label>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="boletoPara" id="otros" value="otros">
                            <label class="form-check-label" for="otros">Otro</label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3" id="menorEdadSection">
                    <label>Su hijo es menor de edad?</label>
                    <div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="menorEdad" id="menorEdadSi" value="si" checked>
                            <label class="form-check-label" for="menorEdadSi">Sí</label>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="menorEdad" id="menorEdadNo" value="no">
                            <label class="form-check-label" for="menorEdadNo">No</label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3" id="partidaNacimientoSection">
                    <label>Subir partida de nacimiento reciente:</label>
                    <input type="file" id="partidaNacimiento" name="partidaNacimiento" accept="image/*">
                </div>

                <div class="form-group mb-3">
                    <label for="nombrePasajero">Nombre completo del pasajero <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nombrePasajero" name="namePasajero">
                </div>

                <div class="form-group mb-3" id="documentoPasajeroSection">
                    <label for="documentoPasajero">DUI del pasajero</label>
                    <input type="text" class="form-control" id="documentoPasajero" name="duiPasajero">
                </div>

                <div class="form-group mb-3">
                    <label for="tipoIncapacidad">Tipo de incapacidad del pasajero <span class="text-danger">*</span></label>
                    <select class="form-control" id="tipoIncapacidad" name="tipoIncapacidad">
                        <option value="">Seleccione...</option>
                        <option value="motora">Motora</option>
                        <option value="mental">Mental</option>
                        <option value="auditiva">Auditiva</option>
                        <option value="vista">Vista</option>
                        <option value="mudez">Mudez</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label>El pasajero llevará acompañante?</label>
                    <div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="acompanante" id="acompananteSi" value="si">
                            <label class="form-check-label" for="acompananteSi">Sí</label>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="acompanante" id="acompananteNo" value="no" checked>
                            <label class="form-check-label" for="acompananteNo">No</label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3" id="nombreAcompananteSection">
                    <label for="nombreAcompanante">Nombre completo del acompañante <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nombreAcompanante" name="nomAcom">
                </div>

                <div class="form-group mb-3" id="duiAcompananteSection">
                    <label for="duiAcompanante">DUI del acompañante</label>
                    <input type="text" class="form-control" id="duiAcompanante" name="duiAcom">
                </div>

                <h5 class="card-title text-center mt-5">Mascotas en el vuelo:</h5>
                <div class="form-group mb-3">
                    <label>Mascotas en el vuelo <span class="text-danger">*</span></label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="mascotasVuelo" id="mascotasSi" value="si">
                            <label class="form-check-label" for="mascotasSi">Sí</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="mascotasVuelo" id="mascotasNo" value="no" checked>
                            <label class="form-check-label" for="mascotasNo">No</label>
                        </div>
                    </div>
                </div>

                <div id="tablaMascotasSection" class="mb-3">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Mi mascota</th>
                                <th>Cantidad</th>
                                <th>Apoyo Emocional</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Perro</td>
                                <td><input type="checkbox" class="check" name="perro"></td>
                                <td>
                                    <select class="form-control" name="cantidadPerro">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </td>
                                <td><input type="checkbox" class="check" name="perroApoyo" value="true"></td>
                            </tr>
                            <tr>
                                <td>Gato</td>
                                <td><input type="checkbox" class="check" name="gato"></td>
                                <td>
                                    <select class="form-control" name="cantidadGato">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </td>
                                <td><input type="checkbox" class="check" name="gatoApoyo" value="true"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

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
                                        <option value="0">0</option>
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
                                        <option value="0">0</option>
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
                                        <option value="0">0</option>
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
include("conex.php");
$boton = isset($_POST['siguiente']);
if ($boton) {
    # estos datos son del propio usuario que ha iniciado sesión
    $idVuelo = $_GET['idVuelo'];
    $name = $nomCliente . " " . $apeCliente;
    $dui = $dui;
    $pasaporte = $pasaporte;
    $acompanante = $_POST['acompanante'];
    # fin datos de el usuario que ha iniciado sesión
    # En caso que este la opcion de "PARA MI" tomar los siguientes datos
    $nombrePasajero = trim($_POST['namePasajero']);
    $duiPasa = trim($_POST['duiPasajero']);
    # fin info de "PARA MI"
    # se evalua si el pasajero es menor de edad
    $menorEdad =  $_POST['menorEdad'];
    if (!($menorEdad == "no")) {
        $menorDUI = $_POST['duiPasajero'];
    }
    $boletoPara = $_POST['boletoPara']; // se toma el valor de los ratios para tomar el valor
    // datos obligatorios 
    if ($boletoPara == "paraMi") {
        // proceso de insertar datos en caso de que sea para mi 
        $boletoPara = "Para mi";
    } else if ($boletoPara == "miHijo") {
        $boletoPara = "Mi hijo";
    } else {
        $boletoPara = "Otro";
    }
    // proceso obligatorio 
    $insert = $conexion->query("INSERT INTO form(nombreUsu,duiUsu,pasaporteUsu, paraQuien,idVuelo,idUsuario)VALUES('$name', '$dui','$pasaporte','$boletoPara','$idVuelo','$id')");
    // proceso para sacar el id de el formulario
    $select = $conexion->query("SELECT * FROM form where idUsuario='$id' and idVuelo='$idVuelo'");
    $row = $select->fetch_array();
    $idForm = $row['idForm'];
    echo $idForm;
    // fin proceso 
    if ($boletoPara == "Para mi") {
        $update = $conexion->query("UPDATE form SET nombrePasajero='$nombrePasajero', duiPasajero='$duiPasa'  where idVuelo='$idVuelo' and idUsuario='$id'");
    } else if ($boletoPara == "Mi hijo") {
        if ($menorEdad == 'no') {
            $update = $conexion->query("UPDATE form SET nombrePasajero='$nombrePasajero', duiPasajero='$duiPasa'  where  idVuelo='$idVuelo' and idUsuario='$id'");
        } else {
            $update = $conexion->query("UPDATE form SET nombrePasajero='$nombrePasajero', carnetMino='$menorDUI'  where  idVuelo='$idVuelo' and idUsuario='$id'");
        }
    } else if ($boletoPara == "Otro") {
        if ($menorEdad == "no") {
            $update = $conexion->query("UPDATE form SET nombrePasajero='$nombrePasajero', duiPasajero='$duiPasa'  where  idVuelo='$idVuelo' and idUsuario='$id'");
        } else {
            $update = $conexion->query("UPDATE form SET nombrePasajero='$nombrePasajero', carnetMino='$menorDUI'  where  idVuelo='$idVuelo' and idUsuario='$id'");
        }
    }
    if ($acompanante == "si") {
        $nomAcom = trim($_POST['nomAcom']);
        $duiAcom = trim($_POST['duiAcom']);
        $update = $conexion->query("UPDATE form SET segundoNombre='$nomAcom', segundoDui='$duiAcom'   where idVuelo='$idVuelo' and idUsuario='$id'");
    }

    # proceso para guardar todos los objetos en la base de datos
    # mascotas en caso de que lleve
    $mascotasVuelo = $_POST['mascotasVuelo'];
    if ($mascotasVuelo == "si") {
        # tomar el valor de la cantidad de mascotas
        $cantidadPerro = $_POST['cantidadPerro'];
        $cantidadGato = $_POST['cantidadGato'];
        # tomar el datella de la mascota
        $perroApoyo = $_POST['perroApoyo'];
        $gatoApoyo = $_POST['gatoApoyo'];
        # proceso para guardar los informacion en base de datos
        $sql = $conexion->query("UPDATE form SET perro='$cantidadPerro', gato='$cantidadGato', apoyoGato='$gatoApoyo', apoyoPerro='$perroApoyo'");
    }
    # equipaje de el usuario
    $tipoIncapacidad = trim($_POST['tipoIncapacidad']);
    $cantArticPerso = trim($_POST['cantidadArticuloPersonal']);
    $cantEquiMano = trim($_POST['cantidadEquipajeMano']);
    $cantEquiBodega = trim($_POST['cantidadEquipajeBodega']);
    $articulos = $conexion->query("UPDATE form SET tipoIncapacidad='$tipoIncapacidad', artiPersona='$cantArticPerso', equiMano='$cantEquiMano', equiBodega='$cantEquiBodega' where idVuelo='$idVuelo' and idUsuario='$id'");
    echo "<script>
      window.location.href = 'seleccionDeAsientosVIP.php?idVuelo=" .  $idVuelo . "'; </script>";
}
?>