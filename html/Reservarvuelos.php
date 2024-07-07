<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">

    <!--Comentario sobre el link para importar la tipografia-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/reservarVuelos1.css" />
    <link rel="stylesheet" href="../css/headerr.css" />
    <link rel="stylesheet" href="../css/pie.css" />
    <title>Reserva de vuelos</title>
  </head>
  <body>
    
        <!--Inicio header-->
        <?php
   include ("header.php");
   ?>
    <!--Fin header-->   
    <!-- Estructura principal de pagina principal -->
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
          <button class="carousel-control-next" type="button"  data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
  
          <div class="texto-superpuesto">
              <p>Reserva</p>
          </div>
  </div>
  <div class="container-fluid w-75 my-5 text-center">
    <h4>Primero tiene que iniciar sesión para poder ver sus vuelos y también reservar vuelos</h4>
    <a class="btn btn-primary fs-5 my-2" href="login.php" role="button">Iniciar Sesión</a>
    <div class="d-flex justify-content-center">
      <div class="spinner-border mt-3" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
  </div>
  <?php
include ("pie.php");
?>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
</html>
