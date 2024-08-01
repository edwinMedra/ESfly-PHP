<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Comentario sobre el link para importar la tipografia-->
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../css/ofertasYDestinos.css">
    <link rel="stylesheet" href="../css/headerr.css" />
    <link rel="stylesheet" href="../css/pie.css" />
    <!--Fin tipografia-->
    <title>Ofertas y Destinos</title>
</head>

<body>
    <style>
        @media screen and (max-width:768px) {
            .titulo {
                top:10%;
            }
        }

        .custom-carousel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 5%;
            height: 5%;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            z-index: 1;
        }

        .custom-carousel-control:hover {
            background-color: rgba(0, 0, 0, 1);
        } 
        
        .custom-carousel-control.prev {
            left: -2%;
        }

        .custom-carousel-control.next {
            right: -2%;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            width: 30px;
            height: 30px;
        }

        #carouselExampleIndicators {
            position: relative;
        }
    </style>

    <!--Inicio header-->
    <?php
    include ("header.php");
    ?>

    <!--Fin header-->


    <div class="back">
        <img src="../imagen/ofertasyDestinos/back.png" alt="">
        <div class="titulo"> <span>STATUE OF</span> <span>LIBERTY</span>        </div>
        <!--Botones de imagen principal-->
        <!---->
    </div>


    <!-- Carrusel 1 de Promociones de Viajes -->


<div class="container-fluid mt-5 mb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon custom-carousel-control" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon custom-carousel-control" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- TERMINAN IMAGENES DE PROMOCION 1-->



    <!--Lugares turistico populares titulo-->
    <div class="container-fluid my-1">
        <p class="fs-5 mt-5" style="color: #8B8B8B; font-family: 'red hat display';">Lugares turísticos populares ></p>
        <!--Columnas de informacion-->
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-12 col-md-4 mx-auto bg-white rounded-4 my-4">
                    <div class="">
                        <img src="../imagen/ofertasyDestinos/iguazu.png" alt="" class="w-100 rounded-4">
                        <div class="container-fluid">
                            <p class="text-center fs-5 my-3"><b>Cataratas de Iguazú (Brasil)</b></p>
                            <p>Este lugar es uno de los más espectaculares que ver en Latinoamérica. Cuando hablamos de
                                maravillas naturales, pocas son tan impresionantes como las Cataratas de Iguazú. Son el
                                sistema de cascadas más grande del mundo. De hecho, hay hasta 275 cataratas de varios
                                tamaños. La Garganta del Diablo es la más grande y espectacular, aunque el conjunto te
                                dejará sin palabras. </p>
                            <a href="login.php" class="btn btn-primary border-0">Tomar vuelo</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mx-auto bg-white rounded-4 my-4">
                    <div class="iguazu pb-5">
                        <img src="../imagen/ofertasyDestinos/uyuni.png" class="w-100 rounded-4" alt="">
                        <div class="container-fluid">
                            <p class="text-center fs-5 my-3"><b>Salar de Uyuni (Bolivia)</b></p>
                            <p>Se trata del salar más grande del mundo y el principal atractivo de Bolivia. ¡Tiene casi
                                11.000 kilómetros cuadrados de superficie! De hecho, los astronautas dicen que es el
                                punto que más se refleja del planeta. Esta joya natural se encuentra en los Andes a casi
                                3.700 metros sobre el nivel del mar. </p>
                            <a href="login.php" class="btn btn-primary border-0">Tomar vuelo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--segunda garleria de informacion-->
        <div class="container-fluid text-center" id="tablita">
            <div class="row">
                <div class="col-12 col-md-4 mx-auto bg-white rounded-4 my-4">
                    <div class="">
                        <img src="../imagen/ofertasyDestinos/chile.png" class="w-100 rounded-4" alt="">
                        <div class="container">
                            <p class="text-center fs-5 my-3"><b> Parque Nacional Torres del Paine
                                    (Chile)</b></p>
                            <p>Este parque nacional es uno de los más bonitos que ver en Sudamérica. Se encuentra en
                                la Patagonia chilena y es una de las áreas silvestres más protegidas del país. En su
                                interior podrás visitar valles, ríos, lagos o glaciares como el Grey, el más famoso. 
                            </p>
                            <a href="login.php" class="btn btn-primary border-0">Tomar vuelo</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mx-auto bg-white rounded-4 my-4">
                    <div class="iguazu">
                        <img src="../imagen/ofertasyDestinos/ecuador1.png" class="w-100 rounded-4" alt="">
                        <div class="container">
                            <p class="text-center fs-5 my-3"><b> Centro histórico de Quito (Ecuador)</b></p>
                            <p>EQuito es una de las ciudades más infravaloradas de América del Sur. ¡Empezando porque
                                es la capital más alta del mundo! Es cierto que La Paz es más alta, pero la capital de
                                Bolivia es Sucre. ¡Y también la más cercana al Ecuador!
                                Sin embargo, el principal atractivo de Quito es su centro histórico. Fundado por los
                                españoles en 1534, es el mejor conservado y menos alterado del continente.  </p>
                            <a href="login.php" class="btn btn-primary border-0">Tomar vuelo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Tercera galeria de informacion-->
        <div class="container-fluid text-center my-5" id="tablita">
            <div class="row">
                <div class="col-12 col-md-4 mx-auto bg-white rounded-4 my-4">
                    <div class="iguazu">
                        <img src="../imagen/ofertasyDestinos/argentina1.png" class="w-100 rounded-4" alt="">
                        <div class="container">
                            <p class="text-center fs-5 my-3"><b> Parque Nacional Los Glaciares y el Perito Moreno
                                    (Argentina)</b></p>
                            <p>El parque nacional más grande de Argentina no podía faltar en esta lista de los mejores
                                lugares que ver en Latinoamérica. ¿Sabías que allí se encuentra la capa de hielo más
                                grande fuera de las áreas polares? Alimenta, nada más y nada menos, que a 47 enormes
                                glaciares.</p>
                            <a href="login.php" class="btn btn-primary border-0">Tomar vuelo</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mx-auto bg-white rounded-4 my-4">
                    <div class="iguazu">
                        <img src="../imagen/ofertasyDestinos/mexico1.png" class="w-100 rounded-4" alt="">
                        <div class="container">
                            <p class="text-center fs-5 my-3"><b> Chichén Itzá y Riviera Maya (México)</b></p>
                            <p>México es uno de los grandes destinos turísticos mundiales. ¡Tiene tantas cosas por
                                ver! Desde el Chichén Itzá, las ruinas mayas más famosas del mundo, hasta las
                                paradisiacas playas de la Riviera Maya. ¡No te vas a aburrir! Respecto a Chichén
                                Itzá, visitar esta antigua capital maya y ver sus impresionantes templos como el de
                                Kukulkán es una experiencia magnífica. </p>
                            <a href="login.php" class="btn btn-primary border-0">Tomar vuelo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <p class="fs-5 mt-5" style="color: #8B8B8B; font-family: 'red hat display';">Ofertas de viajes ></p>
    </div>
    <div class="end">
        <img src="../imagen/ofertasyDestinos/end.png" alt="">
        <div class="container-fluid text-center" id="info">
            <div class="row">
                <div class="col" id="vaca">
                    VACACIONES MARZO Y AGOSTO
                </div>
                <div class="col" id="descuento">
                    <img src="../imagen/ofertasyDestinos/circulo.png" alt="">
                    30% descuento
                </div>
            </div>
        </div>

    </div>
    <!--Footer de pagina web-->
    <?php
include ("pie.php");
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>