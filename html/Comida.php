<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Importación de librerias-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />
  <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="../css/headerr.css" />
  <link rel="stylesheet" href="../css/pie.css" />
  <link rel="stylesheet" href="../css/platillosComida.css" />
  <title>Platillos de comida</title>
</head>

<body>
 
  <!--Inicio header-->
  <?php
  include ("header.php");
  ?>

<!--Fin header-->   

  <div class="back">
    <img src="../imagen/platillosComida/fondos.png" alt="" />
    <div class="titulo"><p >Comida</p></div>
  </div>
  <!---->

<div class="container mt-5 mb-5">
    <div class="card mb-3 border-0" >
        <div class="row g-0">
          
          <div class="col-md-12 col-sm-12 col-lg-5">
            <div class="card-body">
              <h2 class="card-title pt-5">Comida en el vuelo</h2>
              <p class="card-text pt-5 ps-3 pe-3">Puedes obtener tus alimentos cuando la azafata se presente entre los pasillos. 
                En ese momento, ella te proporcionará un menú detallado que incluye una variedad de opciones de 
                alimentos y bebidas de excelente calidad. Podrás elegir entre diversas alternativas cuidadosamente 
                seleccionadas para satisfacer tus gustos y necesidades. Además, la azafata estará disponible para 
                responder cualquier pregunta que puedas tener y para asegurarse de que tu experiencia sea placentera 
                y satisfactoria.</p>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-lg-7">
            <img src="../imagen/platillosComida/azafata.png" class="img-fluid rounded-start" alt="azafata">
          </div>
        </div>
      </div>
</div>

    <!--FOOTER-->
    <?php
include ("pie.php");
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>