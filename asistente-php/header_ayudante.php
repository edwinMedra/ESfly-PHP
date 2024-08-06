   <?php
    // proceso para hacer el backend para tener los datos de el usuario
    include("conex.php");
    session_start();
    $sesion = $_SESSION['$id'];
    if ($sesion == null || $sesion == '') {
        header("Location:../html/index.php");
    }

    // hacer consulta del asistente que ha iniciado sesión 
    $query = $conexion->query("SELECT * FROM asistente where idAsistente='$sesion'");
    $row = $query->fetch_assoc();
    $nombre = $row['nomAsistente'];
    $apellido = $row['apeAsistente'];
    $telefono = $row['numTelefono'];
    $servicios = $row['servicios'];
    $horario = $row['horarioTrabajo'];
    $genero = $row['genero'];
    $correo = $row['correoAsisten'];
    $foto = $row['foto'];
    $descripcion = $row['descri'];
    $dui = $row['dui'];
    $pasaporte = $row['pasaporte'];
    ?>
   <link rel="stylesheet" href="../css/inicioAyudanteEspecial.css">
   <title>Inicio Asistente</title>

 
   <style>
      .fijo {
            background-color: #4d86e3;
            color: white;
            cursor: default;
        }

        .fijo:hover {
            cursor: default;
            background-color: #4d86e3;
            color: white;

        }
   </style>
   <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-navbar fixed-top">
       <div class="container-fluid">

           <a class="navbar-brand" href="inicioEmpleado.php">
               <img src="../imagen/estoyAnsioso/esflyInfo.png" class="" id="logo" alt="">
           </a>

           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarText">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   <li class="nav-item">
                       <a class="nav-link" aria-current="page" href="datos de cuenta.php?id=<?php echo $sesion ?>">Mi perfil</a>
                   </li>

                   <li class="nav-item">
                       <a class="nav-link" href="check-in.php">Citas</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="ofertasYDestinos.php">Todas las citas</a>
                   </li>
               </ul>

               <span class="navbar-text"></span>

               <button class="btn btn-primary-outline ms-3" type="button" id="search-btn">
                   <img src="../imagen/header_ayudante/boleto.png" class="" id="lupa" alt="" width="20"> Boletos
               </button>

               <button class="btn btn-primary-outline ms-1" type="button" id="search-btn">
                   <img src="../imagen/header_ayudante/chats.png" class="" id="lupa" alt="" width="20"> Chats
               </button>

               <div class="nav-item dropdown">
                   <?php
                    if ($foto == null) {
                    ?>
                       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="../imagen/header_ayudante/logo_usuario.png" class="rounded-circle border border-1 border-black mx-1" id="lupa" alt="" height="35px" width="35px">
                       </a>
                   <?php
                    } else {
                    ?>
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       <img src="data:image/jpg;base64,<?php echo base64_encode($foto)?>" class="rounded-circle border border-1 border-black mx-1" id="lupa" alt="" height="35px" width="35px">
                   </a>
                   <?php
                    }
                    ?>
                   <ul class="dropdown-menu">
                       <li><a class="dropdown-item fijo " type="">¡Hola, <?php echo $nombre ?>!</a></li>
                       <hr>
                       <li><a class="dropdown-item" href="datos de cuenta.php">Ver perfil</a></li>
                       <li><a class="dropdown-item" href="cerrar.php">Cerrar sesión</a></li>
                   </ul>
               </div>
               <button onclick="" class="btn rounded-fill  ms-1"><i id="dl-icon" class="bi bi-moon-fill"></i></button>
               <button class="btn btn-primary-outline ms-1" type="button" id="search-btn">
                   <img src="../imagen/header/lupa.png" class="" id="lupa" alt="" width="20"> Buscar
               </button>

           </div>
       </div>
   </nav>