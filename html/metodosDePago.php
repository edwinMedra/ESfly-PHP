<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
        <!--Comentario sobre el link para importar la tipografia-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!--Fin tipografia-->
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/pie.css">
        <link rel="stylesheet" href="..//css/metodosDePago.css">
    <title>Métodos de pago</title>
</head>
<body>
    <!--Inicio header-->
    <?php
   include ("header.php");
   ?>
      <!--Fin header-->
      <div class="container-fluid my-5" id="pago">
        <h1 class="text-center text-white mt-5">metodos de pago</h1>
        <div class="row bg-white w-50 mx-auto border border-black border-1 rounded-3 my-5">
            <div class="col-12 px-5 py-2">
                <p>
                Si vas a utilizar una tarjeta de crédito o débito que no pertenece a una entidad bancaria de Colombia, deberás habilitarla para compras internacionales. Adicionalmente, te recomendamos que verifiques con tu banco el costo de la transacción para este tipo de compras.</p>
            </div>
            <div class="col-12">
                <img src="../imagen/metodosDePago/tarjetas.png" alt="" class="w-100 mx-auto">
            </div>
        </div>
      </div>
<!--Inicia el footer-->
<?php
include ("pie.php");
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>