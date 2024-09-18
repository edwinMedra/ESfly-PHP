<?php
$id = $_GET['idVuelo'];
include("conex.php");
$eliminar = "DELETE FROM vuelo WHERE idVuelo='$id'";
$eliminarAsiento = "DELETE FROM asientos where idVuelo='$id'";
$resul = $conexion->query($eliminarAsiento); // eliminar asiento
$resultado = $conexion->query($eliminar);   // Eliminar Vuelo
$vip = $conexion->query("DELETE FROM asientosVIP where idVuelo='$id'");
if ($resultado) {
    header("Location:eliminar_vuelo.php");
}
