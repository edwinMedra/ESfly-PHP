<?php 
// eliminar foto de la cuenta que ha iniciado sesión segun el rol tambien
include ("../asistente-php/conex.php");
// tomar el valor de la cuenta 
$rol = $_GET['rol'];
//  echo $rol;
$id = $_GET['id'];
echo $id;
if ($rol == "usuario") {
    $delete = $conexion->query("UPDATE usuario set foto=null where idCliente='$id'");
    // despues de hacer el update y quitar la foto, hacer la actualizacion y despues llevar a la pagina otra vez
    header("Location:../html-php/datos de cuenta.php");
}else if($rol == "asistente"){
    $delete = $conexion->query("UPDATE asistente set foto=null where idAsistente='$id'");
    header("Location:../asistente-php/datos de cuenta.php");
}
