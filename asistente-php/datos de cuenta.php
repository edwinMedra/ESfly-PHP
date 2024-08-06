<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/pie.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/headerr.css">
  <!--Fin tipografia-->

  <title>Información de cuenta</title>
</head>
<style>
  input {
    font-family: "red hat display";
  }

  #perfil {
    min-height: 299px;
    max-height: 300px;
    min-width: 299px;
    max-width: 300px;
    object-fit: cover;
  }
</style>
<?php include("header_ayudante.php") ?>

<body>
  <form class="my-auto" method="post" enctype="multipart/form-data">

    <div class="container-fluid my-5  ">
      <div class="row py-5 w-100 justify-content-center mx-auto">
        <div class="col-12 col-lg-4 text-primary-emphasis bg-light-subtle border border-secondary-subtle rounded-3 p-5 ps-5">
          <?php
          if ($foto == null) {
          ?>
            <img src="../imagen/header_ayudante/logo_usuario.png" class="rounded-circle mb-5 border border-1 border-black mx-1 img-fluid" id="lupa" alt="" max="22px" min="22px">
          <?php
          } else {
          ?>
            <img src="data:image/jpg;base64,<?php echo base64_encode($foto) ?>" class="img-fluid rounded-circle mb-5 border border-1 border-black mx-1 img-fluid" alt="" id="perfil">
          <?php
          }
          ?>
          <div class="card-body text-center">
            <label for="foto">
              <a type="button" class="btn btn-primary mb-5 ">Agregar foto</a>
              <input type="file" id="foto" name="foto" class="d-none" accept="image*/">
            </label>
            <button class="btn btn-danger mb-5" onclick={deleteFoto()} type="button">Eliminar foto</button>
            <p class="card-text">Requisitos para la foto: "Debe ser de frente, descubierta, sin accesorios, sin lentes o gafas de sol."</p>
          </div>
        </div>
        <div class="col-lg-7 col-12 text-primary-emphasis bg-light-subtle border border-secondary-subtle rounded-3  p-5 ps-3">
          <div class="">
            <label for="InputEmail1" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="InputEmail1" aria-describedby="emailHelp" value="<?php echo $nombre; ?>">
          </div>
          <div class="">
            <label for="InputEmail1" class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="InputEmail1" aria-describedby="emailHelp" value="<?php echo $apellido; ?>">
          </div>

          <div class="">
            <label for="InputEmail1" class="form-label">Número de telefono</label>
            <input type="text" name="num" class="form-control" id="InputEmail1" aria-describedby="emailHelp" value="<?php echo $telefono; ?>">
          </div>

          <div class="">
            <label for="InputEmail1" class="form-label">Servicios</label>
            <input type="text" name="servicios" class="form-control" id="InputEmail1" aria-describedby="emailHelp" value="<?php echo $servicios; ?>">
          </div>

          <div class="">
            <label for="InputEmail1" class="form-label">Horario de trabajo</label>
            <input type="text" name="horario" class="form-control" id="InputEmail1" aria-describedby="emailHelp" value="<?php echo $horario; ?>">
          </div>

          <div class="mb-3">
            <label for="InputPassword1" class="form-label">DUI</label>
            <input type="text" name="dui" class="form-control" id="InputPassword1" value="<?php echo $dui ?>" disabled>
          </div>
          <div class="mb-3">
            <label for="InputCorreo1" class="form-label">Correo</label>
            <input type="email" name="email" class="form-control" id="InputCorreo1" value="<?php echo $correo ?>" disabled>
          </div>
          <div class=" mb-3">
            <label for="InputEmail1" class="form-label">Pasaporte</label>
            <input type="text" name="pasaporte" class="form-control" id="InputEmail1" aria-describedby="emailHelp" value="<?php echo $pasaporte ?>" disabled>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary" name="registro">Cambiar datos</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  // function para eliminar la foto de el propio usuario
  function deleteFoto() {
    var deler = confirm("¿Desea eliminar la foto de perfil?");
    if (deler) {
      window.location.href = "../js/deleteFotoUsu.php?rol=asistente&id=<?php echo $sesion ?>";
    }
  }
</script>

</html>
<?php
// tomar los datos para poder cambiar lde el perfil 
if (isset($_POST['registro'])) {
  include("conex.php");
  $nombre = trim($_POST['nombre']); // tomar dato de el input de nombre
  $apellido = trim($_POST['apellido']); // tomar dato de el input de apeliidos
  $foto = $_FILES['foto']['error']; // tomar el valor de la foto
  $num = trim($_POST['num']);
  $servicios = trim($_POST['servicios']);
  $horario = trim($_POST['horario']);
  if ($foto) {
    $update = "UPDATE asistente set nomAsistente='$nombre', apeAsistente='$apellido',numTelefono='$num', horarioTrabajo='$horario' where idAsistente='$sesion'";
    $resul = $conexion->query($update);
    if ($resul) {
      echo '<script>alert("Datos modificados con exito")</script>';
    }
  } else {

    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $update = "UPDATE asistente set nomAsistente='$nombre', apeAsistente='$apellido', numTelefono='$num', horarioTrabajo='$horario', foto='$foto' where idAsistente='$sesion'";
    $resul = $conexion->query($update);
    if ($resul) {
      echo '<script>alert("Datos modificados con exito")</script>';
    }
  }
  echo "
  <script>
  window.location.href = 'datos de cuenta.php'
  </script>
  ";
}

?>