<?php
// proceso para poder insertar el id de el asistente de el vuelo
// tomar los valores de el asistente seleccionado y el del vuelo
$idVuelo = $_GET['idVuelo'];
$idAsis = $_GET['idAsis'];
session_start();
$id = $_SESSION['$id'];
// insertar datos en el query
include("../conex.php");
$query = $conexion->query("INSERT INTO vueloUsuarioAsistente () VALUES (null,'$id','$idVuelo','$idAsis',1)");
?>
<script>
    alert ('Se ha enviado solicitud a este asistente');
    window.location.href = "../html-php/boletos.php";
</script>