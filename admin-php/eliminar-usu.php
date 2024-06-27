<?php
$id = $_GET['idCliente'];
include("conex.php");
$eliminar = "DELETE FROM usuario WHERE idCliente='$id'";
$resultado = $conexion->query($eliminar);
if ($resultado) {
    echo '<script>alert("Usuario eliminado con exito")</script>';
    header("Location:eliminar_usuario.php");
}
