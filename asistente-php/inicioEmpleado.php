<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Inicio Asistente</title>

    <style> 

.texto-titulo {
        font-family: "Be Vietnam Pro";
    }

    .back {
        position: relative;
        width: 100%;
        height: 400px; 
        overflow: hidden;
    }

    .img-fondo {
        width: 100%;
        height: 400px;
        object-fit: cover; 
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Filtro oscuro solo sobre la imagen */
    }

    .titulo {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 40px;
        color: white;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        z-index: 1;
    }
        .profile-card {
            background-color: transparent;
            border: 1px solid #999999;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .section-card {
            background-color: #4a6f91;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .section-card:hover {
            background-color: #6f7f91;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            transform: scale(1.05);
        }

        .section-card img {
            width: 100px;
            height: 100px;
        }

        .section-card a {
            text-decoration: none; /* Quitar subrayado */
            color: inherit;
            display: block; /* Asegura que toda el área del cuadro sea clicable */
        }

        .section-card:hover a {
            text-decoration: none; /* Evita que aparezca subrayado en hover */
            color: white;
        }

        .section-card a:hover {
            text-decoration: none;
            color: white;
        }

        /* Estilos responsivos */
        @media (max-width: 767px) {
            .profile-card,
            .section-card {
                width: 100%; /* Ocupan todo el ancho en pantallas pequeñas */
            }
        }
    </style>
</head>

<body>

    <?php include("header_ayudante.php") ?>

    
    <!-- Contenedor de imagen y título -->
    <div class="back">
        <img class="img-fondo" src="../imagen/AsistentesDisponibles/asistentes2.png" alt="Fondo de citas">
        <div class="overlay"></div>
        <div class="titulo">Asistente Especial</div>
    </div>
 

    <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- Perfil de Usuario -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="profile-card shadow">
                    <a href="#" class="d-block mb-2 text-muted">Mi perfil ></a>
                    <?php if ($foto == null) { ?>
                        <img src="../imagen/datosCuenta/foto_usuario.png" alt="Foto de perfil" class="img-fluid rounded-circle border border-1 border-black mx-5">
                    <?php } else { ?>
                        <img src="data:image/jpg;base64,<?php echo base64_encode($foto) ?>" alt="Foto de perfil" class="img-fluid rounded-circle border border-1 border-black mx-5">
                    <?php } ?>
                    <div class="profile-info">
                        <h5><?php echo $nombre ?></h5>
                        <p><b>Horario de servicio:</b> <?php echo $horario ?></p>
                    </div>
                    <a class="btn btn-primary mt-3" href="datos de cuenta.php">Editar perfil</a>
                </div>
            </div>

            <!-- Secciones de Citas y Asistente -->
            <div class="col-lg-4 col-md-12">
                <a href="citas_empleados.php">
                    <div class="section-card shadow">
                        <h5>Citas</h5>
                        <img src="../imagen/inicioAsistente/citas.png" alt="Icono de Citas" class="img-fluid">
                    </div>
                </a>

                <a href="informacion.php">
                    <div class="section-card shadow" style="background-color: #6f7f91;">
                        <h5>¿Qué debe hacer un asistente?</h5>
                        <img src="../imagen/inicioAsistente/mensajes.png" alt="Icono de Asistente" class="img-fluid">
                    </div>
                </a>
            </div>
        </div>
    </div>

    <footer class="mt-5">
        <!-- Contenido del footer -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
