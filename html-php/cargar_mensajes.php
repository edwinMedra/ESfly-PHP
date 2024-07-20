<?php
include("conex.php");

if (isset($_GET['idAdmin']) && isset($_GET['idCliente'])) {
    $idAdmin = intval($_GET['idAdmin']);
    $idCliente = intval($_GET['idCliente']);

    $result = $conexion->query("SELECT * FROM mensajes WHERE idUsuario = $idCliente AND idAdmin = $idAdmin ORDER BY fecha");

    while ($row = $result->fetch_assoc()) {
        if ($row['remitente'] == 'cliente') {
            echo '<div class="text-end"><p class="msg-cliente d-inline-block p-2 rounded">' . htmlspecialchars($row['mensaje']) . '</p>';
            if ($row['foto']) {
                echo '<br><img src="' . htmlspecialchars($row['foto']) . '" class="img-fluid" style="max-width: 200px;"></div>';
            }
        } else {
            echo '<div class="text-start"><p class="msg-admin d-inline-block p-2 rounded">' . htmlspecialchars($row['mensaje']) . '</p>';
            if ($row['foto']) {
                echo '<br><img src="' . htmlspecialchars($row['foto']) . '" class="img-fluid" style="max-width: 200px;"></div>';
            }
        }
    }
}
