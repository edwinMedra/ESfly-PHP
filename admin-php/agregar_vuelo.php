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
    <link rel="stylesheet" href="../css/admin3.css">
    <title>ESfly</title>
</head>
<body>
    <?php include("header-admin.php") ?>
<div class="centered-card mt-4">
        <div class=" card-buscar card p-4">
            <div class="card-body">
                <h5 class="card-title text-center text-formu ">Busca tu Vuelo: </h5>
                <form class="form-inline justify-content-center">


                    <div class="form-group mt-4">
                        <label  class="text-formu">Fecha de Vuelo: </label>
                        <input type="date" class="form-control" id="fechaVuelo" placeholder="Fecha de Vuelo">
                    </div>
                    <div class="form-group mt-4">
                        <label class="text-formu ">País de Origen: </label>
                        <select class="form-control" id="Origen">

                            <option value="antigua-y-barbuda">Antigua y Barbuda</option>
                            <option value="argentina">Argentina</option>
                            <option value="bahamas">Bahamas</option>
                            <option value="barbados">Barbados</option>
                            <option value="belice">Belice</option>
                            <option value="bolivia">Bolivia</option>
                            <option value="brasil">Brasil</option>
                            <option value="canada">Canadá</option>
                            <option value="chile">Chile</option>
                            <option value="colombia">Colombia</option>
                            <option value="costa-rica">Costa Rica</option>
                            <option value="cuba">Cuba</option>
                            <option value="dominica">Dominica</option>
                            <option value="ecuador">Ecuador</option>
                            <option value="el-salvador">El Salvador</option>
                            <option value="estados-unidos">Estados Unidos</option>
                            <option value="granada">Granada</option>
                            <option value="guatemala">Guatemala</option>
                            <option value="guyana">Guyana</option>
                            <option value="haiti">Haití</option>
                            <option value="honduras">Honduras</option>
                            <option value="jamaica">Jamaica</option>
                            <option value="mexico">México</option>
                            <option value="nicaragua">Nicaragua</option>
                            <option value="panama">Panamá</option>
                            <option value="paraguay">Paraguay</option>
                            <option value="peru">Perú</option>
                            <option value="republica-dominicana">República Dominicana</option>
                            <option value="san-cristobal-y-nieves">San Cristóbal y Nieves</option>
                            <option value="san-vicente-y-las-granadinas">San Vicente y las Granadinas</option>
                            <option value="santa-lucia">Santa Lucía</option>
                            <option value="surinam">Surinam</option>
                            <option value="trinidad-y-tobago">Trinidad y Tobago</option>
                            <option value="uruguay">Uruguay</option>
                            <option value="venezuela">Venezuela</option>
                        </select>
                    </div>


                    <div class="form-group mt-4">
                        <label for="Destino" class="text-titulo text-formu">País de Destino: </label>
                        <select class="form-control" id="Destino">
                            <option value="antigua-y-barbuda">Antigua y Barbuda</option>
                            <option value="argentina">Argentina</option>
                            <option value="bahamas">Bahamas</option>
                            <option value="barbados">Barbados</option>
                            <option value="belice">Belice</option>
                            <option value="bolivia">Bolivia</option>
                            <option value="brasil">Brasil</option>
                            <option value="canada">Canadá</option>
                            <option value="chile">Chile</option>
                            <option value="colombia">Colombia</option>
                            <option value="costa-rica">Costa Rica</option>
                            <option value="cuba">Cuba</option>
                            <option value="dominica">Dominica</option>
                            <option value="ecuador">Ecuador</option>
                            <option value="el-salvador">El Salvador</option>
                            <option value="estados-unidos">Estados Unidos</option>
                            <option value="granada">Granada</option>
                            <option value="guatemala">Guatemala</option>
                            <option value="guyana">Guyana</option>
                            <option value="haiti">Haití</option>
                            <option value="honduras">Honduras</option>
                            <option value="jamaica">Jamaica</option>
                            <option value="mexico">México</option>
                            <option value="nicaragua">Nicaragua</option>
                            <option value="panama">Panamá</option>
                            <option value="paraguay">Paraguay</option>
                            <option value="peru">Perú</option>
                            <option value="republica-dominicana">República Dominicana</option>
                            <option value="san-cristobal-y-nieves">San Cristóbal y Nieves</option>
                            <option value="san-vicente-y-las-granadinas">San Vicente y las Granadinas</option>
                            <option value="santa-lucia">Santa Lucía</option>
                            <option value="surinam">Surinam</option>
                            <option value="trinidad-y-tobago">Trinidad y Tobago</option>
                            <option value="uruguay">Uruguay</option>
                            <option value="venezuela">Venezuela</option>
                        </select>
                    </div>
                    <!--AHI EL BOTON DE ABAJO TIENE Q DIRIGIT A DONDE DECIDA EL USUARIO (PAIS) -->
                    <a href="../html/index.html"  class=" mt-5  d-flex flex-column align-items-center btn btn-primary">Buscar Vuelo</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>