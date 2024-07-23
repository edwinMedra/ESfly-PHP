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

    <link rel="stylesheet" href="../css/index1.css">
    <link rel="stylesheet" href="../css/headerr.css">
    <link rel="stylesheet" href="../css/pie.css">
    <!--Fin tipografia-->

    <title>ESFLY</title>
</head>

<body>
<style>
#espacio {
  display: none;
}
@media screen and (max-width:768px) {
    #espacio {
  display: flex;
}
}
    </style>
    <?php
    include("header-log.php");
    ?>
    <!-- imagenes de la pagina-->
    <div class="contenedor">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="../imagen/index/fondo1.png" class="d-block w-100 h-200" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../imagen/index/fondo2.png" class="d-block w-100 h-200" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../imagen/index/fondo4.png" class="d-block w-100 h-200" alt="...">
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
            <p>"Más que una aerolínea, somos tu puente al mundo."</p>
        </div>
    </div>
    <!--Seccion de vuelos de pagina web-->

    <div class=" texto-titulo container mt-5  ">
        <h5>Busca un vuelo ></h5>
    </div>

    <!--CUADRO DE BUSCAR VUELOS-->
    <div class="centered-card mt-4">
        <div class=" card-buscar card p-4">
            <div class="card-body">
                <h5 class="card-title text-center text-formu ">Busca tu Vuelo: </h5>
                <form class="form-inline justify-content-center" method="get" action="Reservarvuelos.php">


                    <div class="form-group mt-4">
                        <label class="text-formu">Fecha de Vuelo: </label>
                        <input type="date" class="form-control" id="fechaVuelo" placeholder="Fecha de Vuelo" name="fecha">
                    </div>
                    <div class="form-group mt-4">
                        <label class="text-formu ">País de Origen: </label>
                        <select class="form-control w-50" id="Origen" name="origen">
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
                        <select class="form-control w-50" id="Destino" name="destino">
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
                    <!--AHI EL BOTON DE ABAJO TIENE Q DIRIGIT A DONDE DECIDA EL USUARIO (PAIS) -->
                    <button type="submit" class=" mt-5  d-flex flex-column align-items-center btn btn-primary">Buscar Vuelo</button>
                </form>
            </div>
        </div>
    </div>
    <!-- FIN CUADRO DE BUSCAR VUELOS-->


    <!--IMAGENES DE PROMOCION DE VIAJES-->
    <div class=" texto-titulo container mt-5 ">
        <h5>Algunas ofertas ></h5>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3 mb-5">
                <div class="image-container">
                    <img src="../imagen/index/colombia.png" alt="Imagen 1">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h4>Colombia</h4>
                            <h6>Palmas de cera del Valle del Cocora</h6>
                            <a href="colombia.php" class="btn btn-primary">Tomar viaje</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5 ">
                <div class="image-container">
                    <img src="../imagen/index/belice.png" alt="Imagen 2">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h4>Belice</h4>
                            <h6>The Split: ¡La playa más hermosa de Belice!</h6>
                            <a href="belice.php" class="btn btn-primary">Tomar viaje</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="image-container">
                    <img src="../imagen/index/guatemala.png" alt="Imagen 3">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h4>Guatemala</h4>
                            <h6>Barrio de antigua Guatemala</h6>
                            <a href="guatemala.php" class="btn btn-primary">Tomar viaje</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="image-container">
                    <img src="../imagen/index/fondo1.png" alt="Imagen 4">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h4>Brasil</h4>
                            <h6>Río de Janeiro</h6>
                            <a href="brasil.php" class="btn btn-primary">Tomar viaje</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--TERMINAN IMAGENES DE PROMOCION-->

    <!--CUADROS DE INFORMACION-->

    <div class=" container texto-titulo  mt-5 ">
        <h5>Información sobre nosotros ></h5>
    </div>

      <div class="container-fluid mt-4 d-flex flex-column align-items-center">

        <div class="card-container  card mt-5 col-lg-12 w-75">
            <div class="row g-0">
                <div class="col-md-7">
                    <img src="../imagen/index/equipaje.png" class="img-card img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <h5 class="card-title">Equipaje</h5>
                        <p class="card-text">Entérate de las condiciones que debes tener en cuenta al momento de
                            preparar tu equipaje.</p>
                        <a href="../html/maleta.html"
                            class="b-info d-flex flex-column align-items-center btn btn-primary">Ver información</a>
                    </div>
                </div>
            </div>
        </div>

        <div class=" card-container card mt-5 col-lg-12 w-75">
            <div class="row g-0">
                <div class="col-md-7">
                    <img src="../imagen/index/esflyInfo.png" class="img-card img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-5">
                    <div class="card-body" stylesheet="min-height:20px">
                        <h5 class="card-title">ESfly information</h5>
                        <p class="card-text">Adquiere información de vuelos seguros y cómodos. Con servicio excepcional,
                            priorizamos tu experiencia de viaje.</p>
                        <a href="../html/ESfly Information.html"
                            class="b-info d-flex flex-column align-items-center btn btn-primary">Ver información</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-container card mb-5  mt-5 col-lg-12 w-75">
            <div class="row g-0">
                <div class="col-md-7 ">
                    <img src="../imagen/index/experiencia.png" class="img-card img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-5">
                    <div class="card-body"  stylesheet="min-height:20px">
                        <h5 class="card-title">Experiencia ESfly</h5>
                        <p class="card-text">Descubre los servicios a bordo que te ofrecemos al volar con nosotros,
                            escribe reseñas.</p>
                        <a href="../html/experienciasESfly.html"
                            class=" b-info d-flex flex-column align-items-center btn btn-primary">Ver información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN DE CUADROS DE INFORMACION-->
    <div class="mt-2 p-5" id="espacio"> </div>

    <!--PREPARAR PARA VIAJAR (CLIENTE)-->
    <div class=" container texto-titulo  mt-5 ">
        <h5>Información sobre nosotros ></h5>
    </div>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center ">

            <a class="card-prep card card-hover-effect text-center mb-3 " style="width: 22rem;"
                href="centroAyuda.php">
                <div>
                    <div class="card-body">
                        <h5 class="card-title mt-5">CENTRO DE AYUDA </h5>
                        <p class="card-text">Encuentra ayuda sobre la información que necesites.</p>
                    </div>
                </div>
            </a>


            <a class="card-prep card card-hover-effect text-center mb-3 " style="width: 22rem;"
                href="requisitos para viajar.php">
                <div class="">
                    <div class="card-body">
                        <h5 class="card-title mt-5">REQUISITOS PARA VIAJAR </h5>
                        <p class="card-text">Infórmate acerca de visas, vacunas y demás documentos.</p>
                    </div>
                </div>
            </a>

            <a class="card-prep card card-hover-effect text-center mb-3 " style="width: 22rem;"
                href="check-in.php">
                <div>
                    <div class="card-body">
                        <h5 class="card-title mt-5">Check-in online </h5>
                        <p class="card-text">Obtén tu pase de abordar y ahorra tiempo en el aeropuerto.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!--FIN DE PREPARAR PARA VIAJAR (CLIENTE)-->
    <?php
    include ("pie.php");
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>