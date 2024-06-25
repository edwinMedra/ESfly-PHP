<?php
$correo=$_POST['correo'];
$pass=$_POST['pass'];

//conectar a la base de datos 
$conexion=mysqli_connect("localhost","root","root","aerolinea");
session_start();
$_SESSION['correo'] =$correo;
$consulta= "SELECT * FROM usuario WHERE correo='$correo' and pass='$pass'";
$resultado= mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0)  {
    ?>
    <script>alert("Ha iniciado sesion")</script>
    <?php
    header("location:../html-php/index.php");

}
else{
    header("location:loginrr.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>