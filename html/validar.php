<?php
$correo = $_POST['correo'];
$pass = $_POST['pass'];

//conectar a la base de datos 
$conexion = mysqli_connect("localhost", "root", "root", "aerolinea");
session_start();
$_SESSION['correo'] = $correo;
$consulta = "SELECT * FROM usuario WHERE correo='$correo' and pass='$pass'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if ($filas > 0) {
    header("location:../html-php/index.php");
} else {
    $consulta = "SELECT * FROM administradores where email='$correo' and pass='$pass'";
    $resultado = $conexion->query($consulta);
    $filas1 = mysqli_num_rows($resultado);
    if ($filas1 > 0) {
        header("location:../admin-php/index_admin.php");
    }else{
        header("location:loginrr.php");
    }
}







mysqli_free_result($resultado);
mysqli_close($conexion);
