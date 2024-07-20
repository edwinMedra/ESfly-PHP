<?php
$correo = $_POST['correo'];
$pass = $_POST['pass'];
//conectar a la base de datos 
include ("conex.php");
// comprobar primero el rol que imparte la persona que va a iniciar sesión
$consulta = "SELECT * FROM usuario WHERE correo='$correo'";
$resul = $conexion->query($consulta);
if ($resul){
    $filas = mysqli_num_rows($resul);
    $row =$resul->fetch_assoc();
    $encriptada = $row['pass'];
    if (password_verify($pass,$encriptada)){
        // consultar la ID de el usuario
        $lugar = $conexion->query("SELECT * FROM usuario where correo='$correo'");
        $row = $lugar->fetch_assoc();
        $id = $row['idCliente'];
        session_start();
        $_SESSION['$id'] = $id; 
       header("Location:../html-php/index.php");
        echo "hola mundo";

    }else{
        echo "hola mundo";
    }
}else{
    echo "hola mundo";

}
/*
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
*/