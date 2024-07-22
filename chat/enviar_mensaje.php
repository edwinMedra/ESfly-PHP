<?php
include("conex.php");
date_default_timezone_set('America/El_Salvador');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mensaje = trim($_POST['mensaje']);
    $idCliente = intval($_POST['idCliente']);
    $idAdmin = intval($_POST['idAdmin']);
    $remitente = $_POST['remitente'];
    $archivo = $_FILES['archivo'];

    if ($mensaje != '' || !empty($archivo['name'])) {
        $sql = "INSERT INTO mensajes (mensaje, idUsuario, idAdmin, remitente, archivo) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $archivoData = null;
        if (!empty($archivo['name'])) {
            $archivoData = file_get_contents($archivo['tmp_name']);
        }
        $stmt->bind_param('siiss', $mensaje, $idCliente, $idAdmin, $remitente, $archivoData);
        $stmt->execute();
        $stmt->close();
    }
}
?>
