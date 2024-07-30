<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="../css/editar-admin.css">
    <link rel="stylesheet" href="../css/header-admin.css">
</head>

<body>
    <?php
    include("header-admin.php");
    ?>
    <!--Estructura principal de pagina web-->
    <div class="container-fluid">
        <div class="row text-center w-25 mx-auto my-5">
            <DIV class="col-lg-9 col-12 my-auto">
                <p class="fs-4">AGREGAR ASISTENTE</p>
            </DIV>
            <DIV class="col-lg-3 col-12"><img src="../imagen/datosCuenta/logito.png" alt="" class="w-75"></DIV>
        </div>
    </div>
    <!--Div padre de toda la tabla-->
    <div class="container-fluid w-75 ps-5 pt-5 rounded-5" id="form">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <!--Columna uno-->
                <div class="col-lg-6 col-12 ">

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/nombre.png" class="img"> Nombre</label>
                        <input required type="text" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar nombre" id="correo" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ""; ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/apellido.png" class="img"> Apellido</label>
                        <input required type="text" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar apellido" id="correo" name="lastname" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : ""; ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/contraseña.png" class="img"> Contraseña</label>
                        <input required type="password" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar contraseña" id="correo" name="pass">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/correo.png" class="img"> Correo</label>
                        <input required type="email" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar correo" id="correo" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ""; ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/pasaporte.png" class="img"> Número de teléfono</label>
                        <input required type="text" class="form-control mb-2  rounded-5  w-75" placeholder="Ingresar tu número de teléfono" id="correo" name="numero" value="<?php echo isset($_POST['numero']) ? $_POST['numero'] : ""; ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/dui.png" class="img"> Pasaporte</label>
                        <input required type="text" class="form-control mb-2 rounded-5 border border-1 w-75" placeholder="Ingresar pasaporte" id="correo" name="pasaporte" value="<?php echo isset($_POST['pasaporte']) ? $_POST['pasaporte'] : ""; ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/dui.png" class="img"> DUI</label>
                        <input required type="text" class="form-control mb-2 rounded-5 border border-1 w-75" placeholder="Ingresar DUI del Asistente" id="correo" name="dui" value="<?php echo isset($_POST['dui']) ? $_POST['dui'] : ""; ?>">
                    </div>

                </div>
                <!--Columna dos-->
                <div class="col-lg-6 col-12">

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/dui.png" class="img"> Horario de trabajo</label>
                        <input required type="text" class="form-control mb-2 rounded-5 border border-1 w-75" placeholder="Ingresar horario de trabajo" id="correo" name="date" >
                    </div>
                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/nombre.png" class="img"> Género</label>
                        <select name="genero" class="form-control w-75 rounded-5 mb-2" id="correo">
                            <option value="">Elige el género</option>
                            <option value="Masculino">Maculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/dui.png" class="img"> Servicios</label>
                        <input required type="text" class="form-control mb-2 rounded-5 border border-1 w-75" placeholder="Ingresar servicio" id="correo" name="servicio" value="<?php echo isset($_POST['servicio']) ? $_POST['servicio'] : ""; ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/pasaporte.png" class="img"> Descripción</label>
                        <div class="form-floating">
                            <textarea class="form-control w-75" id="floatingTextarea" style="height: 200px;" name="descri"><?php echo isset($_POST['descri']) ? $_POST['descri'] : ""; ?></textarea>
                        </div>
                    </div>
                    <div class="mb-4 w-75 text-center">
                        <label for="fotito">
                            <a class="btn btn-primary">Subir foto de perfil</a>
                        </label>
                        <input required type="file" id="fotito" class="d-none" name="foto" accept="image/*"><br>
                        <input class="btn btn-primary my-3" type="submit" value="Crear Asistente" name="crear">
                    </div>

                </div>

            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
<?php
error_reporting(0);
include("conex.php");
if (isset($_POST['crear'])) {
    // se establecen banderas para poder hacer la validacion de forma efectiva 
    // variables tomadas de el formulario
    $name =  trim($_POST['name']); // validado
    $lastname =  trim($_POST['lastname']); // validado
    $pass =  trim($_POST['pass']); // validado
    $email =  trim($_POST['email']); // validado
    $numero =  trim($_POST['numero']); // validado
    $pasaporte = trim($_POST['pasaporte']); // validado
    $dui = trim($_POST['dui']); // validado
    $date =  $_POST['date']; // validado
    $genero =  trim($_POST['genero']); // validado
    $servicio = trim($_POST['servicio']); // validado
    $descri =  trim($_POST['descri']); // validado
    $foto = $_FILES['foto']['error']; // validado
    // establecer funcion para resumir codigo
    // empieza validaciones de parte de el agregar asistente 

    if (preg_match("/[0-9]/", $name)) {
        echo "<script>alert('Nombre no valido, Intente de nuevo')</script>";
    } else if(empty($name)){
        echo "<script>alert('Falta que escribas tu nombre')</script>";
    }else if (preg_match("/[0-9]/", $lastname)) {
        echo "<script>alert('Apellido no valido, Intente de nuevo')</script>";
    } else if(empty($lastname)){
        echo "<script>alert('Falta que escribas tu apellido')</script>";
    }else if (strlen($pass) < 4) {
        echo "<script>alert('La contraseña es muy corta, Intente de nuevo')</script>";
    } else if (strlen($pass) > 12) {
        echo "<script>alert('La contraseña es muy larga, Intente de nuevo')</script>";
    } else if (!(preg_match("/[@]/", $email))) {
        echo "<script>alert('Correo no valido, Intente de nuevo')</script>";
    } else if (!(strlen($numero) == 8)) {
        echo "<script>alert('Número no valido, Intente de nuevo')</script>";
    } else if (!(strlen($pasaporte) == 9)) {
        echo "<script>alert('Pasaporte no valido, maximo 9 caracteres , Intente de nuevo')</script>";
    } elseif (!preg_match("/^[0-9]{8}-[0-9]{1}$/", $dui)) {
        echo '<script>alert("El DUI debe tener 10 caracteres, incluyendo un guion después de 8 dígitos")</script>';
    } else if ($date == null || $date == "") {
        echo "<script>alert('Escriba el horario de servicio  Intente de nuevo')</script>";
    } else if ($genero == null || $genero == "") {
        echo "<script>alert('Por favor seleccione el género de este Asistente')</script>";
    } else if ($servicio == null || $servicio == "") {
        echo "<script>alert('Por favor escriba los servicios de este Asistente')</script>";
    } else if ($descri == null || $descri == "") {
        echo "<script>alert('Por favor escribir descripción de este Asistente')</script>";
    } else {
        $buscar = $conexion->query("SELECT * FROM asistente where correoAsisten='$email'");
        $buscar1 = $conexion->query("SELECT * FROM asistente where pasaporte='$pasaporte'");
        $buscar2 = $conexion->query("SELECT * FROM asistente where dui='$dui'");
        $filaCorreo = mysqli_num_rows($buscar);
        $filaEmail = mysqli_num_rows($buscar1);
        $filaDui = mysqli_num_rows($buscar2);
        if ($filaCorreo) {
            echo '<script>alert("Correo ' . $email . ' ya existente, intente nuevamente")</script>';
        } else if ($filaEmail) {
            echo '<script>alert("Pasaporte ' . $passport . ' ya existente, intente nuevamente")</script>';
        } else if ($filaDui) {
            echo '<script>alert("Dui ' . $dui . ' ya existente, intente nuevamente")</script>';
        } else {
            if ($foto) {

                include("conex.php");
                // encriptar la contraseña 
                $encriptada = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO asistente(nomAsistente,apeAsistente,passAsisten,correoAsisten,numTelefono,horarioTrabajo, genero, servicios, descri,pasaporte,dui) VALUES('$name','$lastname','$encriptada','$email','$numero','$date','$genero', '$servicio', '$descri','$pasaporte','$dui')";
                $resul = $conexion->query($sql);
                if ($resul) {
                    echo '<script>alert("Asistente ' . $name . ' Agregado con exito")
                    window.location.href = "agregar_asistente.php"
                    </script>';
                } else {
                    echo '<script>alert("Error al ingresar datos del asistente")</script>';
                }
            } else {
                // encriptar la contraseña 
                $encriptada = password_hash($pass, PASSWORD_DEFAULT);
                include("conex.php");
                $foto = addslashes(file_get_contents($_FILES['foto']['name']));
                $sql = "INSERT INTO asistente(nomAsistente,apeAsistente,passAsisten,correoAsisten,numTelefono,horarioTrabajo,genero, servicios, descri,foto,pasaporte,dui) VALUES('$name','$lastname','$encriptada','$email','$numero','$date','$genero', '$servicio','$descri','$foto','$pasaporte','$dui')";
                $resul = $conexion->query($sql);
                if ($resul) {
                    echo '<script>alert("Asistente ' . $name . ' Agregado con exito")
                    window.location.href = "agregar_asistente.php"
                    </script>';
                } else {
                    echo '<script>alert("Error al ingresar datos del asistente")</script>';
                }
            }
        }
    }
}
?>