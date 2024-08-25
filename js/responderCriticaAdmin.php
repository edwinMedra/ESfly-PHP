<?php
// proceso para insertar la respuesta de critica de parte de el admin
include ('conex.php');
$idCritica = $_GET['id'];
$msjAdmin = trim($_POST['msjAdmin']); // mensaje de la critica
session_start();
$idAdmin = $_SESSION['$id'];
$updateCritica = $conexion->query("UPDATE criticas set msjAdmin = '$msjAdmin', idAdmin='$idAdmin',estado=1 where id='$idCritica'");
if($updateCritica){
    echo "
    <script>alert('Crítica respondida con exito')
    window.location.href = '../admin-php/menu_admin_criticas.php'
    </script>
    ";
}