<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Críticas y Sugerencias</title>

    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/headerr.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: "Be Vietnam Pro";
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .user-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px;
        }

        .user-info img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-bottom: 5px;
        }

        .user-info h5 {
            margin-bottom: 5px;
        }

        .user-info .date {
            color: lightgray;
            font-size: 0.9em;
        }

        .rating {
            margin-bottom: 10px;
        }

        .fa-star.checked {
            color: gold;
        }

        .rating span {
            cursor: pointer;
        }

        .like-button {
            cursor: pointer;
            color: gray;
            font-size: 1.5em;
        }

        .like-button.liked {
            color: red;
        }
    </style>

</head>



<body>
    <?php
    include("header-log.php");

    ?>

    <div class="container mt-5">
        <!-- Formulario para agregar críticas -->

        <div class="mt-2 p-5" id="espacio"> </div>
        <div class="mb-4 mt-5">
            <h3 class="card-title text-center mt-5 mb-5"><img src="../imagen/header/favicon.png" class="img-fluid me-3" width="35"></a> Comparte tu experiencia en ESfly: </h3>
            <form id="reviewForm" method="POST">
                <div class="form-group">
                    <label for="userName">Nombre</label>
                    <input type="text" class="form-control mb-3" id="userName" disabled readonly value="<?php echo $nombreCompleto ?>">
                </div>

                <div class="form-group">
                    <label for="reviewText">Crítica</label>
                    <textarea class="form-control mb-3" id="reviewText" rows="3" name="msj" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label>Calificación</label>
                    <div id="rating" class="rating">
                        <span class="fa fa-star" data-value="1"></span>
                        <span class="fa fa-star" data-value="2"></span>
                        <span class="fa fa-star" data-value="3"></span>
                        <span class="fa fa-star" data-value="4"></span>
                        <span class="fa fa-star" data-value="5"></span>
                    </div>
                    <input type="hidden" id="ratingValue" value="0" name="stars">
                </div>
                <button type="submit" class="btn btn-primary mb-3" name="enviar">Agregar Comentario</button>
            </form>
        </div>

        <div class=" texto-titulo container mt-5">
            <h5 id="search-flight-title">Mis comentarios ></h5>
        </div>
        <!-- Mis comentarios  -->
         <div class="row">
        <?php
        // imprimir todos los comentarios que ha hecho este usuario 
        $misCriticas = $conexion->query("SELECT nomCliente, apeCliente ,foto, fecha, estrella, msj,msjAdmin,estado,idAdmin 
        from usuario inner join criticas on idCliente = idUsuario where idCliente = '$id'");

        $filasCriticas = mysqli_num_rows($misCriticas);
        if ($filasCriticas) {
            while ($rowCriticas = $misCriticas->fetch_array()) {
                $miFoto = $rowCriticas['foto'];
                $fechaCritica = $rowCriticas['fecha'];
                $msjCritica = $rowCriticas['msj'];
                $estrellaCritica = $rowCriticas['estrella'];
                $estadoMio = $rowCriticas['estado'];
                $idAdminMio = $rowCriticas['idAdmin'];
                $msjAdminMio = $rowCriticas['msjAdmin'];
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
                                if($estrellaCritica == 0){
                                    echo '
                                    <span class="fa fa-star"></span>
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
                                }else if($estrellaCritica == 2){
                                    echo '
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                    ';
                                }else if($estrellaCritica == 3){
                                    echo '
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                    ';
                                }else if($estrellaCritica == 4){
                                    echo '
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                    ';
                                }else if($estrellaCritica == 5){
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
                            <?php
                                // proceso en caso de que el mensaje haya sido contestado
                                if (!($estadoMio == null)) {
                                    $sqlCritica = $conexion->query("SELECT * FROM administradores where idAdmin = $idAdminMio");
                                    $rowCriticaAdmin = $sqlCritica->fetch_array();
                                    $nomCompleto = $rowCriticaAdmin['nomAdmin'] . " " . $rowCriticaAdmin['apeAdmin'];
                                    echo '
                                          <span>
                                        <p><b>Critica contestada por</b>:<br>Administrador de ESfly<p>
                                        <p>
                                         <b>Mensaje:</b><br>
                                        '. $msjAdminMio .'</p>
                                    </span>
                                        ';
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <!---->
        <?php
            }
        }
        ?>
        </div>
        <div class=" texto-titulo container mt-5">
            <h5 id="search-flight-title">Todos los comentarios ></h5>
        </div>


        <!-- Contenedor de tarjetas -->

        <div id="reviewsContainer" class="row">
            <!-- Card 1 -->
        <?php
        // imprimir todos los comentarios que ha hecho este usuario 
        $misCriticas = $conexion->query("SELECT nomCliente, apeCliente ,foto, fecha, estrella, msj,idAdmin, msjAdmin, idAdmin,estado 
        from usuario inner join criticas on idCliente = idUsuario where idCliente != '$id' ");

        $filasCriticas = mysqli_num_rows($misCriticas);
        if ($filasCriticas) {
            while ($rowCriticas = $misCriticas->fetch_array()) {
                $estado = $rowCriticas['estado'];
                $msjAdmin = $rowCriticas['msjAdmin'];
                $idAdmin = $rowCriticas['idAdmin'];
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
                                if (!($foto == null)) {
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
                                if($estrellaCritica == 0){
                                    echo '
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                        ';
                                }
                                if ($estrellaCritica == 1) {
                                    echo '
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                    ';
                                }else if($estrellaCritica == 2){
                                    echo '
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                    ';
                                }else if($estrellaCritica == 3){
                                    echo '
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                    ';
                                }else if($estrellaCritica == 4){
                                    echo '
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                    ';
                                }else if($estrellaCritica == 5){
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
                                <span class="ml-       $idAdmin = $rowCriticas['idAdmin'];
                    $msjAdmin = $rowCriticas['msjAdmin'];
                    $idAdmin = $rowCriticas['idAdmin'];2" data-likes="0">0 Likes</span>
                            </div>
                            <?php
                                // proceso en caso de que el mensaje haya sido contestado
                                if (!($estado == null)) {
                                    $sqlCritica = $conexion->query("SELECT * FROM administradores where idAdmin = $idAdmin");
                                    $rowCriticaAdmin = $sqlCritica->fetch_array();
                                    $nomCompleto = $rowCriticaAdmin['nomAdmin'] . " " . $rowCriticaAdmin['apeAdmin'];
                                    echo '
                                          <span>
                                        <p><b>Critica contestada por</b>:<br>Administrador de ESfly<p>
                                        <p>
                                         <b>Mensaje:</b><br>
                                        '. $msjAdmin .'</p>
                                    </span>
                                        ';
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <!---->
        <?php
            }
        }
        ?>
        </div>
    </div>

    <!-- ESRELLAS Y LIKES -->
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

    <!-- fuente para el like y las estrellas -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap JS -->



    <div class="mt-2 p-5" id="espacio"> </div>
    <?php include("pie.php"); ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</html>
<?php
$enviar = isset($_POST['enviar']);
if ($enviar) {
    // proceso para guardar las criticas de los usuarios 
    date_default_timezone_set('America/El_Salvador');
    $fecha_actual = date('Y-m-d'); // tomar fecha para guardarla a la base de datos 
    $critica = trim($_POST['msj']);
    $stars = $_POST['stars'];
    $sql = $conexion->query("INSERT INTO criticas VALUES (null, '$id', '$fecha_actual', '$stars','$critica',null,null,null,null)");
    if ($sql) {
        echo "<script>alert('Critica publicada exitosamente')
        window.location.href = 'criticasSugerencias.php'
        </script>";
    }
}
?>