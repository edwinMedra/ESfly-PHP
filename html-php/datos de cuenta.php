<!DOCTYPE html>
<html lang="es">

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

  <link rel="stylesheet" href="../css/index1.css">
  <link rel="stylesheet" href="../css/headerr.css">
  <link rel="stylesheet" href="../css/pie.css">
  <!--Fin tipografia-->

  <title>Información de cuenta</title>
</head>
<style>
  input {
    font-family: "red hat display";
  }
</style>
<?php include("header-log.php") ?>
<?php

?>

<body>
  <form class="my-auto" method="post" enctype="multipart/form-data">

    <div class="container-fluid my-5">
      <div class="row py-5">
        <div class="col-4 text-primary-emphasis bg-light-subtle border border-secondary-subtle rounded-3 p-5 ms-5">

          <?php
          if ($foto == null) {

          ?>
            <img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" class="rounded-circle my-auto border border-1 border-black mx-1 img-fluid" id="lupa" alt="">

          <?php
          } else {
          ?>
            <img src="data:image/jpg;base64,<?php echo base64_encode($foto) ?>" class="img-fluid rounded-circle my-auto border border-1 border-black mx-1 img-fluid" alt="">

          <?php
          }

          ?>

          <div class="card-body">
            <label for="foto">
              <a type="button" class="btn btn-primary mb-5 ">Agregar foto</a>
              <input type="file" id="foto" name="foto" class="d-none">
            </label>
            <p class="card-text">Requisitos para la foto: "Debe ser de frente, descubierta, sin accesorios, sin lentes o gafas de sol."</p>
          </div>
        </div>
        <div class="col-7 text-primary-emphasis bg-light-subtle border border-secondary-subtle rounded-3  p-5 ms-3">
          <div class="">
            <label for="InputEmail1" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="InputEmail1" aria-describedby="emailHelp" value="<?php echo $nomCliente; ?>">
          </div>
          <div class="">
            <label for="InputEmail1" class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="InputEmail1" aria-describedby="emailHelp" value="<?php echo $apeCliente; ?>">
          </div>

          <div class="mb-3">
            <label for="InputPassword1" class="form-label">DUI</label>
            <input type="text" name="dui" class="form-control" id="InputPassword1" value="<?php echo $dui ?>">
          </div>
          <div class="mb-3">
            <label for="InputCorreo1" class="form-label">Correo</label>
            <input type="email" name="email" class="form-control" id="InputCorreo1" value="<?php echo $email ?>">
          </div>
          <div class="mb-3">
            <label for="InputCorreo1" class="form-label">Contraseña</label>
            <input type="text" name="pass" class="form-control" id="InputCorreo1" value="<?php echo $pass ?>">
          </div>
          <div class="mb-3">
            <label for="InputEmail1" class="form-label">Pasaporte</label>
            <input type="text" name="pasaporte" class="form-control" id="InputEmail1" aria-describedby="emailHelp" value="<?php echo $pasaporte ?>">
          </div>
          <button type="submit" class="btn btn-primary" name="registro">Cambiar datos</button>

        </div>
      </div>
    </div>
  </form>
</body>

</html>
<?php
if (isset($_POST['registro'])) {
  include ("conex.php");
  $nombre = trim($_POST['nombre']);
  $apellido = trim($_POST['apellido']);
  $pass = trim($_POST['pass']);
  $email = trim($_POST['email']);
  $passport = trim($_POST['pasaporte']);
  $dui = trim($_POST['dui']);
  $foto = $_FILES['foto']['error'];
  if ($foto){
    $update = "UPDATE usuario set nomCliente='$nombre', apeCliente='$apellido', pass='$pass', correo='$email', pasaporte='$passport', dui='$dui'";
    $resul = $conexion->query($update);
    if ($resul){
      echo '<script>alert("Datos modificados con exito")</script>';
    }
  }else{
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $update = "UPDATE usuario set nomCliente='$nombre', apeCliente='$apellido', pass='$pass', correo='$email', pasaporte='$pasaporte', dui='$dui', foto='$foto'";
    $resul = $conexion->query($update);
    if ($resul){
      echo '<script>alert("Datos modificados con exito")</script>';
    }


  }

}
?>