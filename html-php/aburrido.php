<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">

  <!--Comentario sobre el link para importar la tipografia-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/reservarVuelos1.css" />
  <link rel="stylesheet" href="../css/headerr.css" />
  <title>Estas aburrido?</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #f5f5f5;
      font-family: 'Be Vietnam Pro', sans-serif;
    }
    .container {
      margin-top: 30px;
    }

    .header-text {
      text-align: center;
      color: #6c757d;
      font-size: 1.5rem;
      margin-bottom: 20px;
    }

    .card {
      border: none;
      background-color: #f9f9f9;
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
      transform: translateY(-5px); 
    }

    .card img {
      object-fit: cover;
      height: 200px;
      width: 100%;
    }

    .card-body {
      padding: 15px;
    }

    .card-text {
      font-size: 0.9rem;
      color: #6c757d;
    }

    .step {
      margin-bottom: 15px;
    }

    .step-title {
      font-weight: bold;
    }

    .footer-text {
      color: #6c757d;
      font-size: 1.2rem;
    }

    .card a {
      text-decoration: none;
      color: inherit; 
    }

    .card a:hover {
      text-decoration: none; 
      color: inherit; 
    }

    .btn-lg-custom {
      font-size: 1.5rem; 
      padding: 1rem 2rem; 
    }

    .img-custom {
      width: 650px; 
      height: 400px; 
    }

    /* Estilo para alinear botón y imagen en la misma fila */
    .button-image-container {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
    }

    .btn-lg-custom {
    font-size: 80px; 
    padding: 1.5rem 3rem;
    border-radius: 0.5rem; 
    min-width: 250px; 

}

  </style>
</head>

<body>

  <?php include("header-log.php"); ?>

  <div class="container mt-5">
    <div class="row">
      <div class="footer-text mt-5 mb-5 ps-5">
        <h5 id="sugerencias-travel">Algunas ideas para pasar el tiempo en un vuelo ></h5>
      </div>

      <!-- Tarjeta con los pasos -->
      <div class="card-">
        <div class="step">
          <span class="step-title">Leer un libro o una revista:</span> Lleva contigo una lectura que te interese, ya sea física o en formato digital.
        </div>
        <div class="step">
          <span class="step-title">Ver una película o serie:</span> La mayoría de los aviones tienen entretenimiento a bordo, o puedes descargar algo en tu dispositivo antes del vuelo.
        </div>
        <div class="step">
          <span class="step-title">Escuchar música o un podcast:</span> Prepara una lista de reproducción o descarga algunos podcasts que te gusten.
        </div>
        <div class="step">
          <span class="step-title">Jugar a juegos:</span> Ya sean juegos en tu dispositivo móvil o juegos de mesa portátiles.
        </div>
        <div class="step">
          <span class="step-title">Escribir o dibujar:</span> Lleva un cuaderno para escribir, dibujar o planificar tus próximas ideas.
        </div>
        <div class="step">
          <span class="step-title">Trabajar o estudiar:</span> Si tienes trabajo o estudios pendientes, el vuelo puede ser un buen momento para avanzar.
        </div>
        <div class="step">
          <span class="step-title">Meditar o practicar técnicas de relajación:</span> Puede ser un buen momento para relajarte y desconectar.
        </div>
      </div>

      <!-- Texto final -->
      <div class="footer-text mt-4">
        Te damos estas recomendaciones para que puedas distraerte >
      </div>
    </div>

    <div class="row mt-4">
      <!-- Tarjeta 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <a href="https://www.youtube.com/watch?v=2zzWG6EB5xM&list=PLARNzRPnDAQ32ihLCUMmd5FU2hMRn3bg5" target="_blank">
            <img src="../imagen/estasAburrido/bety.png" class="card-img-top" alt="">
          </a>
          <div class="card-body">
            <h5 class="card-title">Cortos de la novela “Yo soy Betty, la fea”</h5>
          </div>
        </div>
      </div>

      <!-- Tarjeta 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <a href="https://www.youtube.com/watch?v=KJq7rtBMkFE" target="_blank">
            <img src="../imagen/estasAburrido/musica.png" class="card-img-top" alt="">
          </a>
          <div class="card-body">
            <h5 class="card-title">Música latina</h5>
          </div>
        </div>
      </div>

      <!-- Tarjeta 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <a href="https://www.youtube.com/watch?v=p0fZXkmWGzE" target="_blank">
            <img src="../imagen/estasAburrido/gato.png" class="card-img-top" alt="">
          </a>
          <div class="card-body">
            <h5 class="card-title">Videos graciosos de animales</h5>
          </div>
        </div>
      </div>

      <!-- Tarjeta 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <a href="https://youtu.be/h7epGd0NDSY?si=sPloYILKUuHOCv3G" target="_blank">
            <img src="../imagen/estasAburrido/heidi.png" class="card-img-top" alt="Música relajante">
          </a>
          <div class="card-body">
            <h5 class="card-title">Película completa de “Heidi”</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-text mt-5 mb-5 ps-5">
    <h5 id="sugerencias-travel">Juego oficial de ESfly ></h5>
  </div>

  <div class="container mt-5 mb-5">
    <div class="row button-image-container">
      <div class="col-auto">
        <a href="juego.html" target="_blank">
          <button class="btn btn-primary btn-lg btn-lg-custom">Jugar juego de Esfly</button>
        </a>
      </div>
      <div class="col-auto">
        <img src="../imagen/juego/juego.png" alt="Imagen de ejemplo" class="img-custom">
      </div>
    </div>
  </div>

  <?php include("pie.php"); ?>

  <!-- JavaScript de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
