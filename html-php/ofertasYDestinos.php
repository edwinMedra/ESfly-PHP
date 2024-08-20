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
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
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
.titulo{
    top: 15%;
}
}
    .estatua_libertad{
        object-fit: cover;
    }
   </style>
<?php 
include("header-log.php");
?> 
   


<div class="position-relative text-center my-5">
    <img src="../imagen/ofertasyDestinos/newYork.png" alt="Imagen de fondo" class=" estatua_libertad img-fluid w-100 mt-2" style="max-height: 600px; object-fit: cover; filter: brightness(50%);">
    <div class="position-absolute top-50 start-50 translate-middle w-100 d-flex justify-content-between px-5">
        <span class="text-white fw-bold" style="font-size: 70px">STATUE OF</span>
        <span class="text-white fw-bold" style="font-size: 70px;">LIBERTY</span>
    </div>

    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4">
        <a href="newyork.php" class="btn btn-primary btn-lg" style="font-size: 20px; font-family: Be Vietnam Pro">Tomar vuelos</a>
    </div>
</div>

<div class=" container-fluid texto-titulo  mt-5 ps-5">
    <h5 id="sugerencias-travel">Sugerencias de viajes ></h5>
</div>




<!-- Carrusel de Promociones de Viajes 1  -->
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
                                    <button class="btn btn-primary">Tomar viaje</button> 
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
                                    <button class="btn btn-primary">Tomar viaje</button> 
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
                                    <button class="btn btn-primary">Tomar viaje</button> 
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
                                    <button class="btn btn-primary">Tomar viaje</button> 
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
                                    <button class="btn btn-primary">Tomar viaje</button> 
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
                                    <button class="btn btn-primary">Tomar viaje</button> 
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
                                    <button class="btn btn-primary">Tomar viaje</button> 
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
                                    <button class="btn btn-primary">Tomar viaje</button> 
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
                                    <button class="btn btn-primary">Tomar viaje</button> 
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
                                    <button class="btn btn-primary">Tomar viaje</button> 
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
                                    <button class="btn btn-primary">Tomar viaje</button> 
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
                                    <button class="btn btn-primary">Tomar viaje</button> 
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
<!-- TERMINAN IMAGENES DE PROMOCION 1 -->


<div class="container-fluid texto-titulo mt-5 mb-5 ps-5">
        <h5 id="sugerencias-travel">Lugares turísticos populares ></h5>
    </div>
<!-- Lugares turísticos populares -->
<div class="container my-5">
    <p class="fs-5" style="color: #8B8B8B; font-family: 'Red Hat Display';"></p>

   

    <!-- Fila de tarjetas -->
    <div class="row g-4 text-center">
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100 border rounded-3 bg-transparent" style="transition: transform 0.3s;">
                <img src="../imagen/ofertasyDestinos/iguazu.png" alt="Cataratas de Iguazú (Brasil/Argentina)" class="card-img-top rounded-3" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><b>Cataratas de Iguazú (Brasil/Argentina)</b></h5>
                    <p class="card-text">Este sistema de cascadas es el más grande del mundo, con hasta 275 cataratas. La Garganta del Diablo es la más impresionante y se extiende a ambos lados de la frontera entre Brasil y Argentina.</p>
                    <a href="iguazu.php" class="btn btn-primary border-0">Tomar vuelo</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100 border rounded-3 bg-transparent" style="transition: transform 0.3s;">
                <img src="../imagen/ofertasyDestinos/uyuni.png" alt="Salar de Uyuni (Bolivia)" class="card-img-top rounded-3" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><b>Salar de Uyuni (Bolivia)</b></h5>
                    <p class="card-text">El salar más grande del mundo, ubicado en los Andes bolivianos, es un inmenso desierto de sal que se convierte en un espejo natural durante la temporada de lluvias.</p>
                    <a href="uyuni.php" class="btn btn-primary border-0">Tomar vuelo</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100 border rounded-3 bg-transparent" style="transition: transform 0.3s;">
                <img src="../imagen/ofertasyDestinos/chile.png" alt="Torres del Paine (Chile)" class="card-img-top rounded-3" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><b>Torres del Paine (Chile)</b></h5>
                    <p class="card-text">Ubicado en la Patagonia chilena, este parque nacional es famoso por sus montañas, glaciares y lagos. Es un destino de ensueño para los amantes de la naturaleza y el senderismo.</p>
                    <a href="torresdelpaine.php" class="btn btn-primary border-0">Tomar vuelo</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Segunda fila de tarjetas -->
    <div class="row g-4 text-center">
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100 border rounded-3 bg-transparent" style="transition: transform 0.3s;">
                <img src="../imagen/ofertasyDestinos/ecuador1.png" alt="Centro Histórico de Quito (Ecuador)" class="card-img-top rounded-3" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><b>Centro Histórico de Quito (Ecuador)</b></h5>
                    <p class="card-text">El centro histórico de Quito es uno de los mejor conservados y menos alterados de América Latina. Es un lugar lleno de historia y cultura, con numerosas iglesias y edificios coloniales.</p>
                    <a href="quito.php" class="btn btn-primary border-0">Tomar vuelo</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100 border rounded-3 bg-transparent" style="transition: transform 0.3s;">
                <img src="../imagen/ofertasyDestinos/argentina1.png" alt="Parque Nacional Los Glaciares (Argentina)" class="card-img-top rounded-3" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><b>Parque Nacional Los Glaciares (Argentina)</b></h5>
                    <p class="card-text">Este parque nacional alberga el famoso glaciar Perito Moreno y otros 47 glaciares, todos alimentados por la capa de hielo más grande fuera de las áreas polares.</p>
                    <a href="glaciares.php" class="btn btn-primary border-0">Tomar vuelo</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100 border rounded-3 bg-transparent" style="transition: transform 0.3s;">
                <img src="../imagen/ofertasyDestinos/mexico1.png" alt="Chichén Itzá (México)" class="card-img-top rounded-3" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><b>Chichén Itzá (México)</b></h5>
                    <p class="card-text">Este sitio arqueológico maya es una de las nuevas siete maravillas del mundo. Destaca por su pirámide de Kukulkán y sus otros templos y monumentos antiguos.</p>
                    <a href="chichenitza.php" class="btn btn-primary border-0">Tomar vuelo</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tercera fila de tarjetas -->
    <div class="row g-4 text-center">
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100 border rounded-3 bg-transparent" style="transition: transform 0.3s;">
                <img src="../imagen/ofertasyDestinos/belice.png" alt="La Habana Vieja (Cuba)" class="card-img-top rounded-3" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><b>La Habana Vieja (Cuba)</b></h5>
                    <p class="card-text">La Habana Vieja es el corazón histórico de la capital cubana, con su arquitectura colonial bien conservada, plazas históricas y una vibrante vida cultural.</p>
                    <a href="habana.php" class="btn btn-primary border-0">Tomar vuelo</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100 border rounded-3 bg-transparent" style="transition: transform 0.3s;">
                <img src="../imagen/ofertasyDestinos/peru.png" alt="Machu Picchu (Perú)" class="card-img-top rounded-3" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><b>Machu Picchu (Perú)</b></h5>
                    <p class="card-text">La ciudadela inca de Machu Picchu es uno de los destinos más emblemáticos del mundo, situada en lo alto de los Andes y rodeada de impresionantes paisajes montañosos.</p>
                    <a href="machupicchu.php" class="btn btn-primary border-0">Tomar vuelo</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100 border rounded-3 bg-transparent" style="transition: transform 0.3s;">
                <img src="../imagen/ofertasyDestinos/colombia.png" alt="Cartagena de Indias (Colombia)" class="card-img-top rounded-3" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><b>Cartagena de Indias (Colombia)</b></h5>
                    <p class="card-text">Cartagena de Indias, con su ciudad amurallada y su rica historia colonial, es uno de los destinos turísticos más populares de Colombia y un tesoro cultural de América Latina.</p>
                    <a href="cartagena.php" class="btn btn-primary border-0">Tomar vuelo</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Estilos adicionales -->
<style>
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>




<div class=" container-fluid texto-titulo  mt-5 mb-5 ps-5">
    <h5 id="sugerencias-travel">Ofertas de viajes ></h5>
</div>

<div class="end">
    <img src="../imagen/ofertasyDestinos/end.png" alt="">
    <div class="container-fluid text-center" id="info">
        <div class="row">
          <div class="col" id="vaca" style="color: #0a2470">
            VACACIONES MARZO Y AGOSTO 
          </div>
          <div class="col" id="descuento">
            <img src="../imagen/ofertasyDestinos/circulo.png" alt="">
            30% descuento
          </div>
        </div>
      </div>
      
</div>


<!--Pie de pagina-->
<?php
include("pie.php");
?>
<!--Final Pie-->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</html>