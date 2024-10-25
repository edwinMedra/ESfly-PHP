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
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Factura</title>
</head>

<style>
body {
    background-color: transparent;
    font-family: 'Be Vietnam Pro', sans-serif;
}

.titulo {
    font-family: 'Bayon';
    font-size: 40px;
}

.invoice-card {
    background-color: rgba(255, 255, 255, 0.05);
    border: 2px solid lightgray;
    backdrop-filter: blur(5px);
    box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.1);
    width: 100%;
    max-width: 800px; /* Ancho máximo para pantallas grandes */
    margin: auto;
    transition: transform 0.3s ease;
}

.invoice-card:hover {
    transform: translateY(-10px);
    box-shadow: 0px 10px 15px rgba(255, 255, 255, 0.2);
}

table {
    background-color: transparent;
    border-radius: 10px;
    border: 1px solid lightgray;
}

th, td {
    border: 1px solid rgb(152, 151, 151) !important;
    padding: 10px;
}

thead th {
    background-color: rgba(255, 255, 255, 0.05);
    font-weight: bold;
}

tbody tr {
    transition: background-color 0.3s ease;
}

tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

tfoot td {
    background-color: rgba(255, 255, 255, 0.05);
    font-weight: bold;
}

.factura-info {
    margin-bottom: 20px;
}

.factura-info h4 {
    margin-bottom: 10px;
    font-weight: bold;
}

@media (max-width: 768px) {
    .titulo {
        font-size: 30px;
    }

    th, td {
        padding: 8px;
        font-size: 14px;
    }

    .factura-info h4 {
        font-size: 18px;
    }
}
</style>

<body>
<?php
    include("header-log.php");
    ?>
    <div class="container my-5">
        <div class="invoice-card p-4 rounded shadow">
            <h2 class="text-center titulo">Factura ESfly</h2>
            
            <!-- Información adicional de la factura -->
            <div class="factura-info mb-5 mt-5">
                <h4>Datos del Usuario:</h4>
                <p>Nombre de usuario: Juan Pérez</p>
                <p>Correo electrónico: juanito@gmail.com</p>
                <p>Teléfono: 7234 5678</p>
                
                <h4 class="mt-5">Detalles de la Factura:</h4>
                <p>Nombre de un pasajero: Edwin Medrano</p>
                <p>Método de Pago: Tarjeta de Crédito</p>
                <p>Dui: 54389674-0</p>
                <p>Fecha de Pago: 25/10/24</p>
            </div>
            
            <!-- Tabla -->
            <div class="table-responsive mt-4 text-center">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Tipo de Vuelo</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">País de origen</th>
                            <th scope="col">País de destino</th>
                            <th scope="col">Mascotas</th>
                            <th scope="col">Equipaje</th>
                            <th scope="col">Precio Unitario</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Vuelo Especial</td>
                            <td>2</td>
                            <td>El Salvador</td>
                            <td>Estados Unidos</td>
                            <td>-</td>
                            <td>3</td>
                            <td>$100</td>
                            <td>$200</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7" class="text-end">Total:</td>
                            <td>$75.00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="factura-info mb-5 mt-5">
                <h4>TOTAL A PAGAR:</h4>
                <p>$120</p>

                <p class="text-center mb-5 mt-5">GRACIAS POR VIAJAR CON NOSOTROS ;)</p>
            </div>
        </div>
    </div>
    

<!-- Links JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>

</body>

</html>
