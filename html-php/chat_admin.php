<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Administrador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/headerr.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        .chat-list {
            height: 400px;
            overflow-y: scroll;
        }
        .chat-box {
            height: 300px;
            overflow-y: scroll;
        }
        .msg-cliente {
            background-color: #273758;
            color: white;
        }
        .msg-admin {
            background-color: #6c757d;
            color: white;
        }
        .chat-header {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

<?php
    include("header-log.php");
    ?>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group chat-list">
                <?php
                include("conex.php");
                $result = $conexion->query("SELECT * FROM usuario");
                while ($row = $result->fetch_assoc()) {
                    $foto = $row['foto'] ? 'data:image/jpeg;base64,' . base64_encode($row['foto']) : 'https://cdn-icons-png.flaticon.com/512/9187/9187604.png';
                    echo '<a href="?cliente=' . $row['idCliente'] . '" class="list-group-item list-group-item-action">';
                    echo '<img src="' . $foto . '" class="rounded-circle me-2" width="30" height="30">';
                    echo $row['nomCliente'] . ' ' . $row['apeCliente'] . '<br>';
                    echo '<small>Cliente</small>';
                    echo '</a>';
                }
                ?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header chat-header">
                    <?php
                    if (isset($_GET['cliente'])) {
                        $clienteId = intval($_GET['cliente']);
                        $clienteResult = $conexion->query("SELECT * FROM usuario WHERE idCliente = $clienteId");
                        if ($clienteRow = $clienteResult->fetch_assoc()) {
                            echo $clienteRow['nomCliente'] . ' ' . $clienteRow['apeCliente'] . ' (Cliente)';
                        }
                    } else {
                        echo 'Chat con Cliente';
                    }
                    ?>
                </div>
            
                <div class="card-body chat-box" id="chat-box">
                    <!-- Los mensajes se cargarán aquí -->
                </div>
                <div class="card-footer">
                    <form id="chat-form" enctype="multipart/form-data">
                        <div class="input-group">
                            <input type="hidden" id="idCliente" value="<?php echo isset($_GET['cliente']) ? $_GET['cliente'] : ''; ?>">
                            <input type="hidden" id="idAdmin" value="1"> <!-- Suponemos que el ID del administrador está guardado en la sesión o en una variable -->
                            <input type="text" id="mensaje" class="form-control" placeholder="Escribe tu mensaje..." autocomplete="off">
                            <input type="file" id="foto" class="d-none" name="foto">
                            <label for="foto" class="btn btn-secondary"><i class="bi bi-camera"></i></label>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    const idCliente = $('#idCliente').val();
    const idAdmin = $('#idAdmin').val();
    
    function loadMessages() {
        $.ajax({
            url: 'cargar_mensajes.php',
            type: 'GET',
            data: { idCliente: idCliente, idAdmin: idAdmin },
            success: function(response) {
                $('#chat-box').html(response);
            }
        });
    }
    
    $('#chat-form').submit(function(e) {
        e.preventDefault();
        const mensaje = $('#mensaje').val();
        const formData = new FormData(this);
        formData.append('idCliente', idCliente);
        formData.append('idAdmin', idAdmin);
        formData.append('remitente', 'admin');
        if (mensaje.trim() != '' || $('#foto')[0].files.length > 0) {
            $.ajax({
                url: 'enviar_mensaje.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#mensaje').val('');
                    $('#foto').val('');
                    loadMessages();
                }
            });
        }
    });
    
    setInterval(loadMessages, 1000);
});


</script>

</body>
</html>
