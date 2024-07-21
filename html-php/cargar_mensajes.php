<?php
include("conex.php");

if (isset($_GET['idAdmin']) && isset($_GET['idCliente'])) {
    $idAdmin = intval($_GET['idAdmin']);
    $idCliente = intval($_GET['idCliente']);

    $result = $conexion->query("SELECT mensajes.*, administradores.nomAdmin, administradores.apeAdmin FROM mensajes LEFT JOIN administradores ON mensajes.idAdmin = administradores.idAdmin WHERE mensajes.idUsuario = $idCliente AND mensajes.idAdmin = $idAdmin ORDER BY mensajes.fecha");

    while ($row = $result->fetch_assoc()) {
        $time = date('H:i', strtotime($row['fecha']));
        if ($row['remitente'] == 'cliente') {
            echo '<div class="text-end">';
            echo '<p class="message-header">Tú - ' . $time . '</p>';
            echo '<p class="bg-primary text-white d-inline-block p-2 rounded chat-message">';
            echo $row['mensaje'];
            if ($row['archivo']) {
                echo '<br><img src="data:image/jpeg;base64,' . base64_encode($row['archivo']) . '" class="img-thumbnail">';
            }
            echo '</p></div>';
        } else {
            echo '<div class="text-start">';
            echo '<p class="message-header">' . $row['nomAdmin'] . ' ' . $row['apeAdmin'] . ' - ' . $time . '</p>';
            echo '<p class="bg-secondary text-white d-inline-block p-2 rounded chat-message">';
            echo $row['mensaje'];
            if ($row['archivo']) {
                echo '<br><img src="data:image/jpeg;base64,' . base64_encode($row['archivo']) . '" class="img-thumbnail">';
            }
            echo '</p></div>';
        }
    }
}
?>
