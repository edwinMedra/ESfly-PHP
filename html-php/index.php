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

.center-button {
    display: flex;
    justify-content: center;
  }
  .full-width-btn {
    width: 100%;
  }

.contenedor {
    position: relative;
}

.texto-superpuesto {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 45px;
    text-align: center;
    padding: 10px;
    border-radius: 10px;
    z-index: 2;
    width: 80%;
}



.center-button {
    display: flex;
    justify-content: center;
  }
  .full-width-btn {
    width: 100%;
  }


  /*TRADUCTOR  */





</style>
<?php
include("header-log.php");
?>

<!-- imagenes de la pagina-->
<div class="contenedor">

    <div class="texto-superpuesto">
        <p>"Más que una aerolínea, somos tu <br> puente al mundo."</p>
    </div>

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
    
    
</div>

<!-- Seccion de vuelos de pagina web -->
<div class=" texto-titulo container mt-5">
    <h5 id="search-flight-title">Busca un vuelo ></h5>
</div>

<!-- CUADRO DE BUSCAR VUELOS -->
<div class="centered-card mt-4">
    <div class=" card-buscar card p-4">
        <div class="card-body">
            <h5 id="search-flight" class="card-title text-center text-formu">Busca tu Vuelo:</h5>
            <form class="form-inline justify-content-center" method="get" action="Reservarvuelos.php">
                <div class="form-group mt-4">
                    <label id="flight-date" class="text-formu">Fecha de Vuelo:</label>
                    <input type="date" class="form-control" id="fechaVuelo" placeholder="Fecha de Vuelo" name="fecha">
                </div>
                <div class="form-group mt-4">
                    <label id="origin-country" class="text-formu">País de Origen:</label>
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
                    <label id="destination-country" for="Destino" class="text-titulo text-formu">País de Destino:</label>
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
                    <div class="center-button">
                        <button id="search-btn" type="submit" class="mt-5 btn btn-primary full-width-btn">Buscar Vuelo</button>
                    </div>               
            </form>
        </div>
    </div>
</div>
            </form>
        </div>
    </div>
</div>



<div class=" container-fluid texto-titulo  mt-5 ps-5">
        <h5 id="sugerencias-travel">Sugerencias de viajes ></h5>
    </div>


<!-- Carrusel de Promociones de Viajes -->


<div class="container-fluid mt-3 mb-5">
    <div id="carrusel1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carrusel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carrusel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carrusel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            <!-- Primer fila de imágenes -->
            <div class="carousel-item active">
                <div class="row">


                    <div class="col-md-3 mt-5 mb-5">
                        <a href="login.php" class="d-block">
                            <div class="image-container">
                            <img src="../imagen/index/argentina.png" alt="Argentina" class="d-block w-100">
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <h4>Argentina</h4>
                                    <h6>Glaciar Perito Moreno</h6>
                                    <button class="btn btn-primary">Tomar viaje</button> <!-- Cambié el <a> a <button> para evitar conflictos -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 mt-5 mb-5">
                        <a href="login.php" class="d-block">
                            <div class="image-container">
                            <img src="../imagen/index/brasil.png" alt="Argentina" class="d-block w-100">
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <h4>Brasil</h4>
                                    <h6>Río de Janeiro</h6>
                                    <button class="btn btn-primary">Tomar viaje</button> <!-- Cambié el <a> a <button> para evitar conflictos -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 mt-5 mb-5">
                        <a href="login.php" class="d-block">
                            <div class="image-container">
                            <img src="../imagen/index/ElSalvador.png" alt="Argentina" class="d-block w-100">
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <h4>El Salvador</h4>
                                    <h6>Playa El Tunco</h6>
                                    <button class="btn btn-primary">Tomar viaje</button> <!-- Cambié el <a> a <button> para evitar conflictos -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 mt-5 mb-5">
                        <a href="login.php" class="d-block">
                            <div class="image-container">
                            <img src="../imagen/index/guatemala.png" alt="Argentina" class="d-block w-100">
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <h4>Guatemala</h4>
                                    <h6>Ciudad de Antigua Guatemala</h6>
                                    <button class="btn btn-primary">Tomar viaje</button> <!-- Cambié el <a> a <button> para evitar conflictos -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
            <!-- Segundo fila de imágenes -->
            <div class="carousel-item">
                <div class="row">


                    <div class="col-md-3 mt-5 mb-5">
                        <a href="login.php" class="d-block">
                            <div class="image-container">
                            <img src="../imagen/index/MX.png" alt="Argentina" class="d-block w-100">
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <h4>México</h4>
                                    <h6>Chichén Itzá</h6>
                                    <button class="btn btn-primary">Tomar viaje</button> <!-- Cambié el <a> a <button> para evitar conflictos -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 mt-5 mb-5">
                        <a href="login.php" class="d-block">
                            <div class="image-container">
                            <img src="../imagen/index/EEUU.png" alt="Argentina" class="d-block w-100">
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <h4>Estados Unidos</h4>
                                    <h6>Gran Cañón</h6>
                                    <button class="btn btn-primary">Tomar viaje</button> <!-- Cambié el <a> a <button> para evitar conflictos -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 mt-5 mb-5">
                        <a href="login.php" class="d-block">
                            <div class="image-container">
                            <img src="../imagen/index/venezuela.png" alt="Argentina" class="d-block w-100">
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <h4>Venezuela</h4>
                                    <h6>Roraima</h6>
                                    <button class="btn btn-primary">Tomar viaje</button> <!-- Cambié el <a> a <button> para evitar conflictos -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 mt-5 mb-5">
                        <a href="login.php" class="d-block">
                            <div class="image-container">
                            <img src="../imagen/index/peru.png" alt="Argentina" class="d-block w-100">
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <h4>Perú</h4>
                                    <h6>Machu Picchu</h6>
                                    <button class="btn btn-primary">Tomar viaje</button> <!-- Cambié el <a> a <button> para evitar conflictos -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Tercer fila de imágenes -->

            <div class="carousel-item">
                <div class="row">


                <div class="col-md-3 mt-5 mb-5">
                        <a href="login.php" class="d-block">
                            <div class="image-container">
                            <img src="../imagen/index/paraguay.png" alt="Argentina" class="d-block w-100">
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <h4>Paraguay</h4>
                                    <h6>Ciudad del Este</h6>
                                    <button class="btn btn-primary">Tomar viaje</button> <!-- Cambié el <a> a <button> para evitar conflictos -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 mt-5 mb-5">
                        <a href="login.php" class="d-block">
                            <div class="image-container">
                            <img src="../imagen/index/repuDominicana.png" alt="Argentina" class="d-block w-100">
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <h4>República Dominicana</h4>
                                    <h6>Playa Punta Cana</h6>
                                    <button class="btn btn-primary">Tomar viaje</button> <!-- Cambié el <a> a <button> para evitar conflictos -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 mt-5 mb-5">
                        <a href="login.php" class="d-block">
                            <div class="image-container">
                            <img src="../imagen/index/argentina.png" alt="Argentina" class="d-block w-100">
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <h4>Cuba</h4>
                                    <h6>Playa Varadero</h6>
                                    <button class="btn btn-primary">Tomar viaje</button> <!-- Cambié el <a> a <button> para evitar conflictos -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 mt-5 mb-5">
                        <a href="login.php" class="d-block">
                            <div class="image-container">
                            <img src="../imagen/index/jamaica.png" alt="Argentina" class="d-block w-100">
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <h4>Jamaica</h4>
                                    <h6>Playa Seven Mile</h6>
                                    <button class="btn btn-primary">Tomar viaje</button> <!-- Cambié el <a> a <button> para evitar conflictos -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carrusel1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon custom-carousel-control" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carrusel1" data-bs-slide="next">
            <span class="carousel-control-next-icon custom-carousel-control" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- TERMINAN IMAGENES DE PROMOCION -->



    <!--CUADROS DE INFORMACION-->

    <div class=" container-fluid texto-titulo  mt-5 ps-5">
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
                        <a href="maleta.php" class="b-info d-flex flex-column align-items-center btn btn-primary">Ver información</a>
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
                        <a href="ESfly Information.php" class="b-info d-flex flex-column align-items-center btn btn-primary">Ver información</a>
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
                    <div class="card-body" stylesheet="min-height:20px">
                        <h5 class="card-title">Experiencia ESfly</h5>
                        <p class="card-text">Descubre los servicios a bordo que te ofrecemos al volar con nosotros,
                            escribe reseñas.</p>
                        <a href="experienciasESfly.php" class=" b-info d-flex flex-column align-items-center btn btn-primary">Ver información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN DE CUADROS DE INFORMACION-->
    <div class="mt-2 p-5" id="espacio"> </div>
    <!--PREPARAR PARA VIAJAR (CLIENTE)-->
    <div class=" container-fluid texto-titulo  mt-5 ps-5">
        <h5>Información sobre nosotros ></h5>
    </div>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center ">

            <a class="card-prep card card-hover-effect text-center mb-3 " style="width: 22rem;" href="centroAyuda.php">
                <div>
                    <div class="card-body">
                        <h5 class="card-title mt-5">CRITICAS Y SUGERENCIAS</h5>
                        <p class="card-text">Puedes comentarnos tu opinión del viaje.</p>
                    </div>
                </div>
            </a>
            <a class="card-prep card card-hover-effect text-center mb-3 " style="width: 22rem;" href="centroAyuda.php">
                <div>
                    <div class="card-body">
                        <h5 class="card-title mt-5">PROCESO DE DEVOLUCIONES</h5>
                        <p class="card-text">Proceso de devoluciones ESfly.</p>
                    </div>
                </div>
            </a>

            <a class="card-prep card card-hover-effect text-center mb-3 " style="width: 22rem;" href="requisitos para viajar.php">
                <div class="">
                    <div class="card-body">
                        <h5 class="card-title mt-5">REQUISITOS PARA VIAJAR </h5>
                        <p class="card-text">Infórmate acerca de visas, vacunas y demás documentos.</p>
                    </div>
                </div>
            </a>

            <a class="card-prep card card-hover-effect text-center mb-3 " style="width: 22rem;" href="check-in.php">
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
<!-- Final pagina web -->


<!-- Links JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>


<!--Pie de pagina-->
<?php
include("pie.php");
?>
<!--Final Pie-->


</body>
</html>