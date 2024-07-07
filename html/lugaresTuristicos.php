<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="..//css/lugaresTuristicos.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/pie.css">
    <title>Lugares turisticos</title>
</head>
<body>
  <!--Inicio header-->
  <?php
  include ("header.php");
  ?>
    <!--Fin header-->
    <div class="container-fluid my-5">
      <h1 class="text-white text-center fs-1" >¿Qué lugares turísticos se encuentran en américa?</h1>
    </div>
    <!---->
    <div class="container-fluid my-5">
      <div class="row bg-white w-75 mx-auto border border-black border-2 rounded-3" id="info">
        <div class="col-12">
          <p>En Ámerica contamos con multiples lugares turísticos, perfecto para pasar tus vacaciones experimentando y conociendo cosas nuevas. </p>
          <p>Puedes encontrar algunos lugares turísticos que recomienda nuestra página realizando los siguientes pasos: </p>
        </div>
        <div class="col-12 my-2">
          <p><b>Paso 1:</b> Selecciona la opción ofertas y destinos.</p> 
          <img src="../imagen/lugaresTuristicos/paso1.png" alt="" class="w-100">
        </div>
        <div class="col-12 my-2">
          <p><b>Paso 2:</b> Si bajas en la página puedes encontrar lugares turísticos populares y de moda.</p> 
          <img src="../imagen/lugaresTuristicos/paso2.png" alt="" class="w-100">
        </div>
      </div>
    </div>
    <!---->
    <?php
include ("pie.php");
?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>