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
    <!--Fin tipografia-->

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

            width: 30px; /* Tamaño del icono */
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

<?php
include("header-log.php");
?>

<div class="container">
    <div class="info-title">
        Información sobre ESFLY
        <img src="../imagen/header/favicon.png" alt="Icono">
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="info-box">
                <h2>¿Qué es ESFLY?
                    <img src="../imagen/header/favicon.png" alt="Icono">
                </h2>
                <p>ESFLY es una aerolínea salvadoreña comprometida con la accesibilidad y la inclusión, que opera vuelos a destinos en toda América. Nuestro enfoque principal es ofrecer una experiencia de viaje equitativa y personalizada para todos nuestros pasajeros, con especial atención a aquellos que tienen necesidades específicas, como discapacidades físicas o mentales. Desde el proceso de reserva hasta el momento del vuelo, ESFLY asegura que cada pasajero reciba la asistencia que necesita para viajar de manera cómoda y segura.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box">
                <h2>¿Cuál es el objetivo de ESFLY?
                    <img src="../imagen/header/favicon.png" alt="Icono">
                </h2>
                <p>El objetivo de ESFLY es transformar la experiencia de viaje aérea al garantizar que todos nuestros pasajeros, independientemente de sus capacidades, puedan disfrutar de un viaje accesible y sin barreras. Nos dedicamos a ofrecer un servicio inclusivo que no solo cumple con las expectativas de comodidad y seguridad, sino que también permite a nuestros pasajeros seleccionar opciones de asistencia que se adapten a sus necesidades personales, tanto en el aeropuerto como a bordo de nuestros aviones.</p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="info-box-benefits">
                <h2>¿Qué beneficios tiene viajar con nosotros?
                    <img src="../imagen/header/favicon.png" alt="Icono">
                </h2>
                <p>Viajar con ESFLY ofrece varios beneficios únicos:</p>
                <ul>
                    <li><strong>Compromiso con la Accesibilidad:</strong> Somos una aerolínea que entiende la importancia de la accesibilidad. Nuestro servicio está diseñado para asegurar que todas las personas, especialmente aquellas con discapacidades, puedan viajar con facilidad y dignidad.</li><br>
                    <li><strong>Asistencia Personalizada:</strong> Ofrecemos diversas opciones de asistencia que se pueden seleccionar al momento de la reserva, garantizando que cada pasajero reciba el apoyo necesario durante su viaje, desde el check-in hasta el desembarque.</li><br>
                    <li><strong>Proceso de Reserva Sencillo:</strong> Nuestro sistema de reservas está diseñado para ser intuitivo y fácil de usar, permitiendo a todos los pasajeros reservar sus vuelos de manera rápida y sin complicaciones.</li><br>
                    <li><strong>Información Clara y Precisa:</strong> Proporcionamos información detallada y actualizada sobre nuestros servicios y vuelos, para que nuestros pasajeros puedan planificar su viaje con total confianza.</li><br>
                    <li><strong>Experiencia de Viaje Inclusiva:</strong> En ESFLY, cada pasajero es importante. Nos aseguramos de que todos, sin importar sus necesidades específicas, tengan acceso a una experiencia de vuelo segura, cómoda y placentera.</li><br>
                </ul>
                <p>ESFLY es más que una aerolínea; somos un socio comprometido con hacer que cada viaje sea una experiencia positiva para todos nuestros pasajeros, asegurando que puedan disfrutar de sus vuelos sin preocupaciones, con toda la asistencia que necesiten.</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php
include("pie.php");
?>
</body>
</html>
