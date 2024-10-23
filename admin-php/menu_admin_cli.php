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
        .texto-titulo{
            font-family:"Be Vietnam Pro";
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
            font-size: 2.5rem; /* Responsive font size */
            z-index: 1;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .table-container {
            margin: 20px auto;
            padding: 0 15px; /* Responsive padding */
        }

        .table {
            border-collapse: collapse; 
            width: 100%; 
        }

        /*esto es lo de de reducir la barrita de las tablas*/
        .table th, .table td {
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
            transition: transform 0.3s , box-shadow 0.3s ;
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

            .table th, .table td {
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
        <div class="titulo text-center">USUARIOS</div>
    </div>




  <!--CUADRO DE LAS OPCIONES-->

    <div class=" card-text container-fluid mt-5 ps-5 ">
        <h5>¿Qué deseas hacer? ></h5>
    </div>

    <div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <a class="card-prep card card-hover-effect text-center me-5 mb-3" style="width: 22rem; text-decoration: none;" href="agregar-usuario.php">
            <div class="card-body mb-3">
                <h6 class="card-title mt-5">Agregar Cliente</h6>
            </div>
        </a>

        <a class="card-prep card card-hover-effect text-center me-5 mb-3" style="width: 22rem; text-decoration: none;" href="eliminar_usuario.php">
            <div class="card-body mb-3">
                <h6 class="card-title mt-5">Eliminar</h6>
            </div>
        </a>

      
    </div>
</div>








  <!--TODAS LAS TABLAS DE LOS USUARIOS REGISTRADOS-->
    <div class=" texto-titulo container-fluid mt-5 ps-5 ">
        <h5>Cuentas registradas ></h5>
    </div>


    <!--TABAL DE USUARIO-->
    <div class="container table-container">
        <div class="title-border text-center">
            <h5>USUARIOS</h5>
        </div>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Contraseña</th>
                        <th>Correo</th>
                        <th>Pasaporte</th>
                        <th>Dui</th>
                        <th>Imagen</th>
                        <th>ID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $inc = include("../conex.php");
                    if ($inc){
                        $select = "SELECT * FROM usuario";
                        $query = mysqli_query($conexion,$select);
                        if ($query){
                            while ($row = $query->fetch_array()){
                                $nombre = $row['nomCliente'];
                                $apellido = $row['apeCliente'];
                                $pass = $row['pass'];
                                $correo = $row['correo'];
                                $pasaporte = $row['pasaporte'];
                                $dui = $row['dui'];
                                $foto = $row['foto'];
                                $idCliente = $row['idCliente'];
                    ?>
                    <tr>
                        <td><?php echo $nombre?></td>
                        <td><?php echo $apellido?></td>
                        <td>-</td>
                        <td><?php echo $correo?></td>
                        <td><?php echo $pasaporte?></td>
                        <td><?php echo $dui?></td>
                        <td><img src="data:image/jpg;base64,<?php echo base64_encode($foto)?>" alt="" class="img-perfil"></td>
                        <td><?php echo $idCliente?></td>
                    </tr>
                    <?php
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>



   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
