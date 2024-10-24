<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar vuelo</title>
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin3.css">
</head>

<style>
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
        z-index: 1;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }
    .table-container {
        margin: 20px auto;
        padding: 0 15px;
    }
    .table {
        border-collapse: collapse;
        width: 100%;
    }
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
<?php include("header_ayudante.php") ?>

    <div class="back">
        <div><img src="../imagen/admin/back.png" alt=""></div>
        <div class="titulo text-white text-center">Todas las Citas</div>
    </div>

    <div class="texto-titulo container-fluid mt-5 ps-5">
        <h5>Citas ></h5>
    </div>

    <!-- TABLA DE PASAJEROS -->
    <div class="container table-container">
        <div class="title-border text-center">
            <h5>CITAS DISPONIBLES </h5>
        </div>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre Pasajero</th>
                        <th>Vuelo</th>
                        <th>Hora</th>
                        <th>Fecha</th>
                        <th>Género</th>
                        <th>Discapacidad</th>
                        <th>Opción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Juan Pérez</td>
                        <td>El Salvador - Colombia </td>
                        <td>14:00</td>
                        <td>23/10/2024</td>
                        <td>Masculino</td>
                        <td>Motora</td>
                        <td><a class="btn btn-primary me-2 mb-2" href="#" role="button">Aceptar</a><a class="btn btn-primary  me-2 mb-2" href="#" role="button">Rechazar</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ana Gómez</td>
                        <td>El Salvador - Estados Unidos </td>
                        <td>15:30</td>
                        <td>24/10/2024</td>
                        <td>Femenino</td>
                        <td>Visual</td>
                        <td><a class="btn btn-primary me-2 mb-2" href="#" role="button">Aceptar</a><a class="btn btn-primary me-2 mb-2" href="#" role="button">Rechazar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
