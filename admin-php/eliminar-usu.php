<?php
$id = $_GET['idCliente'];
include("../conex.php");
$eliminar1 = "DELETE FROM criticas WHERE idUsuario='$id'";
$eliminar = "DELETE FROM usuario WHERE idCliente='$id'";
$resultado1 = $conexion->query($eliminar1);
$resultado = $conexion->query($eliminar);
if ($resultado) {
    echo '<script>alert("Usuario eliminado con exito")</script>';
    header("Location:eliminar_usuario.php");
}
