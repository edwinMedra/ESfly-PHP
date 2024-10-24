<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia Aerolínea para Personas Discapacitadas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgba(255, 255, 255, 0.1); /* Fondo del cuerpo transparente */
        }
        .hero {
            background: url('../imagen/AsistentesDisponibles/asistentes3.png') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        .section {
            padding: 60px 0;
        }
        .card {
            background-color: transparent; /* Sin fondo */
            border: 1px solid rgba(128, 128, 128, 0.5); /* Bordes grises suaves */
            margin-bottom: 20px; /* Espaciado entre tarjetas */
        }
    </style>
</head>
<body>
<?php include("header_ayudante.php") ?>

    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Asistencia Aerolínea</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#about">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Servicios</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Encabezado -->
    <div class="hero">
        <h1>Bienvenidos a Asistencia Aerolínea</h1>
        <p>Comprometidos a hacer que tu viaje sea accesible y cómodo.</p>
    </div>

    <!-- Sección Sobre Nosotros -->
    <div class="section" id="about">
        <div class="container">
            <h2 class="text-center">Sobre Nosotros</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <p>En Asistencia Aerolínea, nuestro objetivo es brindar un servicio excepcional a las personas discapacitadas. Contamos con personal capacitado para ayudar a nuestros pasajeros en todas las etapas de su viaje, desde el check-in hasta el desembarque.</p>
                            <p>Nuestra misión es garantizar que cada pasajero reciba el apoyo necesario para disfrutar de una experiencia de viaje sin preocupaciones. Creemos que la accesibilidad es un derecho fundamental, y trabajamos para eliminar las barreras que enfrentan las personas con discapacidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de Servicios -->
    <div class="section" id="services">
        <div class="container">
            <h2 class="text-center">Servicios Ofrecidos</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Asistencia en el aeropuerto: Ayuda desde el momento de la llegada hasta la salida.</li>
                                <li class="list-group-item">Embarque y desembarque prioritario: Procedimientos especiales para evitar esperas.</li>
                                <li class="list-group-item">Transporte en silla de ruedas: Servicios disponibles para traslado dentro del aeropuerto.</li>
                                <li class="list-group-item">Ayuda durante el vuelo: Asistencia del personal de vuelo según sea necesario.</li>
                                <li class="list-group-item">Información sobre accesibilidad: Detalles sobre instalaciones y servicios disponibles en cada destino.</li>
                                <li class="list-group-item">Capacitación del personal: Todo nuestro equipo está entrenado para ofrecer la mejor atención.</li>
                                <li class="list-group-item">Apoyo emocional: Disponibilidad de asistencia para garantizar el bienestar del pasajero.</li>
                                <li class="list-group-item">Guías de accesibilidad: Proporcionamos información detallada sobre las instalaciones en los aeropuertos y aviones.</li>
                                <li class="list-group-item">Servicios de acompañamiento: Ofrecemos asistencia personal durante todo el proceso de viaje.</li>
                                <li class="list-group-item">Atención a necesidades dietéticas: Garantizamos opciones de comida adecuadas y accesibles durante el vuelo.</li>
                                <li class="list-group-item">Facilidades de comunicación: Proporcionamos información en formatos accesibles y asistencia para la comunicación.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>