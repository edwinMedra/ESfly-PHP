<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <style>
        .chat-list {
            height: 400px;
            overflow-y: scroll;
        }
        .chat-box {
            height: 300px;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group chat-list">
                <?php
                include("conex.php");
                $result = $conexion->query("SELECT * FROM administradores");
                while ($row = $result->fetch_assoc()) {
                    $foto = $row['foto'] ? 'data:image/jpeg;base64,' . base64_encode($row['foto']) : 'https://cdn-icons-png.flaticon.com/512/9187/9187604.png';
                    echo '<a href="?admin=' . $row['idAdmin'] . '" class="list-group-item list-group-item-action">';
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['foto']) . '" class="rounded-circle me-2" width="30" height="30">';
                    echo $row['nomAdmin'] . ' ' . $row['apeAdmin'] . '<br>';
                    echo '<small>' . $row['cargo'] . '</small>';
                    echo '</a>';
                }
                ?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header chat-header">
                    <?php
                    if (isset($_GET['admin'])) {
                        $adminId = intval($_GET['admin']);
                        $adminResult = $conexion->query("SELECT * FROM administradores WHERE idAdmin = $adminId");
                        if ($adminRow = $adminResult->fetch_assoc()) {
                            echo $adminRow['nomAdmin'] . ' ' . $adminRow['apeAdmin'] . ' (Administrador)';
                        }
                    } else {
                        echo 'Chat con Administrador';
                    }
                    ?>
                </div>
                <div class="card-body chat-box" id="chat-box">
                    <!-- Los mensajes se cargarán aquí -->
                </div>
                <div class="card-footer">
                    <form id="chat-form">
                        <div class="input-group">
                            <input type="hidden" id="idAdmin" value="<?php echo isset($_GET['admin']) ? $_GET['admin'] : ''; ?>">
                            <input type="hidden" id="idCliente" value="1"> <!-- Suponemos que el ID del cliente está guardado en la sesión o en una variable -->
                            <input type="text" id="mensaje" class="form-control" placeholder="Escribe tu mensaje...">
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
    const idAdmin = $('#idAdmin').val();
    const idCliente = $('#idCliente').val();
    
    function loadMessages() {
        $.ajax({
            url: 'cargar_mensajes.php',
            type: 'GET',
            data: { idAdmin: idAdmin, idCliente: idCliente },
            success: function(response) {
                $('#chat-box').html(response);
            }
        });
    }
    
    $('#chat-form').submit(function(e) {
        e.preventDefault();
        const mensaje = $('#mensaje').val();
        if (mensaje.trim() != '') {
            $.ajax({
                url: 'enviar_mensaje.php',
                type: 'POST',
                data: {
                    mensaje: mensaje,
                    idAdmin: idAdmin,
                    idCliente: idCliente,
                    remitente: 'cliente'
                },
                success: function(response) {
                    $('#mensaje').val('');
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
