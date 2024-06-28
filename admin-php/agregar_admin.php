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
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/editar-admin.css">
    <link rel="stylesheet" href="../css/header-admin.css">
</head>

<body>
<?php 
include ("header-admin.php");
?>
    <!--Estructura principal de pagina web-->
    <div class="container-fluid">
        <div class="row text-center w-25 mx-auto my-5">
            <DIV class="col-lg-8 col-12 my-auto">
                <p class="fs-4">EDITAR ADMINISTRADOR</p>
            </DIV>
            <DIV class="col-lg-4 col-12"><img src="../imagen/datosCuenta/logito.png" alt="" class="w-50"></DIV>
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
                        <input type="text" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar nombre"
                            id="correo" name="name">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/apellido.png" class="img"> Apellido</label>
                        <input type="text" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar apellido"
                            id="correo" name="lastname">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/contraseña.png" class="img"> Contraseña</label>
                        <input type="password" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar apellido"
                            id="correo" name="pass">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/correo.png" class="img"> Correo</label>
                        <input type="email" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar apellido"
                            id="correo" name="email">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/pasaporte.png" class="img"> Pasaporte</label>
                        <input type="text" class="form-control mb-2 rounded-5  w-75" placeholder="Ingresar apellido"
                            id="correo" name="pasporte">
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/dui.png" class="img"> DUI</label>
                        <input type="text" class="form-control mb-2 rounded-5 border border-1 w-75"
                            placeholder="Ingresar apellido" id="correo" name="email">
                    </div>

                </div>

                <div class="col-lg-6 col-12">
                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/nombre.png" class="img"> Cargo</label>
                        <select name="cargo" class="form-control w-75 rounded-5 mb-2" id="correo">
                            <option value="">Elige el cargo</option>
                            <option value="Administrador de Operaciones">Administrador de Operaciones</option>
                            <option value="Administrador de gestión">Administrador de gestión</option>
                            <option value="Administrador de Proyectos">Administrador de Proyectos</option>
                            <option value="">Administrador de Ventas y Marketing</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="exampleImputEmail" class="form-label font-weight-bold">
                            <img src="../imagen/login/pasaporte.png" class="img"> Descripcion</label>
                        <div class="form-floating">
                            <textarea class="form-control w-75" id="floatingTextarea"
                                style="height: 200px;"></textarea>
                        </div>
                    </div>
                    <div class="mb-4 w-75 text-center">
                        <label for="fotito">
                            <a  class="btn btn-primary">Subir foto de perfil</a>
                        </label>
                        <input type="file" name="" id="fotito" class="d-none" name="foto"><br>
                        <input class="btn btn-primary my-3" type="submit" value="Crear Administrador" name="crear">
                    </div>

                </div>

            </div>
        </form>
    </div>
</body>
</html>
<?php
include ("conex.php");
if (isset($_POST['crear'])){
    $nombre = trim($_POST['name']);
    //banderas para usar en las funciones 
    // se establece funcion para poder reducir linea de codigo
    function validar($variable){
        if (strlen($variable) > 2) {
            echo "hola mundo sapo";

        }
    }
    //
    validar($nombre);
   /* if (strlen($nombre)  ) {
        echo '<script>alert("es mas de 5 pa")</script>';
    }*/
}

?>