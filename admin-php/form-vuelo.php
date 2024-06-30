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
    <?php
    // proceso para llamar los datos
    $idVuelo = $_GET['idVuelo'];
    include("conex.php");
    if ($conexion) {
        $select = "SELECT * FROM vuelo where idVuelo='$idVuelo'";
        $query = mysqli_query($conexion, $select);
        if ($query) {
            while ($row = $query->fetch_array()) {
                $origen = $row['origen'];
                $destino = $row['destino'];
                $fechaSalida = $row['fechaSalida'];
                $fechaEntrada = $row['fechaEntrada'];
                $precio = $row['precio'];
                $foto = $row['foto'];
                $idVuelo = $row['idVuelo'];
                $fechaSalida1 = date("Y-m-d\TH:i", strtotime($fechaSalida));
                $fechaEntrada1 = date("Y-m-d\TH:i", strtotime($fechaEntrada));
            }
        }
    }

    // funciones para colocarlo en las
    function selectedAntiguaYBarbuda($pais)
    {
        if ($pais == "Antigua y Barbuda") {
            echo "selected";
        }
    }

    function selectedArgentina($pais)
    {
        if ($pais == "Argentina") {
            echo "selected";
        }
    }

    function selectedBahamas($pais)
    {
        if ($pais == "Bahamas") {
            echo "selected";
        }
    }

    function selectedBarbados($pais)
    {
        if ($pais == "Barbados") {
            echo "selected";
        }
    }

    function selectedBelice($pais)
    {
        if ($pais == "Belice") {
            echo "selected";
        }
    }

    function selectedBolivia($pais)
    {
        if ($pais == "Bolivia") {
            echo "selected";
        }
    }

    function selectedBrasil($pais)
    {
        if ($pais == "Brasil") {
            echo "selected";
        }
    }

    function selectedCanada($pais)
    {
        if ($pais == "Canada") {
            echo "selected";
        }
    }

    function selectedChile($pais)
    {
        if ($pais == "Chile") {
            echo "selected";
        }
    }

    function selectedColombia($pais)
    {
        if ($pais == "Colombia") {
            echo "selected";
        }
    }

    function selectedCostaRica($pais)
    {
        if ($pais == "Costa Rica") {
            echo "selected";
        }
    }

    function selectedCuba($pais)
    {
        if ($pais == "Cuba") {
            echo "selected";
        }
    }

    function selectedDominica($pais)
    {
        if ($pais == "Dominica") {
            echo "selected";
        }
    }

    function selectedEcuador($pais)
    {
        if ($pais == "Ecuador") {
            echo "selected";
        }
    }

    function selectedElSalvador($pais)
    {
        if ($pais == "El Salvador") {
            echo "selected";
        }
    }

    function selectedEstadosUnidos($pais)
    {
        if ($pais == "Estados Unidos") {
            echo "selected";
        }
    }

    function selectedGranada($pais)
    {
        if ($pais == "Granada") {
            echo "selected";
        }
    }

    function selectedGuatemala($pais)
    {
        if ($pais == "Guatemala") {
            echo "selected";
        }
    }

    function selectedGuyana($pais)
    {
        if ($pais == "Guyana") {
            echo "selected";
        }
    }

    function selectedHaiti($pais)
    {
        if ($pais == "Haití") {
            echo "selected";
        }
    }

    function selectedHonduras($pais)
    {
        if ($pais == "Honduras") {
            echo "selected";
        }
    }

    function selectedJamaica($pais)
    {
        if ($pais == "Jamaica") {
            echo "selected";
        }
    }

    function selectedMexico($pais)
    {
        if ($pais == "México") {
            echo "selected";
        }
    }

    function selectedNicaragua($pais)
    {
        if ($pais == "Nicaragua") {
            echo "selected";
        }
    }

    function selectedPanama($pais)
    {
        if ($pais == "Panamá") {
            echo "selected";
        }
    }

    function selectedParaguay($pais)
    {
        if ($pais == "Paraguay") {
            echo "selected";
        }
    }

    function selectedPeru($pais)
    {
        if ($pais == "Perú") {
            echo "selected";
        }
    }

    function selectedRepublicaDominicana($pais)
    {
        if ($pais == "República Dominicana") {
            echo "selected";
        }
    }

    function selectedSanCristobalYNieves($pais)
    {
        if ($pais == "San Cristóbal y Nieves") {
            echo "selected";
        }
    }

    function selectedSanVicenteYLasGranadinas($pais)
    {
        if ($pais == "San Vicente y las Granadinas") {
            echo "selected";
        }
    }

    function selectedSantaLucia($pais)
    {
        if ($pais == "Santa Lucía") {
            echo "selected";
        }
    }

    function selectedSurinam($pais)
    {
        if ($pais == "Surinam") {
            echo "selected";
        }
    }

    function selectedTrinidadYTobago($pais)
    {
        if ($pais == "Trinidad y Tobago") {
            echo "selected";
        }
    }

    function selectedUruguay($pais)
    {
        if ($pais == "Uruguay") {
            echo "selected";
        }
    }

    function selectedVenezuela($pais)
    {
        if ($pais == "Venezuela") {
            echo "selected";
        }
    }
    //funcion para colocar el valor en los inputs

    ?>
    <div class="centered-card mt-4">
        <div class=" card-buscar card p-4">
            <div class="card-body">
                <h5 class="card-title text-center text-formu ">Editar Vuelo: </h5>
                <form class="form-inline justify-content-center" method="post" enctype="multipart/form-data">


                    <div class="form-group mt-4">
                        <label class="text-formu">Fecha de Salida: </label>
                        <input type="datetime-local" class="form-control" id="fechaVuelo" placeholder="Fecha de Vuelo" name="fechaSalida" value="<?php echo $fechaSalida1 ?>">
                    </div>

                    <div class="form-group mt-4">
                        <label class="text-formu">Fecha de Entrada: </label>
                        <input type="datetime-local" class="form-control" id="fechaVuelo" placeholder="Fecha de Vuelo" name="fechaEntrada" value="<?php echo $fechaEntrada1 ?>">
                    </div>


                    <div class="form-group mt-4">
                        <label class="text-formu ">País de Origen: </label>
                        <select class="form-control" id="Origen" name="origen">
                            <option value="">Seleccionar país de Origen</option>
                            <option value="Antigua y Barbuda" <?php selectedAntiguaYBarbuda($origen); ?>>Antigua y Barbuda</option>
                            <option value="Argentina" <?php selectedArgentina($origen); ?>>Argentina</option>
                            <option value="Bahamas" <?php selectedBahamas($origen); ?>>Bahamas</option>
                            <option value="Barbados" <?php selectedBarbados($origen); ?>>Barbados</option>
                            <option value="Belice" <?php selectedBelice($origen); ?>>Belice</option>
                            <option value="Bolivia" <?php selectedBolivia($origen); ?>>Bolivia</option>
                            <option value="Brasil" <?php selectedBrasil($origen); ?>>Brasil</option>
                            <option value="Canada" <?php selectedCanada($origen); ?>>Canadá</option>
                            <option value="Chile" <?php selectedChile($origen); ?>>Chile</option>
                            <option value="Colombia" <?php selectedColombia($origen); ?>>Colombia</option>
                            <option value="Costa Rica" <?php selectedCostaRica($origen); ?>>Costa Rica</option>
                            <option value="Cuba" <?php selectedCuba($origen); ?>>Cuba</option>
                            <option value="Dominica" <?php selectedDominica($origen); ?>>Dominica</option>
                            <option value="Ecuador" <?php selectedEcuador($origen); ?>>Ecuador</option>
                            <option value="El Salvador" <?php selectedElSalvador($origen); ?>>El Salvador</option>
                            <option value="Estados Unidos" <?php selectedEstadosUnidos($origen); ?>>Estados Unidos</option>
                            <option value="Granada" <?php selectedGranada($origen); ?>>Granada</option>
                            <option value="Guatemala" <?php selectedGuatemala($origen); ?>>Guatemala</option>
                            <option value="Guyana" <?php selectedGuyana($origen); ?>>Guyana</option>
                            <option value="Haiti" <?php selectedHaiti($origen); ?>>Haití</option>
                            <option value="Honduras" <?php selectedHonduras($origen); ?>>Honduras</option>
                            <option value="Jamaica" <?php selectedJamaica($origen); ?>>Jamaica</option>
                            <option value="Mexico" <?php selectedMexico($origen); ?>>México</option>
                            <option value="Nicaragua" <?php selectedNicaragua($origen); ?>>Nicaragua</option>
                            <option value="Panama" <?php selectedPanama($origen); ?>>Panamá</option>
                            <option value="Paraguay" <?php selectedParaguay($origen); ?>>Paraguay</option>
                            <option value="Peru" <?php selectedPeru($origen); ?>>Perú</option>
                            <option value="Republica Dominicana" <?php selectedRepublicaDominicana($origen); ?>>República Dominicana</option>
                            <option value="San Cristobal y Nieves" <?php selectedSanCristobalYNieves($origen); ?>>San Cristóbal y Nieves</option>
                            <option value="San Vicente y las Granadinas" <?php selectedSanVicenteYLasGranadinas($origen); ?>>San Vicente y las Granadinas</option>
                            <option value="Santa Lucia" <?php selectedSantaLucia($origen); ?>>Santa Lucía</option>
                            <option value="Surinam" <?php selectedSurinam($origen); ?>>Surinam</option>
                            <option value="Trinidad y Tobago" <?php selectedTrinidadYTobago($origen); ?>>Trinidad y Tobago</option>
                            <option value="Uruguay" <?php selectedUruguay($origen); ?>>Uruguay</option>
                            <option value="Venezuela" <?php selectedVenezuela($origen); ?>>Venezuela</option>
                        </select>
                    </div>


                    <div class="form-group mt-4">
                        <label for="Destino" class="text-titulo text-formu">País de Destino: </label>
                        <select class="form-control" id="Destino" name="destino">
                            <option value="">Seleccionar país de Origen</option>
                            <option value="Antigua y Barbuda" <?php selectedAntiguaYBarbuda($destino); ?>>Antigua y Barbuda</option>
                            <option value="Argentina" <?php selectedArgentina($destino); ?>>Argentina</option>
                            <option value="Bahamas" <?php selectedBahamas($destino); ?>>Bahamas</option>
                            <option value="Barbados" <?php selectedBarbados($destino); ?>>Barbados</option>
                            <option value="Belice" <?php selectedBelice($destino); ?>>Belice</option>
                            <option value="Bolivia" <?php selectedBolivia($destino); ?>>Bolivia</option>
                            <option value="Brasil" <?php selectedBrasil($destino); ?>>Brasil</option>
                            <option value="Canada" <?php selectedCanada($destino); ?>>Canadá</option>
                            <option value="Chile" <?php selectedChile($destino); ?>>Chile</option>
                            <option value="Colombia" <?php selectedColombia($destino); ?>>Colombia</option>
                            <option value="Costa Rica" <?php selectedCostaRica($destino); ?>>Costa Rica</option>
                            <option value="Cuba" <?php selectedCuba($destino); ?>>Cuba</option>
                            <option value="Dominica" <?php selectedDominica($destino); ?>>Dominica</option>
                            <option value="Ecuador" <?php selectedEcuador($destino); ?>>Ecuador</option>
                            <option value="El Salvador" <?php selectedElSalvador($destino); ?>>El Salvador</option>
                            <option value="Estados Unidos" <?php selectedEstadosUnidos($destino); ?>>Estados Unidos</option>
                            <option value="Granada" <?php selectedGranada($destino); ?>>Granada</option>
                            <option value="Guatemala" <?php selectedGuatemala($destino); ?>>Guatemala</option>
                            <option value="Guyana" <?php selectedGuyana($destino); ?>>Guyana</option>
                            <option value="Haiti" <?php selectedHaiti($destino); ?>>Haití</option>
                            <option value="Honduras" <?php selectedHonduras($destino); ?>>Honduras</option>
                            <option value="Jamaica" <?php selectedJamaica($destino); ?>>Jamaica</option>
                            <option value="Mexico" <?php selectedMexico($destino); ?>>México</option>
                            <option value="Nicaragua" <?php selectedNicaragua($destino); ?>>Nicaragua</option>
                            <option value="Panama" <?php selectedPanama($destino); ?>>Panamá</option>
                            <option value="Paraguay" <?php selectedParaguay($destino); ?>>Paraguay</option>
                            <option value="Peru" <?php selectedPeru($destino); ?>>Perú</option>
                            <option value="Republica Dominicana" <?php selectedRepublicaDominicana($destino); ?>>República Dominicana</option>
                            <option value="San-Cristobal y Nieves" <?php selectedSanCristobalYNieves($destino); ?>>San Cristóbal y Nieves</option>
                            <option value="San-Vicente y las Granadinas" <?php selectedSanVicenteYLasGranadinas($destino); ?>>San Vicente y las Granadinas</option>
                            <option value="Santa Lucia" <?php selectedSantaLucia($destino); ?>>Santa Lucía</option>
                            <option value="Surinam" <?php selectedSurinam($destino); ?>>Surinam</option>
                            <option value="Trinidad y Tobago" <?php selectedTrinidadYTobago($destino); ?>>Trinidad y Tobago</option>
                            <option value="Uruguay" <?php selectedUruguay($destino); ?>>Uruguay</option>
                            <option value="Venezuela" <?php selectedVenezuela($destino); ?>>Venezuela</option>


                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label class="text-formu">Precio de vuelo: </label>
                        <input type="text" class="form-control" id="fechaVuelo" placeholder="Precio" name="precio" value="<?php echo $precio ?>">
                    </div>
                    <div class="form-group mt-4">
                        <label class="text-formu">Colocar fotografía </label>
                        <label for="foto">
                            <a role="button" class="mx-3  d-flex flex-column align-items-center btn btn-primary" name="agregar">Subir Fotografía</a>
                            <input type="file" class="form-control d-none" id="foto"  name="foto">
                        </label>
                    </div>
                    <!--AHI EL BOTON DE ABAJO TIENE Q DIRIGIT A DONDE DECIDA EL USUARIO (PAIS) -->
                    <button role="submit" class=" mt-5  d-flex flex-column align-items-center btn btn-primary" name="editar">Editar vuelo</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
<?php
if (isset($_POST['editar'])) {
    $fechaEntrada = $_POST['fechaEntrada'];
    $fechaSalida = $_POST['fechaSalida'];
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $precio = trim($_POST['precio']);
    $precio_float = floatval($precio);
    // evaluar si hay una imagen 
    $foto = $_FILES['foto']['error'];
    if ($foto) {
        $update = "UPDATE vuelo set origen='$origen', destino='$destino', fechaEntrada='$fechaEntrada', fechaSalida='$fechaSalida', precio='$precio' where idVuelo='$idVuelo'";
        $resul = $conexion->query($update);
        if ($resul) {
            echo '<script>alert("Vuelo modificado con exito")</script>';
        }
    }else{
        $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        include("conex.php");
        $update = "UPDATE vuelo set origen='$origen', destino='$destino', fechaEntrada='$fechaEntrada', fechaSalida='$fechaSalida', precio='$precio', foto='$foto' where idVuelo='$idVuelo'";
        $resul = $conexion->query($update);
        if ($resul) {
            echo '<script>alert("Vuelo modificado con exito")</script>';
        }
    }

   
}


?>