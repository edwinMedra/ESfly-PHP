<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESfly</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .option-box {
        background-color: #f0f0f0;
        padding: 80px; 
        width: 250px; 
        border-radius: 10px;
        transition: transform 0.3s ease, background-color 0.3s ease;
        font-size: 20px;
        font-weight: bold;
        color: #333;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 10px auto;
    }
    .option-box:hover {
        transform: translateY(-10px);
        background-color: #007bff;
        color: white;
    }
    </style>
</head>
<body>
    <?php
     include("header-log.php");
     $idVuelo = $_GET['idVuelo'];
    ?>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="row text-center">
            <div class="col-md-4">
                <a href="formComun.php?idVuelo=<?php echo $idVuelo?>" style="text-decoration: none;" ><div class="option-box">Normal</div></a>
            </div>
            <div class="col-md-4">
                <div class="option-box">VIP</div>
            </div>
            <div class="col-md-4">
                <a  style="text-decoration: none;" href="formularioVueloEspecial.php?idVuelo=<?php echo $idVuelo?>"><div class="option-box">Especial</div></a>
            </div>
        </div>
    </div>
</body>
</html>