<?php
include("conex.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mensaje = trim($_POST['mensaje']);
    $idCliente = intval($_POST['idCliente']);
    $idAdmin = intval($_POST['idAdmin']);
    $remitente = $_POST['remitente'];

    if ($mensaje != '') {
        $sql = "INSERT INTO mensajes (mensaje, idUsuario, idAdmin, remitente) VALUES (?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('siis', $mensaje, $idCliente, $idAdmin, $remitente);
        $stmt->execute();
        $stmt->close();
    }
}
