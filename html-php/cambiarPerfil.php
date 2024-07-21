<?php
// tomar los datos para poder cambiar lde el perfil 
session_start();
$id = $_SESSION['$id'];
include("conex.php");
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$pass = trim($_POST['pass']);
$email = trim($_POST['email']);
$passport = trim($_POST['pasaporte']);
$dui = trim($_POST['dui']);
$foto = $_FILES['foto']['error'];
if ($foto) {
    $update = "UPDATE usuario set nomCliente='$nombre', apeCliente='$apellido', pass='$pass', correo='$email', pasaporte='$passport', dui='$dui' where idCliente='$id'";
    $resul = $conexion->query($update);
    if ($resul) {
        echo '<script>alert("Datos modificados con exito")</script>';
    }
} else {
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $update = "UPDATE usuario set nomCliente='$nombre', apeCliente='$apellido', pass='$pass', correo='$email', pasaporte='$pasaporte', dui='$dui', foto='$foto' where idCliente='$id'";
    $resul = $conexion->query($update);
    if ($resul) {
        echo '<script>alert("Datos modificados con exito")</script>';
    }
}
