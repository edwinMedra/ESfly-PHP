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
    <?php
    $idAsistente1 = $_GET['idAsistente'];
    include("conex.php");
    if ($conexion) {
        $select = "SELECT * FROM asistente WHERE idAsistente='$idAsistente1'";
        $resul = $conexion->query($select);
        if ($resul) {
            while ($row = $resul->fetch_array()) {
                $name = $row['nomAsistente'];
                $lastname = $row['apeAsistente'];
                $pass = $row['passAsisten'];
                $email = $row['correoAsisten'];
                $numero = $row['numTelefono'];
                $date = $row['horarioTrabajo'];
                $genero = $row['genero'];
                $descri = $row['descri'];
                $idAsistente = $row['idAsistente'];
                $pasaporte = $row['pasaporte'];
                $dui = $row['dui'];
                $servicios = $row['servicios'];
                // condicional para verificar que el input de select tenga el dato correcto
                // para primer rol
                // segunda funcion

                function select1($genero)
                {
                    if ($genero == "Masculino") {
                        echo "selected";
                    }
                }

                function select2($genero)
                {
                    if ($genero == "Femenino") {
                        echo "selected";
                    }
                }

                function select3($genero)
                {
                    if ($genero == "Otro") {
                        echo "selected";
                    }
                }
            }
        }
    }
    ?>
    <!--Estructura principal de pagina web-->
    <div class="container-fluid">
        <div class="row text-center w-25 mx-auto my-5">
            <DIV class="col-lg-9 col-12 my-auto">
                <p class="fs-4">EDITAR ASISTENTE</p>
            </DIV>
            <DIV class="col-lg-3 col-12"><img src="../imagen/datosCuenta/logito.png" alt="" class="w-75"></DIV>
        </div>
    </div>
    <!--Div padre de toda la tabla-->
    <div class="container-fluid w-75 ps-5 pt-5 rounded-5" id="form">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 col-12 ">

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/nombre.png" class="img"> Nombre</label>
                        <input type="text" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar nombre" id="correo" name="name" value="<?php echo $name ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/apellido.png" class="img"> Apellido</label>
                        <input type="text" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar apellido" id="correo" name="lastname" value="<?php echo $lastname ?>">
                    </div>


                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/correo.png" class="img"> Correo</label>
                        <input type="email" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar correo" id="correo" name="email" value="<?php echo $email ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/pasaporte.png" class="img"> Número de teléfono</label>
                        <input type="text" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar número de teléfono" id="correo" name="numero" value="<?php echo $numero ?>">
                    </div>


                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/dui.png" class="img"> Pasaporte</label>
                        <input type="text" class="form-control mb-2 rounded-5 border border-1 w-75" placeholder="Ingresar pasaporte" id="correo" name="pasaporte" value="<?php echo $pasaporte?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/dui.png" class="img"> DUI</label>
                        <input type="text" class="form-control mb-2 rounded-5 border border-1 w-75" placeholder="Ingresar DUI del Asistente" id="correo" name="dui" value="<?php echo $dui ?>">
                    </div>

                </div>

                <div class="col-lg-6 col-12">
                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/dui.png" class="img"> Horario de trabajo</label>
                        <input type="text" class="form-control mb-2 rounded-5 border border-1 w-75" placeholder="Ingresar horario de trabajo" id="correo" name="date" value="<?php echo $date ?>">
                    </div>
                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/nombre.png" class="img"> Género</label>
                        <select name="genero" class="form-control w-75 rounded-5 mb-2" id="correo">
                            <option value="">Elige el género</option>
                            <option value="Masculino" <?php select1($genero) ?>>Masculino</option>
                            <option value="Femenino" <?php select2($genero) ?>>Femenino</option>
                            <option value="Otro" <?php select3($genero) ?>>Otro</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/dui.png" class="img"> Servicios</label>
                        <input type="text" class="form-control mb-2 rounded-5 border border-1 w-75" placeholder="Ingresar servicio" id="correo" name="servicio" value="<?php echo $servicios ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/pasaporte.png" class="img"> Descripcion</label>
                        <div class="form-floating">
                            <textarea class="form-control w-75" id="floatingTextarea" style="height: 200px;" name="descri"><?php echo $descri ?></textarea>
                        </div>
                    </div>
                    <div class="mb-4 w-75 text-center">
                        <label for="fotito">
                            <a class="btn btn-primary">Subir foto de perfil</a>
                        </label>
                        <input type="file" id="fotito" class="d-none" name="foto" accept="image/*"><br>
                        <input class="btn btn-primary my-3" type="submit" value="Actualizar Asistente" name="crear">
                    </div>

                </div>

            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
<?php
include("conex.php");
if (isset($_POST['crear'])) {
    // variables tomadas de el formulario
    $name =  trim($_POST['name']); // validado
    $lastname =  trim($_POST['lastname']); // validado
    $email =  trim($_POST['email']); // validado
    $numero =  trim($_POST['numero']); // validado
    $pasaporte = trim($_POST['pasaporte']); // validado
    $dui = trim($_POST['dui']); // validado
    $date =  $_POST['date']; // validado
    $genero =  trim($_POST['genero']); // validado
    $servicio = trim($_POST['servicio']); // validado
    $descri =  trim($_POST['descri']); // validado
    $foto = $_FILES['foto']['error']; // validado


        if ($foto) {
            include("conex.php");
            $update = "UPDATE asistente set nomAsistente='$name', apeAsistente='$lastname',  correoAsisten='$email', numTelefono='$numero', horarioTrabajo='$date' , genero='$genero',descri='$descri', dui='$dui', pasaporte='$pasaporte'  where idAsistente='$idAsistente' ";
            $resul = $conexion->query($update);
            if ($resul) {
                echo '<script>alert("Asistente ' . $name . ' Actualizado con exito")
                window.location.href = "form_asistente.php?idAsistente='.$idAsistente1.'";
                </script>';
            } else {
                echo '<script>alert("Error al ingresar datos del asistente")</script>';
            }
        } else {
            include("conex.php");
            $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
            $update = "UPDATE asistente set nomAsistente='$name', apeAsistente='$lastname',  correoAsisten='$email', numTelefono='$numero', horarioTrabajo='$date' , genero='$genero',descri='$descri', foto='$foto',dui='$dui', pasaporte='$pasaporte' where idAsistente='$idAsistente' ";
            $resul = $conexion->query($update);
            if ($resul) {
                echo '<script>alert("Asistente ' . $name . ' Actualizado con exito")
                window.location.href = "form_asistente.php?idAsistente='.$idAsistente1.'";
                </script>';
            } else {
                echo '<script>alert("Error al ingresar datos del asistente")</script>';
            }
        }
}
?>