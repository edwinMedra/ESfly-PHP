<?php
$id = $_GET['idAdmin'];
include("conex.php");
$eliminar = "DELETE FROM administradores WHERE idAdmin='$id'";
$resultado = $conexion->query($eliminar);
if ($resultado) {
    header("Location:eliminar_admin.php");
}
