<?php
$correo = htmlspecialchars($_POST['correo']);
$pass = htmlspecialchars($_POST['pass']);
//conectar a la base de datos 
include ("conex.php");
$consulta = "SELECT * FROM usuario WHERE correo=?";
$resul = $conexion->prepare($consulta);
$resul = bind_param("s", $correo);

$filas = mysqli_num_rows($resultado);
if ($filas > 0) {
    session_start();
    $_SESSION['correo'] = $correo;
    header("location:../html-php/index.php");
} else {
    $consulta = "SELECT * FROM administradores where email='$correo' and pass='$pass'";
    $resultado = $conexion->query($consulta);
    $filas1 = mysqli_num_rows($resultado);
    if ($filas1 > 0) {
        session_start();
        $_SESSION['correo'] = $correo;
        header("location:../admin-php/index_admin.php");
    } else {
        header("location:loginrr.php");
    }
}

mysqli_free_result($resultado);
mysqli_close($conexion);
