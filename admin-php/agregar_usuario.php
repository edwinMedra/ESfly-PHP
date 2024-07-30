<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ESFLY</title>
  <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/admin-usu-form1.css">
  <link rel="stylesheet" href="../css/registro.css">
  <title>ESfly</title>
  <?php include("header-admin.php"); ?>
</head>

<body>
  <!--formulario de registro-->
  <section>

    <div class="row g-0">

      <div class="col-lg-7 col-md-12 col-sm-12 d-none d-lg-block g-0">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item img-1 min-vh-100 active" data-bs-interval="6000">
              <img src="../imagen/login/fondo2.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item img-2 min-vh-100" data-bs-interval="7000">
              <img src="../imagen/login/fondo3.png" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item img-3 min-vh-100" data-bs-interval="7000">
              <img src="../imagen/login/fondo4.png" class="d-block w-100" alt="...">
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>

          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>






      <div class="col-lg-5 col-md-12 col-sm-12 cod-flex flex-column align-items-end min-vh-100">

        <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
          <h2 class="font-weight-bold align-self-center text-center "> <img src="../imagen/header/favicon.png" class="img-fluid me-3"><b>Agregar usuario</b></h2>

          <form class="mb-2 g-0" method="post" enctype="multipart/form-data">
            <div class="mb-2 g-0">
              <label for="exampleImputEmail" class="form-label font-weight-bold">
                <img src="../imagen/login/nombre.png" class="img"> Nombres</label>
              <input type="username" class="form-control" placeholder="Nombres" id="nombre" aria-describedby="emailHelp" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" name="name">
            </div>

            <div class="mb-2 ">
              <label for="exampleImputEmail" class="form-label font-weight-bold">
                <img src="../imagen/login/apellido.png" class="img"> Apellidos</label>
              <input type="lastname" class="form-control mb-2" placeholder="Apellidos" id="apellido" name="lastname" value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>">
            </div>

            <div class="mb-2">
              <label for="exampleImputPassword" class="form-label font-weight-bold">
                <img src="../imagen/login/contraseña.png" class="img"> Contraseña
              </label><i class="ojo bx bx-show-alt  mt-2" id="togglePassword"></i>
              <input type="password" class="pass form-control mb-2" placeholder="Contraseña" id="pass" name="pass">
            </div>

            <div class="mb-2">
              <label for="exampleImputPassword" class="form-label font-weight-bold">
                <img src="../imagen/login/contraseña.png" class="img">Validar Contraseña
              </label><i class="ojo bx bx-show-alt  mt-2" id="togglePassword"></i>
              <input type="password" class="pass form-control mb-2" placeholder="Contraseña" id="pass" name="validarPass">
            </div>

            <div class="mb-2">
              <label for="exampleImputEmail" class="form-label font-weight-bold">
                <img src="../imagen/login/correo.png" class="img"> Correo</label>
              <input type="email" class="form-control mb-2" placeholder="Correo" id="correo" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            </div>

            <div class="mb-2">
              <label for="exampleImputEmail" class="form-label font-weight-bold">
                <img src="../imagen/login/pasaporte.png" class="img"> Pasaporte</label>
              <input type="text" class="form-control mb-2" placeholder="Pasaporte" id="pasaporte" name="pasaporte" value="<?php echo isset($_POST['pasaporte']) ? htmlspecialchars($_POST['pasaporte']) : ''; ?>">
            </div>

            <div class="mb-2">
              <label for="exampleImputEmail" class="form-label font-weight-bold">
                <img src="../imagen/login/dui.png" class="img"> DUI</label>
              <input type="text" class="form-control mb-2" placeholder="Dui" id="dui" name="dui" value="<?php echo isset($_POST['dui']) ? htmlspecialchars($_POST['dui']) : ''; ?>">
            </div>
            <label for="foto" class=" ">
              <a type="button" class="btn btn-primary w-100 mt-3 mx-auto">Subir fotografía</a>
              <input type="file" name="foto" id="foto" class="d-none" accept="image/*">
            </label>
            <button type="submit" class="btn btn-primary w-100 mt-3" name="crear">Crear</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
<?php
include("conex.php");
if (isset($_POST['crear'])) {

  $nombre = trim($_POST['name']);
  $apellido = trim($_POST['lastname']);
  $Valpass = trim($_POST['validarPass']);
  $pass = trim($_POST['pass']);
  $email = trim($_POST['email']);
  $passport = trim($_POST['pasaporte']);
  $dui = trim($_POST['dui']);
  $foto = $_FILES['foto']['error'];

  // Validaciones
  if (empty($nombre)) {
    echo '<script>alert("Falta que digites tu nombre")</script>';
  } elseif (empty($apellido)) {
    echo '<script>alert("Falta que digites tu apellido")</script>';
  } elseif (empty($pass)) {
    echo '<script>alert("Falta que digites tu contraseña")</script>';
  } elseif (empty($email)) {
    echo '<script>alert("Falta que digites tu correo")</script>';
  } elseif (empty($passport)) {
    echo '<script>alert("Falta que digites tu pasaporte")</script>';
  } elseif (empty($dui)) {
    echo '<script>alert("Falta que digites tu dui")</script>';
  } elseif (strlen($nombre) < 5) {
    echo '<script>alert("El nombre es muy corto")</script>';
  } elseif (strlen($apellido) < 5) {
    echo '<script>alert("El apellido es muy corto")</script>';
  } elseif (strlen($pass) < 4) {
    echo '<script>alert("La contraseña es muy corta")</script>';
  } elseif (!($pass == $Valpass)) {
    echo '<script>alert("Las contraseñas no son iguales, intente nuevamente")</script>';
  } elseif (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,100}$/", $nombre)) {
    echo '<script>alert("Nombre no válido")</script>';
  } elseif (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,100}$/", $apellido)) {
    echo '<script>alert("Apellido no válido")</script>';
  } elseif (strlen($pass) > 15) {
    echo '<script>alert("La contraseña debe tener máximo 15 caracteres")</script>';
  } elseif (strlen($email) > 80) {
    echo '<script>alert("El correo debe tener máximo 80 caracteres")</script>';
  } elseif (!preg_match("/^[a-zA-Z0-9]{1,9}$/", $passport)) {
    echo '<script>alert("El pasaporte debe tener máximo 9 caracteres y solo puede contener letras y números")</script>';
  } elseif (!preg_match("/^[0-9]{8}-[0-9]{1}$/", $dui)) {
    echo '<script>alert("El DUI debe tener 10 caracteres, incluyendo un guion después de 8 dígitos")</script>';
  } else {
    // hacer consulta para verificar que no exista un usuario igual en la base de datos 
    // $email, $passport, $dui VARIABLES A UTILIZAR COMO BASE PARA VERIFICAR QUE NO EXISTA OTRO USUARIO EN LA BASE DE DATOS 
    $buscar = $conexion->query("SELECT * FROM usuario where correo='$email'");
    $buscar1 = $conexion->query("SELECT * FROM usuario where pasaporte='$passport'");
    $buscar2 = $conexion->query("SELECT * FROM usuario where dui='$dui'");
    $filaCorreo = mysqli_num_rows($buscar);
    $filaEmail = mysqli_num_rows($buscar1);
    $filaDui = mysqli_num_rows($buscar2);
    if ($filaCorreo) {
      echo '<script>alert("Correo ' . $email . ' no valido, intente nuevamente")</script>';
    } else if ($filaEmail) {
      echo '<script>alert("Pasaporte ' . $passport . ' no valido, intente nuevamente")</script>';
    } else if ($filaDui) {
      echo '<script>alert("Dui ' . $dui . ' no valido, intente nuevamente")</script>';
    } else 
    if ($foto) {
      // proceso para encriptar contraseñas al momento de pasar a la base de datos 
      $passIncriptado = password_hash($pass, PASSWORD_DEFAULT);
      $insertar = "INSERT INTO usuario(nomCliente,apeCliente,pass, correo, pasaporte, dui) VALUES('$nombre','$apellido','$passIncriptado','$email','$passport','$dui')";
      $resultado = mysqli_query($conexion, $insertar);
      if ($resultado) {
        echo '<script>alert("El usuario fue registrado exitosamente")</script>';
      } else {
        echo '<script>alert("Error al registrar")</script>';
      }
    } else {
      $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
      // proceso para encriptar contraseñas al momento de pasar a la base de datos 
      $passIncriptado = password_hash($pass, PASSWORD_DEFAULT);
      $insertar = "INSERT INTO usuario(nomCliente,apeCliente,pass, correo, pasaporte, dui,foto) VALUES('$nombre','$apellido','$passIncriptado','$email','$passport','$dui','$foto')";
      $resultado = mysqli_query($conexion, $insertar);
      if ($resultado) {
        echo '<script>alert("El usuario fue registrado exitosamente")</script>';
      } else {
        echo '<script>alert("Error al registrar")</script>';
      }
    }
  }
}
?>