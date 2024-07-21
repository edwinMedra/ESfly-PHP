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
        .preview img {
            max-width: 100px;
            cursor: pointer;
        }
        .list-group-item:hover {
            color: white;
            background-color: #273758;
        }
        .chat-message img {
            max-width: 100px;
            cursor: pointer;
        }
        .message-header {
            color: gray;
            font-size: 0.8em;
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
                    echo '<img src="' . $foto . '" class="rounded-circle me-2" width="30" height="30">';
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
                            <input type="file" id="archivo" class="d-none" name="archivo" accept="image/*,application/pdf">
                            <label for="archivo" class="btn btn-secondary"><i class="bi bi-camera"></i></label>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                    <div class="preview" id="preview">
                        <img id="preview-image" src="#" alt="Vista previa" class="img-thumbnail" style="display:none;">
                        <p id="preview-text" style="display:none;"></p>
                    </div>
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
    
    $('#archivo').change(function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                if (file.type.startsWith('image/')) {
                    $('#preview-image').attr('src', e.target.result).show();
                    $('#preview-text').hide();
                } else {
                    $('#preview-text').text(file.name).show();
                    $('#preview-image').hide();
                }
                $('#preview').show();
            };
            reader.readAsDataURL(file);
        } else {
            $('#preview').hide();
        }
    });

    $('#chat-form').submit(function(e) {
        e.preventDefault();
        const mensaje = $('#mensaje').val();
        const formData = new FormData(this);
        formData.append('mensaje', mensaje);
        formData.append('idAdmin', idAdmin);
        formData.append('idCliente', idCliente);
        formData.append('remitente', 'cliente');
        
        $.ajax({
            url: 'enviar_mensaje.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#mensaje').val('');
                $('#archivo').val('');
                $('#preview').hide();
                loadMessages();
            }
        });
    });

    $('#chat-box').on('click', 'img', function() {
        $(this).toggleClass('img-thumbnail img-fluid');
    });

    setInterval(loadMessages, 1000);
});
</script>
</body>
</html>
