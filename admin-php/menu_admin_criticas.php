<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Admin</title>
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin3.css">
    <style>
            .rating {
            margin-bottom: 10px;
        }

        .fa-star.checked {
            color: gold;
        }

        .rating span {
            cursor: pointer;
        }
        .texto-titulo {
            font-family: "Be Vietnam Pro";
        }

        .back {
            position: relative;
            width: 100%;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .img-fondo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .titulo {
            font-size: 2.5rem;
            /* Responsive font size */
            z-index: 1;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .table-container {
            margin: 20px auto;
            padding: 0 15px;
            /* Responsive padding */
        }

        .table {
            border-collapse: collapse;
            width: 100%;
        }

        /*esto es lo de de reducir la barrita de las tablas*/
        .table th,
        .table td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: center;
        }

        .table th {
            background-color: #343a40;
            color: white;
        }

        .table tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
        }

        .img-perfil {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }

        .title-border {
            border: 1px solid #343a40;
            border-radius: 0.25rem;
            padding: 10px;
            background-color: #f8f9fa;
            margin-bottom: 20px;
        }

        .title-border h5 {
            margin: 0;
            font-weight: bold;
            color: #343a40;
        }

        .card-hover-effect {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card-hover-effect:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);

        }


        /* EL RESPONSIVE DE LAS TALBAS*/
        @media (max-width: 768px) {
            .titulo {
                font-size: 1.75rem;
            }

            .table th,
            .table td {
                padding: 6px;
            }
        }

        @media (max-width: 576px) {
            .titulo {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <?php include("header-admin.php"); ?>
    <div class="back">
        <img src="../imagen/admin/back.png" alt="" class="img-fondo">
        <div class="titulo text-center">Bienvenido <?php echo $nomAdmin ?></div>
    </div>


    <!--TODAS LAS TABLAS DE LOS USUARIOS REGISTRADOS-->
    <div class=" texto-titulo container-fluid mt-5 ps-5 ">
        <h5>Todas las criticas publicadas ></h5>
    </div>


    <div id="reviewsContainer" class="row">
        <!-- Card 1 -->
        <?php
        // imprimir todos los comentarios que ha hecho este usuario 
        $misCriticas = $conexion->query("SELECT nomCliente, apeCliente ,foto, fecha, estrella, msj 
        from usuario inner join criticas on idCliente = idUsuario");

        $filasCriticas = mysqli_num_rows($misCriticas);
        if ($filasCriticas) {
            while ($rowCriticas = $misCriticas->fetch_array()) {
                $miFoto = $rowCriticas['foto'];
                $fechaCritica = $rowCriticas['fecha'];
                $msjCritica = $rowCriticas['msj'];
                $estrellaCritica = $rowCriticas['estrella'];
                $nomCliente = $rowCriticas['nomCliente'];
                $apeCliente = $rowCriticas['apeCliente'];
                $nombreCompleto = $nomCliente . " " . $apeCliente;

                // funcion para establecer cuantas estrellas poner en la critica seleccionada


        ?>

                <div class="col-lg-4 col-12 mb-4 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="user-info">

                                <?php
                                if (!($miFoto == null)) {
                                    echo '<img src="data:image/jpg;base64,' . base64_encode($miFoto) . '" class="rounded-circle my-auto border border-1 border-black mx-1" id="lupa" alt="" height="35px" width="35px" style="object-fit: cover;">';
                                } else {
                                    echo '<img src="../imagen/header_ayudante/logo_usuario.png" class="rounded-circle my-auto border border-1 border-black mx-1" id="lupa" alt="" height="35px" width="35px" style="object-fit: cover;">';
                                }

                                ?>
                                <div>
                                    <?php echo ' <h5 class="d-flex align-items-center">' . htmlspecialchars($nombreCompleto) . ' </h5>'; ?>
                                    <!-- Fecha de publicación -->
                                    <p class="date" style="font-size: 17px;"><?php echo $fechaCritica ?></p>
                                </div>
                            </div>
                            <div class="rating">
                                <?php
                                if ($estrellaCritica == 0) {
                                    echo '
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                        ';
                                }else 
                                if ($estrellaCritica == 1) {
                                    echo '
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                    ';
                                } else if ($estrellaCritica == 2) {
                                    echo '
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                    ';
                                } else if ($estrellaCritica == 3 ) {
                                    echo '
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                    ';
                                } else if ($estrellaCritica == 4) {
                                    echo '
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                    ';
                                } else if ($estrellaCritica == 5) {
                                    echo '
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                    ';
                                }
                                ?>

                            </div>
                            <p class="card-text"><?php echo $msjCritica ?></p>
                            <div class="d-flex align-items-center">
                                <span class="fa fa-heart like-button" data-likes="0"></span>
                                <span class="ml-2" data-likes="0">0 Likes</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
        <?php
            }
        }
        ?>
    </div>

  
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Funcionalidad de estrellas
            const ratingStars = document.querySelectorAll('#rating .fa-star');
            let selectedRating = 0;

            ratingStars.forEach(star => {
                star.addEventListener('click', function() {
                    selectedRating = this.getAttribute('data-value');
                    ratingStars.forEach(star => {
                        if (star.getAttribute('data-value') <= selectedRating) {
                            star.classList.add('checked');
                        } else {
                            star.classList.remove('checked');
                        }
                    });
                    document.getElementById('ratingValue').value = selectedRating;
                });
            });



            // Funcionalidad de "likes"
            document.getElementById('reviewsContainer').addEventListener('click', function(e) {
                if (e.target.classList.contains('like-button')) {
                    const likeButton = e.target;
                    const likeCountSpan = likeButton.nextElementSibling;
                    let likes = parseInt(likeButton.getAttribute('data-likes'), 10);

                    if (likeButton.classList.contains('liked')) {
                        likeButton.classList.remove('liked');
                        likeButton.style.color = 'gray';
                        likes--;
                    } else {
                        likeButton.classList.add('liked');
                        likeButton.style.color = 'red';
                        likes++;
                    }

                    likeButton.setAttribute('data-likes', likes);
                    likeCountSpan.textContent = `
                    $ {
                        likes
                    }
                    Likes`;
                }
            });
        });
    </script>


</body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</html>