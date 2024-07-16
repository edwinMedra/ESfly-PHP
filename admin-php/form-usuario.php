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
<?php
$idCliente1 = $_GET['idCliente'];
include("conex.php");
if ($conexion){
  $select = "SELECT * FROM usuario WHERE idCliente='$idCliente1'";
  $resul = $conexion->query($select);
  if ($resul){
    while ($row = $resul->fetch_array()){
      $nomCliente = $row['nomCliente'];
      $apeCliente = $row['apeCliente'];
      $pass = $row['pass'];
      $correo = $row['correo'];
      $pasaporte = $row['pasaporte'];
      $dui = $row['dui'];
      $idCliente = $row['idCliente'];
    }
  }
}
?>

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
        <h2 class="font-weight-bold align-self-center text-center "> <img src="../imagen/header/favicon.png" class="img-fluid me-3"><b>Editar usuario</b></h2>

        <form class="mb-2 g-0" method="post" enctype="multipart/form-data">
          <div class="mb-2 g-0">
            <label for="exampleImputEmail" class="form-label font-weight-bold">
              <img src="../imagen/login/nombre.png" class="img"> Nombre</label>
            <input type="username" class="form-control" placeholder="Nombres" id="nombre"
            aria-describedby="emailHelp" value="<?php echo $nomCliente ?>" name="name">
          </div>

          <div class="mb-2 ">
            <label for="exampleImputEmail" class="form-label font-weight-bold">
              <img src="../imagen/login/apellido.png" class="img"> Apellido</label>
            <input type="lastname" class="form-control mb-2" placeholder="Apellidos" id="apellido" value="<?php echo $apeCliente?>" name="lastName">
          </div>

          <div class="mb-2">
            <label for="exampleImputPassword" class="form-label font-weight-bold">
              <img src="../imagen/login/contraseña.png" class="img"> Contraseña
            </label><i class="ojo bx bx-show-alt  mt-2" id="togglePassword"></i>
            <input type="text" class="pass form-control mb-2" placeholder="Contraseña" id="pass" value="<?php echo $pass?>" name="pass">  
            
          </div>

          <div class="mb-2">
            <label for="exampleImputEmail" class="form-label font-weight-bold">
              <img src="../imagen/login/correo.png" class="img"> Correo</label>
            <input type="email" class="form-control mb-2" placeholder="Correo" id="correo" value="<?php echo $correo?>" name="email">
          </div>

          <div class="mb-2">
            <label for="exampleImputEmail" class="form-label font-weight-bold">
              <img src="../imagen/login/pasaporte.png" class="img"> Pasaporte</label>
            <input type="text" class="form-control mb-2" placeholder="Pasaporte" id="pasaporte" value="<?php echo $pasaporte ?>" name="pasaporte">
          </div>

          <div class="mb-2">
            <label for="exampleImputEmail" class="form-label font-weight-bold">
              <img src="../imagen/login/dui.png" class="img"> DUI</label>
            <input type="text" class="form-control mb-2" placeholder="Dui" id="dui" value="<?php echo $dui?>" name="dui">
          </div>
          
          <label for="foto" class=" ">
          <a type="button" class="btn btn-primary w-100 mt-3 mx-auto" >Subir fotografía</a>
          <input type="file" name="foto" id="foto" class="d-none">
          </label>

          <button type="submit" class="btn btn-primary w-100 mt-3" name="editar">Editar</button>
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
  if (isset($_POST['editar'])){
    $nombre = trim($_POST['name']);
    $apellido = trim($_POST['lastName']);
    $pass = trim($_POST['pass']);
    $email = trim($_POST['email']);
    $pasaporte =  trim($_POST['pasaporte']);
    $dui = trim($_POST['dui']);
    $foto = $_FILES['foto']['error'];
    if ($foto) {
      $update = "UPDATE usuario set nomCliente='$nombre', apeCliente='$apellido', pass='$pass', correo='$email', pasaporte='$pasaporte', dui='$dui' where idCliente='$idCliente'";
      $resul = $conexion->query($update);
       if ($resul) {
        echo '<script>alert("Datos Atctualizados");</script>';
       }
    }else{
        $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $update = "UPDATE usuario set nomCliente='$nombre', apeCliente='$apellido', pass='$pass', correo='$email', pasaporte='$pasaporte', dui='$dui', foto='$foto' where idCliente='$idCliente'";
        $resul = $conexion->query($update);
         if ($resul) {
          echo '<script>alert("Datos Atctualizados");</script>';
         }
    }

  }
?>