<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/headerr.css">
    <link rel="stylesheet" href="../css/pie.css">
    <!--Fin tipografia-->

    <title>ESFLY</title>
</head>
<style>
    #centro {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<?php
include("conex.php");
session_start();
$id = $_SESSION['$id'];
if ($id == null || $id == ''){
  header("Location:../html-php/index.php");
}
?>
<div class=" mb-3 w-50" id="centro">
    <form action="" method="post">
        <label for="InputEmail1" class="form-label">Escribir contraseña para poder eliminar cuenta: </label>
        <input  type="password" name="pass" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Contraseña">
        <div class="text-center">
            <button type="submit" class="btn btn-primary mx-auto bg-danger border-0 my-3 mx-auto" name="eliminar">Eliminar cuenta</button>
        </div>
    </form>
</div>
<?php
$boton = isset($_POST['eliminar']);
if ($boton) {
    $pass = trim($_POST['pass']);
    $sql = $conexion->query("SELECT * FROM usuario where idCliente='$id'");
    $row = $sql->fetch_assoc();
    $passVery = $row['pass'];
    if (password_verify($pass, $passVery)) {
        $delete = $conexion->query("DELETE FROM usuario where idCliente='$id'");
        session_destroy();
        header("location:../html/index.php");
    } else {
        echo "<script>
        alert('Contraseña incorrecta, intente de nuevo')
        </script>";
    }
}

?>