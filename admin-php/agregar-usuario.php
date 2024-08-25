<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>


<body>
<?php include("header-admin.php"); ?>

    <!--Estructura principal de pagina web-->
    <div class="container-fluid">
        <div class="row text-center w-25 mx-auto my-5">
            <DIV class="col-lg-9 col-12 my-auto">
                <p class="fs-4">AGREGAR USUARIO</p>
            </DIV>
            <DIV class="col-lg-3 col-12"><img src="../imagen/datosCuenta/logito.png" alt="" class="w-75"></DIV>
        </div>
    </div>




    <div class="container mt-5">
        <div class="card card-custom shadow-sm">
            <div class="card-body card-body-custom">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" name="name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastname" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>">
                            
                        </div>
                        <div class="col-md-6 mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingresar contraseña" value="<?php echo isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : ''; ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                        <label for="validarPass" class="form-label">Validar Contraseña</label>
                        <input type="password" class="form-control" id="validarPass" name="validarPass" placeholder="Ingresar contraseña nuevamente" value="">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="email" name="email"  value="<?php echo isset($_POST['email']) ? $_POST['email'] : ""; ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="pasaporte" class="form-label">Pasaporte</label>
                            <input type="text" class="form-control" id="pasaporte" name="pasaporte" placeholder="Ingresar pasaporte" value="<?php echo isset($_POST['pasaporte']) ? $_POST['pasaporte'] : ""; ?>">
                            </div>
                        <div class="col-md-6 mb-3">
                            <label for="dui" class="form-label">DUI</label>
                            <input type="text" class="form-control" id="dui" name="dui" value="<?php echo isset($_POST['dui']) ? $_POST['dui'] : ""; ?>">
                        </div>

                        <div class="mb-4 w-75 text-center">
                        <label for="fotito">
                            <a class="btn btn-primary">Subir foto de perfil</a>
                        </label>
                        <input type="file" id="fotito" class="d-none" name="foto" accept="image/*">
                        <input class="btn btn-primary my-3" type="submit" value="Crear Administrador" name="crear">
                        </div>

                      

                    </div>
                </form>
            </div>
        </div>
    </div>

    
</body> 

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
        echo '<script>
                alert("El usuario fue registrado exitosamente");
                window.location.href = "index_admin.php";
              </script>';
    } else {
        echo '<script>alert("Error al registrar")</script>';
    }
    
    }
  }
}
?>