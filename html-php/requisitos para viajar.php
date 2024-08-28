<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/index1.css">
    <link rel="stylesheet" href="../css/headerr.css">
    <link rel="stylesheet" href="../css/pie.css">

    <title>ESFLY</title>
    <style>
        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            background-color: #f8f9fa;
            color: #000;
        }
        .info-title {
            margin-top:100px;
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 30px;
        }
        .info-title img {
            width: 30px;
            height: 30px;
            margin-left: 8px;
        }
        .info-box {
            margin-top: 20px;
            background-color: #fff;
            color: #000;
            padding: 1.5rem;
            border-radius: 10px;
            border: 2px solid #000;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.9); 
            max-width: 95%;
            margin-left: auto;
            margin-right: auto;
        }
        .info-box-benefits {
            background-color: #273758;
            color: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 100px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.9); 
            max-width: 95%;
            margin-left: auto;
            margin-right: auto;
        }
        .info-box h2, .info-box-benefits h2 {
            font-size: 1.125rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .info-box p, .info-box-benefits p, .info-box-benefits ul {
            font-size: 0.875rem;
            font-weight: 400;
            margin-bottom: 1rem;
        }
        .info-box img, .info-box-benefits img {
            width: 18px;
            height: 18px;
            margin-left: 8px;
        }
        .container {
            max-width: 1100px;
            margin: auto;
            padding: 15px;
        }
        .row .col-md-6 {
            margin-bottom: 15px;
        }
        @media (min-width: 992px) {
            .info-box, .info-box-benefits {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: flex-start;
                text-align: left;
            }
            .info-box h2, .info-box-benefits h2 {
                margin-bottom: 1.25rem;
            }
        }
    </style>
</head>
<body>

<!--Inicio header-->
<?php include("header-log.php"); ?>
<!--Fin header-->

<div class="container">
    <div class="info-title">
        Requisitos para Viajar al Extranjero
        <img src="../imagen/header/favicon.png" alt="Icono">
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="info-box">
                <h2>Documentación Necesaria
                    <img src="../imagen/header/favicon.png" alt="Icono">
                </h2>
                <p>Para viajar a otros países con ESFLY, es esencial contar con la documentación adecuada. Esto incluye:</p>
                <ul>
                    <li><strong>Pasaporte:</strong> Debe estar vigente por al menos seis meses después de la fecha de regreso.</li>
                    <li><strong>Visa:</strong> Verifique si el país de destino requiere una visa de entrada.</li>
                    <li><strong>Documentos de Salud:</strong> Algunos países requieren comprobantes de vacunación o pruebas médicas específicas.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box">
                <h2>Regulaciones de Equipaje
                    <img src="../imagen/header/favicon.png" alt="Icono">
                </h2>
                <p>Es importante conocer las regulaciones de equipaje antes de viajar:</p>
                <ul>
                    <li><strong>Equipaje de Mano:</strong> Debe cumplir con las dimensiones y peso permitidos.</li>
                    <li><strong>Equipaje Facturado:</strong> Verifique el peso máximo permitido y las tarifas por exceso de equipaje.</li>
                    <li><strong>Artículos Restringidos:</strong> Algunos objetos están prohibidos en el equipaje de mano o facturado.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <div class="info-box-benefits">
                <h2>Consejos para Viajar al Extranjero
                    <img src="../imagen/header/favicon.png" alt="Icono">
                </h2>
                <p>Algunos consejos adicionales para un viaje internacional sin contratiempos:</p>
                <ul>
                    <li><strong>Llegue al Aeropuerto con Anticipación:</strong> Recomendamos llegar al menos 3 horas antes del vuelo.</li>
                    <li><strong>Verifique las Restricciones Aduaneras:</strong> Conozca las restricciones del país de destino sobre lo que puede llevar consigo.</li>
                    <li><strong>Contrate un Seguro de Viaje:</strong> Un seguro de viaje puede ser útil en caso de emergencias médicas o cancelaciones.</li>
                </ul>
                <p>Viajar al extranjero con ESFLY es una experiencia segura y cómoda. Nos aseguramos de que tenga toda la información y asistencia que necesita para un viaje exitoso.</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include("pie.php"); ?>
</body>
</html>
