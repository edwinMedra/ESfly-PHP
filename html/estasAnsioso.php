<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Importación de librerias-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estasAnsioso.css">
    <link rel="stylesheet" href="../css/pie.css">
    <link rel="stylesheet" href="../css/headerr.css">
    <title>¿Estas ansioso?</title>
</head>
<body>

    <!--Inicio header-->
    <?php
    include ("header.php");
    ?>
    <!--Fin header-->
      <!--Imagen principal-->
    <!--Imagen principal de la pagina web-->
    <div class="back">
        <img src="../imagen/estoyAnsioso/back.png" alt="">
        <div class="titulo">
            <p>¿Estas ansioso?</p>
        </div>
    </div>
    <p class="fs-5  mt-5 ms-5" id="titulo" >Pasos que te pueden servir en un ataque de ansiedad></p>
    <div class="container mx-auto rounded-5 px-5 py-4 my-5" id="principal">

        <p><b>Paso 1.</b> La medicación previa al vuelo siempre es una opción, por supuesto, con la consulta de un 
        profesional de la salud.</p>

      <p><b>Paso 2.</b> Practica la respiración profunda.</p>

        <p><b>Paso 3.</b> Beber pequeños sorbos de agua.</p>

        <p><b>Paso 4.</b> Come un pequeño bocadillo si tu estómago lo permite.</p>
        <p><b>Paso 5.</b> Utiliza la bolsa de papel que esta en el asiento de frente para hacer unas respiraciones continuas .</p>
        <p><b>Paso 6.</b> En dado caso de nauseas utiliza la bolsa de papel para depositar tu vomito.</p>
        <p><b>Paso 7.</b> Mira una pelicula o videos para distraer tu mente. Te recomendamos unos vídeos que te pueden gustar.</p>
      </div>
      <!--Empiza album de imagenes-->
      <div class="container-fluid my-5 px-5">
        <h6>Selecciona una de nuestras sugerencias para calmar la ansiedad ></h6>
        <div class="row">
          <div class="col-12 col-lg-6 my-2">
            <div class="row text-center ">
              <div class="col-12 "><img src="../imagen/estoyAnsioso/img1.png" alt="" class="w-75"></div>
              <div class="col-12 bg-white p-0 py-2" id="texto">
                <h6>Meditación guiada para calmar la ANSIEDAD</h6>
                <a href="https://www.youtube.com/watch?v=vr7oKogGLeM" target="_blank" class="text-decoration-none" id="link-1"><p class="text-dark">Enlace dirijido hacia youtube</p></a>
              </div>
            </div>
          </div>
          <!---->
          <div class="col-12 col-lg-6 my-2">
            <div class="row text-center ">
              <div class="col-12 "><img src="../imagen/estoyAnsioso/img2.png" alt="" class="w-75"></div>
              <div class="col-12 bg-white p-0 py-2" id="texto">
                <h6>Música latina</h6>
                <a href="https://www.youtube.com/watch?v=wSndsVh8HRM" target="_blank" class="text-decoration-none" id="link-1"><p class="text-dark">Enlace dirijido hacia youtube</p></a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 my-2">
            <div class="row text-center ">
              <div class="col-12 "><img src="../imagen/estasAburrido/gato.png" alt="" class="w-75"></div>
              <div class="col-12 bg-white p-0 py-2" id="texto">
                <h6>Videos graciosos de animales </h6>
                <a href=" https://www.youtube.com/watch?v=p0fZXkmWGzE" target="_blank" class="text-decoration-none" id="link-1"><p class="text-dark">Enlace dirijido hacia youtube</p></a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 my-2">
            <div class="row text-center ">
              <div class="col-12 "><img src="../imagen/estoyAnsioso/img4.png" alt="" class="w-75"></div>
              <div class="col-12 bg-white p-0 py-2" id="texto">
                <h6>Videos graciosos de animales </h6>
                <a href=" https://www.youtube.com/watch?v=QaPCk-E2-0w" target="_blank" class="text-decoration-none" id="link-1"><p class="text-dark">Enlace dirijido hacia youtube</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!---->
      <?php
include ("pie.php");
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>