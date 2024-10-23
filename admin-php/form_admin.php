<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cuenta</title>
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include("header-admin.php");
    $idAdmin1 = $_GET['idAdmin'];
    include("../conex.php");
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
            }
        }
    }
?>
<h3 class="card-title text-center mt-5 mb-5"><img src="../imagen/header/favicon.png" class="img-fluid me-3" width="35"></a> Editar Administrador</h3>
<div class="container mt-5">
    <div class="card card-custom shadow-sm">
        <div class="card-body card-body-custom">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" placeholder="Ingresar nombre">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastname" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>" placeholder="Ingresar apellido">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Ingresar correo">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="pasaporte" class="form-label">Pasaporte</label>
                        <input type="text" class="form-control" id="pasaporte" name="pasaporte" value="<?php echo htmlspecialchars($pasaporte); ?>" placeholder="Ingresar pasaporte">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="dui" class="form-label">DUI</label>
                        <input type="text" class="form-control" id="dui" name="dui" value="<?php echo htmlspecialchars($dui); ?>" placeholder="Ingresar DUI">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cargo" class="form-label">Cargo</label>
                        <select class="form-control" id="cargo" name="cargo">
                            <option value="">Elige el cargo</option>
                            <option value="Administrador de Operaciones" <?php if ($cargo == "Administrador de Operaciones") echo "selected"; ?>>Administrador de Operaciones</option>
                            <option value="Administrador de gestión" <?php if ($cargo == "Administrador de gestión") echo "selected"; ?>>Administrador de gestión</option>
                            <option value="Administrador de Proyectos" <?php if ($cargo == "Administrador de Proyectos") echo "selected"; ?>>Administrador de Proyectos</option>
                            <option value="Administrador de Ventas y Marketing" <?php if ($cargo == "Administrador de Ventas y Marketing") echo "selected"; ?>>Administrador de Ventas y Marketing</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="descri" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descri" name="descri" rows="4" placeholder="Ingresar descripción"><?php echo htmlspecialchars($descri); ?></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <label for="foto" class="form-label">Foto de perfil</label>
                        <input type="file" class="d-none" id="foto" name="foto" accept="image/*">
                        <button type="button" class="btn btn-primary" onclick="document.getElementById('foto').click();">Subir Foto</button>
                        <button type="submit" class="btn btn-success mt-3" name="actualizar">Actualizar Administrador</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php

if (isset($_POST['actualizar'])) {
    // variables tomadas del formulario
    $name = trim($_POST['name']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $pasaporte = trim($_POST['pasaporte']);
    $dui = trim($_POST['dui']);
    $cargo = trim($_POST['cargo']);
    $descri = trim($_POST['descri']);

    // Validar si se subió una foto
    if ($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
        $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $update = "UPDATE administradores SET nomAdmin='$name', apeAdmin='$lastname', email='$email', pasaporte='$pasaporte', dui='$dui', cargo='$cargo', descri='$descri', foto='$foto' WHERE idAdmin='$idAdmin1'";
    } else {
        $update = "UPDATE administradores SET nomAdmin='$name', apeAdmin='$lastname', email='$email', pasaporte='$pasaporte', dui='$dui', cargo='$cargo', descri='$descri' WHERE idAdmin='$idAdmin1'";
    }

    $resul = $conexion->query($update);
    if ($resul) {
        echo '<script>alert("Administrador ' . htmlspecialchars($name) . ' actualizado con éxito"); window.location.href = "form_admin.php?idAdmin=' . $idAdmin1 . '";</script>';
    } else {
        echo '<script>alert("Error al actualizar los datos del administrador")</script>';
    }
}
?>
</html>
