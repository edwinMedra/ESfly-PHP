<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/Header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/pie.css">
    <link rel="stylesheet" href="../css/tiposDeVuelo.css">
    <!--Comentario sobre el link para importar la tipografia-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <!--Fin tipografia-->
    <!--git hub si sirve-->
    <title>ESFLY</title>
</head>
<body>
    
    <!--Inicio header-->
    <?php
   include ("header.php");
   ?>
    
      <!--Fin header-->
<!--estructura principal de pagina web-->
<div class="container-fluid">
    <!---->
<div class="row w-50 text-white border border-black border-1 p-0 mx-auto rounded-4" id="normal">
    <div class="col-12 col-lg-5 p-0 m-0">
        <img src="../imagen/tiposDeVuelo/image 99.png" alt="" class="w-100 rounded-4">
    </div>
    <div class="col-12 col-lg-7 my-auto mx-auto my-5">
        <h3 class="text-center mb-5">Vuelo Normal</h3>
        <p>Consta de un vuelo común, cómodo y pacífico, para asegurarnos que reciva una buena experiencia con nosotros. </p>
        <div class="text-center w-auto">
        <a class="btn btn-primary" href="#" role="button">Tomar vuelo</a>
        </div>
    </div>
</div>
    <!---->
    <div class="row w-50 bg-white text-dark border border-black border-1 p-0 mx-auto rounded-4 my-5" id="normal">
        <div class="col-12 col-lg-7 my-auto mx-auto">
            <h3 class="text-center">Vuelo Especial</h3>
            <p>Consta de un vuelo con atención especial para personas con alguna discapacidad, incapacidad y futuras madres, se proporcinará una azafata que esperará su llegada al aeropuerto, brindando los cuidos necesarios hasta llegar al avión donde se le acomodará en la zona menos censible del avión, con vigilancia según su condición, para asegurarnos que reciva una buena experiencia .</p>
            <div class="text-center w-auto">
            <a class="btn btn-primary my-3" href="#" role="button">Tomar vuelo</a>
            </div>
        </div>
        <div class="col-12 col-lg-5 p-0 m-0 my-auto">
            <img src="../imagen/tiposDeVuelo/image 100.png" alt="" class="w-100 rounded-4">
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