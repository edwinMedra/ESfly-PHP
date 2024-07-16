<?php
$id = $_GET['idVuelo'];
include("conex.php");
$eliminar = "DELETE FROM vuelo WHERE idVuelo='$id'";
$eliminarAsiento = "DELETE FROM asientos where idVuelo='$id'";
$resul = $conexion->query($eliminarAsiento);
$resultado = $conexion->query($eliminar);
if ($resultado) {
    echo '<script>alert("Usuario eliminado con exito")</script>';
    header("Location:eliminar_vuelo.php");
}
