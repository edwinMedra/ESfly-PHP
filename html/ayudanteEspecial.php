<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/ayudanteEspecial.css">
    <link rel="stylesheet" href="../css/headerr.css">
    <link rel="stylesheet" href="../css/pie.css">
    <!--Fin tipografia-->

    <title>Informacion de Ayudante especial</title>
</head>
<body>

    <div class="container mt-5">
        <div class="card p-3">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="../imagen/AsistentesDisponibles/maria.png" class="img-fluid " alt="Asistente">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"> María López</h5>
                        <form>
                            <div class="form-group mt-5">
                                <label for=""><b>Lugar de encuentro</b></label>
                                <input type="text" class="form-control mt-3" id="" placeholder="Escribe el lugar de encuentro que tendrán.." required>
                            </div>
                            <div class="form-group mt-3">
                                <label for=""><b>Hora de encuentro</b></label>
                                <input type="time" class="form-control mt-3" id="" placeholder="Escribe la fecha." required>
                            </div>
                            <div class="form-group mt-3">
                                <label for=""><b>Día de encuentro</b></label>
                                <input type="date" class="form-control mt-3" id="" placeholder="Escribe la fecha.." required>
                            </div>
                            <div class="form-group mt-3">
                                <label for=""><b>Característica particular del ayudante</b></label>
                                <input type="text" class="form-control mt-3" id="" placeholder="Escribe una característica particular que poseas.." required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">¡Listo!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
