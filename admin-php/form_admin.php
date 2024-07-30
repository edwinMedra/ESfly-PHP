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
    $idAdmin1 = $_GET['idAdmin'];
    include("conex.php");
    if ($conexion) {
        $select = "SELECT * FROM administradores WHERE idAdmin='$idAdmin1'";
        $resul = $conexion->query($select);
        if ($resul) {
            while ($row = $resul->fetch_array()) {
                $name = $row['nomAdmin'];
                $lastname = $row['apeAdmin'];
                $email = $row['email'];
                $dui = $row['dui'];
                $cargo = $row['cargo'];
                $descri = $row['descri'];
                $idAdmin = $row['idAdmin'];
                $pasaporte = $row['pasaporte'];
                // condicional para verificar que el input de select tenga el dato correcto
                // para primer rol
                // segunda funcion

                function select1($dato)
                {
                    if ($dato == "Administrador de Operaciones") {
                        echo "selected";
                    }
                }

                function select2($dato)
                {
                    if ($dato == "Administrador de gestión") {
                        echo "selected";
                    }
                }

                function select3($dato)
                {
                    if ($dato == "Administrador de Proyectos") {
                        echo "selected";
                    }
                }

                function select4($dato)
                {
                    if ($dato == "Administrador de Ventas y Marketing") {
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
                <p class="fs-4">EDITAR ADMINISTRADOR</p>
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
                        <input type="email" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar apellido" id="correo" name="email" value="<?php echo $email ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/dui.png" class="img"> Pasaporte</label>
                        <input type="text" class="form-control mb-2 rounded-5 border border-1 w-75" placeholder="Ingresar pasaporte" id="correo" name="pasaporte" value="<?php echo $pasaporte ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/dui.png" class="img"> DUI</label>
                        <input type="text" class="form-control mb-2 rounded-5 border border-1 w-75" placeholder="Ingresar apellido" id="correo" name="dui" value="<?php echo $dui ?>">
                    </div>

                </div>

                <div class="col-lg-6 col-12">
                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/nombre.png" class="img"> Cargo</label>
                        <select name="cargo" class="form-control w-75 rounded-5 mb-2" id="correo">
                            <option value="">Elige el cargo</option>
                            <option value="Administrador de Operaciones" <?php select1($cargo) ?>>Administrador de Operaciones</option>
                            <option value="Administrador de gestión" <?php select2($cargo) ?>>Administrador de gestión</option>
                            <option value="Administrador de Proyectos" <?php select3($cargo) ?>>Administrador de Proyectos</option>
                            <option value="Administrador de Ventas y Marketing" <?php select4($cargo) ?>>Administrador de Ventas y Marketing</option>
                        </select>
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
                        <input class="btn btn-primary my-3" type="submit" value="Actualizar Administrador" name="crear">
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
    $name =  trim($_POST['name']);
    $lastname =  trim($_POST['lastname']);
    $email =  trim($_POST['email']);
    $dui =  trim($_POST['dui']);
    $cargo =  trim($_POST['cargo']);
    $descri =  trim($_POST['descri']);
    $foto = $_FILES['foto']['error'];
    // establecer funcion para resumir codigo

    // parte para poder actualizar los datos de la base de datos
    if (true) {

        if ($foto) {
            include("conex.php");
            $update = "UPDATE administradores set nomAdmin='$name', apeAdmin='$lastname', email='$email', dui='$dui' , cargo='$cargo',descri='$descri', pasaporte='$pasaporte' where idAdmin='$idAdmin' ";
            $resul = $conexion->query($update);
            if ($resul) {
                echo '<script>alert("Administrador ' . $name . ' Actualizado con exito")
                window.location.href = "form_admin.php?idAdmin=' . $idAdmin . '";
                </script>';
            } else {
                echo '<script>alert("Error al ingresar datos del administrador")</script>';
            }
        } else {
            include("conex.php");
            $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
            $update = "UPDATE administradores set nomAdmin='$name', apeAdmin='$lastname', email='$email', dui='$dui' , cargo='$cargo',descri='$descri', foto='$foto',pasaporte='$pasaporte' where idAdmin='$idAdmin' ";
            $resul = $conexion->query($update);
            if ($resul) {
                echo '<script>alert("Administrador ' . $name . ' Actualizado con exito")
                window.location.href = "form_admin.php?idAdmin=' . $idAdmin . '";

                </script>';
            } else {
                echo '<script>alert("Error al ingresar datos del administrador")</script>';
            }
        }
    }
}
?>