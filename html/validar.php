<?php
$correo = $_POST['correo'];
$pass = $_POST['pass'];
//conectar a la base de datos 
include("conex.php");
// comprobar primero el rol que imparte la persona que va a iniciar sesión
$consulta = "SELECT * FROM usuario WHERE correo='$correo'";
$resul = $conexion->query($consulta);
$filas = mysqli_num_rows($resul);
if ($filas) {
    $row = $resul->fetch_assoc();
    $encriptada = $row['pass'];
    if (password_verify($pass, $encriptada)) {
        // consultar la ID de el usuario
        $lugar = $conexion->query("SELECT * FROM usuario where correo='$correo'");
        $row = $lugar->fetch_assoc();
        $id = $row['idCliente'];
        session_start();
        $_SESSION['$id'] = $id;
        header("Location:../html-php/index.php");
        echo "hola mundo";
    } else {
        header("location:loginrr.php");
    }
} else {
    
    // evaluar el segundo rol para ver si es administrador
    $consulta = "SELECT * FROM administradores WHERE email='$correo'";
    $resul = $conexion->query($consulta);
    $filas = mysqli_num_rows($resul);
    if ($filas) {
        $row = $resul->fetch_assoc();
        $encriptada = $row['pass'];
        if (password_verify($pass, $encriptada)) {
            $lugar = $conexion->query("SELECT * FROM administradores where email='$correo'");
            $row = $lugar->fetch_assoc();
            session_start();
            $id = $row['idAdmin'];
            $_SESSION['$id'] = $id;
            header("Location:../admin-php/index_admin.php");
        } else {
            header("location:loginrr.php");
        }
    } else {
        $consulta = "SELECT * FROM asistente WHERE correoAsisten='$correo'";
        $resul = $conexion->query($consulta);
        $filas = mysqli_num_rows($resul);
        if ($filas) {
            $row = $resul->fetch_assoc();
            $encriptada = $row['passAsisten'];
            if (password_verify($pass, $encriptada)) {
                $lugar = $conexion->query("SELECT * FROM asistente where correoAsisten='$correo'");
                $row = $lugar->fetch_assoc();
                session_start();
                $id = $row['idAsistente'];
                $_SESSION['$id'] = $id;
                header("Location:../asistente-php/inicioEmpleado.php");
            } else {
                header("location:loginrr.php");
            }
            // falta la parte de diego
        } else {
            header("location:loginrr.php");
        }
    }
}
mysqli_free_result($resul);
mysqli_close($conexion);
