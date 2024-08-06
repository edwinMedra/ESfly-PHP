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

  <link rel="stylesheet" href="../css/headerr.css">
  <link rel="stylesheet" href="../css/pie.css">
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
<?php include("header-log.php") ?>
<?php

?>

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
        <div class="col-lg-7  col-12 text-primary-emphasis bg-light-subtle border border-secondary-subtle rounded-3  p-5 ps-3">
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
            <input disabled type="text" name="dui" class="form-control" id="InputPassword1" value="<?php echo $dui ?>">
          </div>
          <div class="mb-3">
            <label for="InputCorreo1" class="form-label">Correo</label>
            <input disabled type="email" name="email" class="form-control" id="InputCorreo1" value="<?php echo $email ?>">
          </div>
          <div class=" mb-3">
            <label for="InputEmail1" class="form-label">Pasaporte</label>
            <input disabled type="text" name="pasaporte" class="form-control" id="InputEmail1" aria-describedby="emailHelp" value="<?php echo $pasaporte ?>">
          </div>
          <div class="mb-3  text-center">
            <button type="submit" class="btn btn-primary " name="registro">Cambiar datos</button>
            <button type="button" class="btn btn-primary  bg-danger border-0" onclick={eliminar()}>Eliminar cuenta</button>
            <button type="button" class="btn btn-primary  bg-dark border-0" onclick={pass()}>Cambiar contraseña</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  // cambiar contraseña 
  function pass() {
    var pass = confirm("¿Desea cambiar la contraseña?");
    if (pass){
      window.location.href = "../js/cambiarPass.php?rol=usuario&id=<?php echo $id?>";
    }
  }
</script>
<?php
echo '
<script>
  // function para eliminar la foto de el propio usuario
  function deleteFoto(){
    var deler = confirm("¿Desea eliminar la foto de perfil?");
    if (deler){
      window.location.href = "../js/deleteFotoUsu.php?rol=usuario&id=' . $id . '";
    }
  }
</script>
';
?>

</html>
<?php
// proceso en caso de que el usuario desee eliminar su cuenta

echo '
<script>
  function eliminar(){
    let res = confirm("¿Estas seguro que deseas eliminar tu cuenta?");
    if (res){
        window.location.href = "eliminar-cuenta.php";
    } 
  }
</script>
';
// tomar los datos para poder cambiar lde el perfil 
if (isset($_POST['registro'])) {
  include("conex.php");
  $nombre = trim($_POST['nombre']);
  $apellido = trim($_POST['apellido']);
  $foto = $_FILES['foto']['error'];
  //empiezan validaciones para validar el dui, pasaporte y tambien el correo 

  if ($foto) {
    // en caso de que el usuario no coloque la foto
    $update = "UPDATE usuario set nomCliente='$nombre', apeCliente='$apellido' where idCliente='$id'";
    $resul = $conexion->query($update);
    if ($resul) {
      echo '<script>alert("Datos modificados con exito")</script>';
    }
  } else {
    // aqui en caso de que el usuario si haya colocado la foto de perfil 
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $update = "UPDATE usuario set nomCliente='$nombre', apeCliente='$apellido',  foto='$foto' where idCliente='$id'";
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