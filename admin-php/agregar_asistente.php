<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar asistente</title>
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include("header-admin.php"); ?>

    <div class="container-fluid">
        <div class="row text-center w-25 mx-auto my-5">
            <div class="col-lg-9 col-12 my-auto">
                <p class="fs-4">AGREGAR ASISTENTE</p>
            </div>
            <div class="col-lg-3 col-12"><img src="../imagen/datosCuenta/logito.png" alt="" class="w-75"></div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="card card-custom shadow-sm">
            <div class="card-body card-body-custom">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ""; ?>" placeholder="Ingresar nombre">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastname" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : ""; ?>" placeholder="Ingresar apellido">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" placeholder="Ingresar contraseña" id="pass" name="pass" value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : ""; ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Correo</label>
                            <input type="email" class="form-control" placeholder="Ingresar correo" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ""; ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="numero" class="form-label">Número de teléfono</label>
                            <input type="number" class="form-control" id="numero" name="numero" placeholder="Ingresar número de teléfono" value="<?php echo isset($_POST['numero']) ? $_POST['numero'] : ""; ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="pasaporte" class="form-label">Pasaporte</label>
                            <input type="text" class="form-control" id="pasaporte" name="pasaporte" placeholder="Ingresar pasaporte" value="<?php echo isset($_POST['pasaporte']) ? $_POST['pasaporte'] : ""; ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="dui" class="form-label">DUI</label>
                            <input type="text" class="form-control" id="dui" name="dui" value="<?php echo isset($_POST['dui']) ? $_POST['dui'] : ""; ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cargo" class="form-label">Horario de trabajo</label>
                            <select class="form-control" id="horario" name="horario">
                                <option value="">Elige el horario de trabajo</option>
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="genero" class="form-label">Género</label>
                            <select name="genero" class="form-control" id="genero">
                                <option value="">Elige el género</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="servicio" class="form-label">Servicios</label>
                            <input required type="text" class="form-control" placeholder="Ingresar servicio" id="servicio" name="servicio" value="<?php echo isset($_POST['servicio']) ? $_POST['servicio'] : ""; ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="descri" class="form-label">Descripción</label>
                            <input required type="text" class="form-control" placeholder="Ingresar descripción" id="descri" name="descri" value="<?php echo isset($_POST['descri']) ? $_POST['descri'] : ""; ?>">
                        </div>

                        <div class="mb-4 w-75 text-center">
                            <label for="fotito">
                                <a class="btn btn-primary">Subir foto de perfil</a>
                            </label>
                            <input type="file" id="fotito" class="d-none" name="foto" accept="image/*">
                            <input class="btn btn-primary my-3" type="submit" value="Crear Asistente" name="crear">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>

<?php
error_reporting(0);
include("conex.php");

if (isset($_POST['crear'])) {
    // Variables del formulario
    $name = trim($_POST['name']);
    $lastname = trim($_POST['lastname']);
    $pass = trim($_POST['pass']);
    $email = trim($_POST['email']);
    $numero = trim($_POST['numero']);
    $pasaporte = trim($_POST['pasaporte']);
    $dui = trim($_POST['dui']);
    $horario = $_POST['horario'];
    $genero = trim($_POST['genero']);
    $servicio = trim($_POST['servicio']);
    $descri = trim($_POST['descri']);
    $foto = $_FILES['foto']['error'];

    // Validaciones
    if (preg_match("/[0-9]/", $name)) {
        echo "<script>alert('Nombre no válido, intente de nuevo')</script>";
    } else if (empty($name)) {
        echo "<script>alert('Falta que escribas tu nombre')</script>";
    } else if (preg_match("/[0-9]/", $lastname)) {
        echo "<script>alert('Apellido no válido, intente de nuevo')</script>";
    } else if (empty($lastname)) {
        echo "<script>alert('Falta que escribas tu apellido')</script>";
    } else if (strlen($pass) < 4) {
        echo "<script>alert('La contraseña es muy corta, intente de nuevo')</script>";
    } else if (strlen($pass) > 12) {
        echo "<script>alert('La contraseña es muy larga, intente de nuevo')</script>";
    } else if (!preg_match("/[@]/", $email)) {
        echo "<script>alert('Correo no válido, intente de nuevo')</script>";
    } else if (strlen($numero) != 8) {
        echo "<script>alert('Número no válido, intente de nuevo')</script>";
    } else if (strlen($pasaporte) != 9) {
        echo "<script>alert('Pasaporte no válido, máximo 9 caracteres, intente de nuevo')</script>";
    } else if (!preg_match("/^[0-9]{8}-[0-9]{1}$/", $dui)) {
        echo '<script>alert("El DUI debe tener 10 caracteres, incluyendo un guion después de 8 dígitos")</script>';
    } else if (empty($horario)) {
        echo "<script>alert('Escriba el horario de trabajo, intente de nuevo')</script>";
    } else if (empty($genero)) {
        echo "<script>alert('Por favor seleccione el género de este asistente')</script>";
    } else if (empty($servicio)) {
        echo "<script>alert('Por favor escriba los servicios de este asistente')</script>";
    } else if (empty($descri)) {
        echo "<script>alert('Por favor escriba una descripción del asistente')</script>";
    } else {
        // Verificar si el correo, pasaporte o DUI ya existen en la base de datos
        $buscarCorreo = $conexion->query("SELECT * FROM asistente WHERE correoAsisten='$email'");
        $buscarPasaporte = $conexion->query("SELECT * FROM asistente WHERE pasaporte='$pasaporte'");
        $buscarDui = $conexion->query("SELECT * FROM asistente WHERE dui='$dui'");
        
        if (mysqli_num_rows($buscarCorreo) > 0) {
            echo '<script>alert("Correo ya existente, intente nuevamente")</script>';
        } else if (mysqli_num_rows($buscarPasaporte) > 0) {
            echo '<script>alert("Pasaporte ya existente, intente nuevamente")</script>';
        } else if (mysqli_num_rows($buscarDui) > 0) {
            echo '<script>alert("DUI ya existente, intente nuevamente")</script>';
        } else {
            // Encriptar la contraseña
            $encriptada = password_hash($pass, PASSWORD_DEFAULT);

            // Consulta SQL dependiendo de si se ha subido o no una foto
            if ($_FILES['foto']['error'] == 0) { // Si se subió una foto
                $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
                $sql = "INSERT INTO asistente(nomAsistente, apeAsistente, passAsisten, correoAsisten, numTelefono, horarioTrabajo, genero, servicios, descri, foto, pasaporte, dui) 
                        VALUES('$name', '$lastname', '$encriptada', '$email', '$numero', '$horario', '$genero', '$servicio', '$descri', '$foto', '$pasaporte', '$dui')";
            } else { // Si no se subió ninguna foto
                $sql = "INSERT INTO asistente(nomAsistente, apeAsistente, passAsisten, correoAsisten, numTelefono, horarioTrabajo, genero, servicios, descri, pasaporte, dui) 
                        VALUES('$name', '$lastname', '$encriptada', '$email', '$numero', '$horario', '$genero', '$servicio', '$descri', '$pasaporte', '$dui')";
            }

            $resul = $conexion->query($sql);

            if ($resul) {
                echo '<script>alert("Asistente agregado con éxito")
                      window.location.href = "agregar_asistente.php";
                      </script>';
            } else {
                echo '<script>alert("Error al ingresar datos del asistente")</script>';
            }
        }
    }
}
?>

