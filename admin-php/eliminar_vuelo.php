<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESFLY</title>
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin3.css">
</head>

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

<body>
    <?php include("header-admin.php"); ?>
    <div class="back">
        <img src="../imagen/admin/back.png" alt="" class="img-fondo">
        <div class="titulo text-white text-center">Eliminar vuelos</div>
    </div>

    <div class="texto-titulo container-fluid mt-5 ps-5">
        <h5>Vuelos registradas ></h5>
    </div>

    <!--TABLA DE ASISTENTE-->
    <div class="container table-container">
        <div class="title-border text-center">
            <h5>VUELOS</h5>
        </div>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Origen</th>
                        <th>Destino</th>
                        <th>Fecha de salida</th>
                        <th>Fecha de entrada</th>
                        <th>Precio</th>
                        <th>Foto</th>
                        <th>ID</th>
                        <th>Opción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $inc = include("../conex.php");
                    if ($inc) {
                        $select = "SELECT * FROM vuelo";
                        $query = mysqli_query($conexion, $select);
                        if ($query) {
                            while ($row = $query->fetch_array()) {
                                $origen = $row['origen'];
                                $destino = $row['destino'];
                                $fechaSalida = $row['fechaSalida'];
                                $fechaEntrada = $row['fechaEntrada'];
                                $precio = $row['precio'];
                                $foto = $row['foto'];
                                $idVuelo = $row['idVuelo'];
                    ?>
                                <tr>
                                    <td><?php echo $origen ?></td>
                                    <td><?php echo $destino ?></td>
                                    <td><?php echo $fechaSalida ?></td>
                                    <td><?php echo $fechaEntrada ?></td>
                                    <td><?php echo $precio ?></td>
                                    <td><img src="data:image/jpg;base64,<?php echo base64_encode($foto) ?>" class="mx-1 my-auto" alt="" height="50px" width="85px"></td>
                                    <td><?php echo $idVuelo ?></td>
                                    <td><a href="#" role="button" class="btn btn-danger" onclick="eliminar('<?php echo $idVuelo ?>')">Eliminar</a></td>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    function eliminar(idVuelo) {
        let x = confirm("¿Está seguro que desea eliminar este vuelo?");
        if (x) {
            window.location.href = "eliminar-vuelo.php?idVuelo=" + idVuelo;
        }
    }
</script>

</html>
