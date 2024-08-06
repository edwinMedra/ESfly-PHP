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
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/asistentesDisponibles.css">
    <link rel="stylesheet" href="../css/headerr.css">
    <link rel="stylesheet" href="../css/pie.css">
    <!--Fin tipografia-->

    <title>Asistentes disponibles</title>
</head>

<body>
    <!-- imagenes de la pagina-->
    <div class="contenedor">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="../imagen/AsistentesDisponibles/asistentes1.png" class="d-block w-100 h-200" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../imagen/AsistentesDisponibles/asistentes2.png" class="d-block w-100 h-200" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../imagen/AsistentesDisponibles/asistentes3.png" class="d-block w-100 h-200" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="texto-superpuesto">
            <p>Asistentes Disponibles</p>
        </div>
    </div>

    <!--Seccion de asistentes de pagina web-->

    <div class=" texto-titulo container mt-5  ">
        <h5>Seleciona asistente ></h5>
    </div>
    <?php
    include("conex.php");
    // llamar datos de la base de datos 
    $resul = $conexion->query("SELECT * FROM asistente");
    while ($row = $resul->fetch_assoc()) {
        $nomAsistente = $row['nomAsistente'];
        $apeAsistente = $row['apeAsistente'];
        $numTelefono = $row['numTelefono'];
        $servicios = $row['servicios'];
        $horarioTrabajo = $row['horarioTrabajo'];
        $genero = $row['genero'];
        $descri = $row['descri'];
        $foto = $row['foto'];
        /*
    // en tal caso de ser necesario, descomentar estos datos para poder ver estos datos de el asistente 
    $correo = $row['correo'];
    $dui = $row['dui'];
    $pasaporte = $row['pasaporte'];
    */
        // html de pagina con los datos colocados

    ?>
        <div class="container mt-4 d-flex flex-column align-items-center">
            <div class="card-container card mt-5 col-lg-12">
                <div class="row g-0 flex-column-reverse flex-md-row">
                    <div class="col-md-7">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($foto) ?>" class="img-card img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-5 my-auto">
                        <div class="card-body">
                            <h5 class="empleado-name card-title"><?php echo $nomAsistente . " " . $apeAsistente ?></h5>
                            <p class="card-text">
                            <ul>
                                <li class="datos-emple mt-4"><b>Número de teléfono:</b> <?php echo $numTelefono ?></li>
                                <li class="datos-emple mt-4"><b>Servicios:</b> <?php echo $servicios ?></li>
                                <li class="datos-emple mt-4"><b>Horario de trabajo:</b> <?php echo $horarioTrabajo ?></li>
                                <li class="datos-emple mt-4"><b>Género:</b> Femenino</li>
                            </ul>
                            </p>
                            <div class="text-center mt-4">
                                <button class=" btn btn-primary" onclick={alerta()}>Seleccionar Asistente</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php echo
'
<script>
// proceso a realizar para la selección de el asistente
function alerta(){
    var res = confirm("Ha seleccionado a ' . $nomAsistente . ' como asistente, esta seguro que desea este asistente ");
    if (res){
    window.location.href = "../js/insertAsis.php"
    }
    }
</script>
';
?>


</html>