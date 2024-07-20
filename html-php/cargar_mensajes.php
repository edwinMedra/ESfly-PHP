<?php
include("conex.php");

if (isset($_GET['idAdmin']) && isset($_GET['idCliente'])) {
    $idAdmin = intval($_GET['idAdmin']);
    $idCliente = intval($_GET['idCliente']);

    $result = $conexion->query("SELECT * FROM mensajes WHERE idUsuario = $idCliente AND idAdmin = $idAdmin ORDER BY fecha");

    while ($row = $result->fetch_assoc()) {
        if ($row['remitente'] == 'cliente') {
            echo '<div class="text-end"><p class="bg-primary text-white d-inline-block p-2 rounded">' . $row['mensaje'] . '</p></div>';
        } else {
            echo '<div class="text-start"><p class="bg-secondary text-white d-inline-block p-2 rounded">' . $row['mensaje'] . '</p></div>';
        }
    }
}
