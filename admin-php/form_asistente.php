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
    <div class="container mt-5">
        <h3 class="text-center mb-4"><img src="../imagen/header/favicon.png" class="img-fluid me-3" width="35"> Editar Asistente</h3>
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control rounded-3" id="name" name="name" value="<?php echo $name; ?>" placeholder="Ingresar nombre">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastname" class="form-label">Apellido</label>
                            <input type="text" class="form-control rounded-3" id="lastname" name="lastname" value="<?php echo $lastname; ?>" placeholder="Ingresar apellido">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Correo</label>
                            <input type="email" class="form-control rounded-3" id="email" name="email" value="<?php echo $email; ?>" placeholder="Ingresar correo">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="numero" class="form-label">Número de teléfono</label>
                            <input type="text" class="form-control rounded-3" id="numero" name="numero" value="<?php echo $numero; ?>" placeholder="Ingresar número de teléfono">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="pasaporte" class="form-label">Pasaporte</label>
                            <input type="text" class="form-control rounded-3" id="pasaporte" name="pasaporte" value="<?php echo $pasaporte; ?>" placeholder="Ingresar pasaporte">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="dui" class="form-label">DUI</label>
                            <input type="text" class="form-control rounded-3" id="dui" name="dui" value="<?php echo $dui; ?>" placeholder="Ingresar DUI">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="date" class="form-label">Horario de trabajo</label>
                            <input type="text" class="form-control rounded-3" id="date" name="date" value="<?php echo $date; ?>" placeholder="Ingresar horario de trabajo">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="genero" class="form-label">Género</label>
                            <select name="genero" class="form-control rounded-3" id="genero">
                                <option value="">Elige el género</option>
                                <option value="Masculino" <?php select1($genero); ?>>Masculino</option>
                                <option value="Femenino" <?php select2($genero); ?>>Femenino</option>
                                <option value="Otro" <?php select3($genero); ?>>Otro</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="servicio" class="form-label">Servicios</label>
                            <input type="text" class="form-control rounded-3" id="servicio" name="servicio" value="<?php echo $servicios; ?>" placeholder="Ingresar servicio">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="descri" class="form-label">Descripción</label>
                            <textarea class="form-control rounded-3" id="descri" name="descri" rows="4" placeholder="Ingresar descripción"><?php echo $descri; ?></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <label for="foto" class="form-label">Foto de perfil</label>
                            <input type="file" class="d-none" id="foto" name="foto" accept="image/*">
                            <button type="button" class="btn btn-primary rounded-3" onclick="document.getElementById('foto').click();">Subir foto de perfil</button>
                        </div>
                        <div class="col-md-12 text-center mt-3">
                            <input class="btn btn-success rounded-3" type="submit" value="Actualizar Asistente" name="crear">
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
include("conex.php");
if (isset($_POST['crear'])) {
    // variables tomadas de el formulario
    $name =  trim($_POST['name']); 
    $lastname =  trim($_POST['lastname']);
    $email =  trim($_POST['email']); 
    $numero =  trim($_POST['numero']); 
    $pasaporte = trim($_POST['pasaporte']); 
    $dui = trim($_POST['dui']); 
    $date =  $_POST['date']; 
    $genero =  trim($_POST['genero']); 
    $servicio = trim($_POST['servicio']); 
    $descri =  trim($_POST['descri']);
    $foto = $_FILES['foto']['error']; 


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