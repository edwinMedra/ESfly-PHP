<?php
$id = $_GET['idAsistente'];
include("conex.php");
$eliminar = "DELETE FROM asistente WHERE idAsistente='$id'";
$resultado = $conexion->query($eliminar);
if ($resultado) {
    header("Location:eliminar_asistente.php");
}
