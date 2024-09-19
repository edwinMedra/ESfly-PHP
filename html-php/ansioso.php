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
  <link rel="stylesheet" href="../css/pie.css" />
    <title>Estas ansioso?</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Estilos personalizados */
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

        /* Efecto hover: sombra y salto al pasar el mouse */
        .card:hover {
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px); /* Salto hacia arriba */
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

        /* Eliminar subrayado de los enlaces dentro de las tarjetas */
        .card a {
            text-decoration: none;
            color: inherit; /* Mantener el color de texto */
        }

        /* Asegurarse de que el estilo se aplique a las tarjetas */
        .card a:hover {
            text-decoration: none; /* Asegurarse de que no haya subrayado al pasar el mouse */
            color: inherit; /* Mantener el color de texto */
        }
    </style>
</head>
<body>


    
  <?php
  include("header-log.php");
  ?>


<div class="container mt-5">
    <div class="row">

        <div class=" footer-text  mt-5 mb-5 ps-5">
            <h5 id="sugerencias-travel"> Pasos que te pueden servir en un ataque de ansiedad ></h5>
    </div>
       

        <!-- Tarjeta con los pasos -->
        <div class="card/">
            <div class="step">
                <span class="step-title">Paso 1.</span> La medicación previa al vuelo siempre es una opción, por supuesto, con la consulta de un profesional de la salud.
            </div>
            <div class="step">
                <span class="step-title">Paso 2.</span> Practica la respiración profunda
            </div>
            <div class="step">
                <span class="step-title">Paso 3.</span> Beber pequeños sorbos de agua
            </div>
            <div class="step">
                <span class="step-title">Paso 4.</span> Come un pequeño bocadillo si tu estómago lo permite
            </div>
            <div class="step">
                <span class="step-title">Paso 5.</span> Utiliza la bolsa de papel que está en el asiento de frente para hacer unas respiraciones continuas
            </div>
            <div class="step">
                <span class="step-title">Paso 6.</span> En dado caso de nauseas utiliza la bolsa de papel para depositar tu vómito
            </div>
            <div class="step">
                <span class="step-title">Paso 7.</span> Mira una película o videos para distraer tu mente. Te recomendamos unos videos que te pueden gustar
            </div>
        </div>

        <!-- Texto final -->
        <div class="footer-text mt-4">
            Selecciona una de nuestras sugerencias para calmar la ansiedad &gt;
        </div>
    </div>
    
    <div class="row mt-4">
        <!-- Tarjeta 1 -->
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <a href="https://www.youtube.com/watch?v=v7oK0gGLeM" target="_blank">
                    <img src="../imagen/estoyAnsioso/img1.png" class="card-img-top" alt="Meditación guiada">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Meditación guiada para calmar la ANSIEDAD</h5>
                </div>
            </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <a href="https://www.youtube.com/watch?v=wSndsVh8HRM" target="_blank">
                    <img src="../imagen/estoyAnsioso/img2.png" class="card-img-top" alt="Meditación para la ansiedad">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Meditación para la ansiedad</h5>
                </div>
            </div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <a href="https://www.youtube.com/watch?v=p0fZXkmWGzE" target="_blank">
                    <img src="../imagen/estoyAnsioso/img3.png" class="card-img-top" alt="Videos graciosos de animales">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Videos graciosos de animales</h5>
                </div>
            </div>
        </div>

        <!-- Tarjeta 4 -->
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <a href="https://www.youtube.com/watch?v=aPcK-E2-0w" target="_blank">
                    <img src="../imagen/estoyAnsioso/img4.png" class="card-img-top" alt="Música relajante">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Música relajante</h5>
                </div>
            </div>
        </div>
    </div>
</div>
  <?php
  include("pie.php")
  ?>

<!-- JavaScript de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
