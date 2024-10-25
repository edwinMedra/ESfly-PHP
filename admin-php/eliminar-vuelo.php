<?php
$id = $_GET['idVuelo'];
include("../conex.php");
$eliminar = "DELETE FROM vuelo WHERE idVuelo='$id'";
$eliminarAsiento = "DELETE FROM asientos where idVuelo='$id'";
$resul = $conexion->query($eliminarAsiento); // eliminar asiento
$resultado = $conexion->query($eliminar);   // Eliminar Vuelo
$delete = $conexion->query("DELETE FROM facturaVueloNormal where idVuelo='$id'"); // eliminar de la tabla de facturaVueloNormal
$delete2 = $conexion->query("DELETE FROM facturaAsientos where idVuelo = '$id'");
$deleteAsis = $conexion->query("DELETE FROM vueloUsuarioAsistente where idVuelo = '$id'");
$vip = $conexion->query("DELETE FROM asientosVIP where idVuelo='$id'");
if ($vip) {
    header("Location:eliminar_vuelo.php");
}
