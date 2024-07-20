<?php
include("conex.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mensaje = trim($_POST['mensaje']);
    $idCliente = intval($_POST['idCliente']);
    $idAdmin = intval($_POST['idAdmin']);
    $remitente = $_POST['remitente'];
    $foto = NULL;

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $fotoPath = 'uploads/' . basename($_FILES['foto']['name']);
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $fotoPath)) {
            $foto = $fotoPath;
        }
    }

    if ($mensaje != '' || $foto != NULL) {
        $sql = "INSERT INTO mensajes (mensaje, idUsuario, idAdmin, remitente, foto) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('siiss', $mensaje, $idCliente, $idAdmin, $remitente, $foto);
        $stmt->execute();
        $stmt->close();
    }
}
