<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">

    <!--Comentario sobre el link para importar la tipografia-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/reservarVuelos1.css" />
    <link rel="stylesheet" href="../css/headerr.css" />
    <link rel="stylesheet" href="../css/pie.css" />
    <title>Reserva de vuelos</title>
  </head>
  <body>
    
  <?php 
include("header-log.php");
// se inicia proceso para poder llamar a los vuelos el cual ese usuario ha reservad
?> 
      <!--Fin header-->   
      

    <!-- Estructura principal de pagina principal -->
    <div class="contenedor">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="3000">
                <img src="../imagen/index/fondo1.png" class="d-block w-100 h-200" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="../imagen/index/fondo2.png" class="d-block w-100 h-200" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="../imagen/index/fondo4.png" class="d-block w-100 h-200" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button"  data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    
            <div class="texto-superpuesto">
                <p>Reserva</p>
            </div>
    </div>
    <div class="container-fluid my-5">
      <h2 class="text-center">Reservas realizadas anteriormente</h2>
    </div>
    <?php
     $inc1 = include("conex.php");
     if ($inc1){
       $select = "SELECT * FROM asientos where idCliente='$idCliente'";
       $query = mysqli_query($conexion,$select);
       if ($query){
         while ($row =$query->fetch_array()){
           $idCliente1 = $row['idCliente'];
           $idVuelo = $row['idVuelo'];
           $destino = $row['destino'];
           $A1 = $row['A1'];
           $A2 = $row['A2'];
           $A3 = $row['A3'];
           $A4 = $row['A4'];
           $A5 = $row['A5'];
           $A6 = $row['A6'];
           $inc3 = include("conex.php");
           if ($conexion){
            $selectVuelo = "SELECT * FROM vuelo where idVuelo='$idVuelo'";
            $query2 = mysqli_query($conexion,$selectVuelo);
            if ($query2){
              while($row1 = $query2->fetch_array()){
                $destino=$row1['destino'];
                $fechaSalida=$row1['fechaSalida'];
                $fechaEntrada=$row1['fechaEntrada'];
                $precio=$row1['precio'];
              }
            }
           }
           function asiento($num){
             if ($num == "ocupado" ){
           echo "btn-success";
             }else{
              echo "btn-light";
             }
           }

           ?>
               <div class="container-fluid">
      <div class="row border border-black border-1 rounded-4 w-100 mx-auto" >
      <div class="col-12">
        <div class="row">
          <div class="col-3"><p>Pais: <?php echo $destino?></p></div>
          <div class="col-3"><p>fecha de entrada: <?php echo $fechaEntrada?></p></div>
          <div class="col-3"><p>Fecha de salida: <?php echo $fechaSalida?></p></div>
          <div class="col-3"><p>Precio: <?php echo $precio?></p></div>
        </div>
      </div>  
      <div class="col-12 text-center">
        <button type="button" class="btn <?php asiento($A1)?>">A1</button>
        <button type="button" class="btn <?php asiento($A2)?>">A2</button>
        <button type="button" class="btn <?php asiento($A3)?>">A3</button>
        <button type="button" class="btn <?php asiento($A4)?>">A4</button>
        <button type="button" class="btn <?php asiento($A5)?>">A5</button>
        <button type="button" class="btn <?php asiento($A6)?>">A6</button>

        </div>
      </div>
    </div>
           <?php
         }
       }
     }
    
    ?>

 <?php
include ("pie.php")
?>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
</html>
