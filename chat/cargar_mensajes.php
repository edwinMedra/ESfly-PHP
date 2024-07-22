<?php
include("conex.php");
date_default_timezone_set('America/El_Salvador');

if (isset($_GET['idAdmin']) && isset($_GET['idCliente'])) {
    $idAdmin = intval($_GET['idAdmin']);
    $idCliente = intval($_GET['idCliente']);

    // Consulta actualizada para incluir datos del cliente y del administrador
    $query = "
        SELECT mensajes.*, administradores.nomAdmin, administradores.apeAdmin, usuario.nomCliente, usuario.apeCliente
        FROM mensajes
        LEFT JOIN administradores ON mensajes.idAdmin = administradores.idAdmin
        LEFT JOIN usuario ON mensajes.idUsuario = usuario.idCliente
        WHERE mensajes.idUsuario = $idCliente AND mensajes.idAdmin = $idAdmin
        ORDER BY mensajes.fecha
    ";

    $result = $conexion->query($query);

    while ($row = $result->fetch_assoc()) {
        $time = date('H:i', strtotime($row['fecha']));
        if ($row['remitente'] == 'cliente') {
            echo '<div class="text-end">';
            echo '<p class="message-header">' . $row['nomCliente'] . ' ' . $row['apeCliente'] . ' - ' . $time . '</p>';
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
} else {
    echo 'Faltan parámetros idAdmin o idCliente en la URL.';
}
?>
