<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Importación de librerias-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="shortcut icon" href="../imagen/Header/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/headerr.css" />
  <link rel="stylesheet" href="../css/pie.css" />
  <link rel="stylesheet" href="../css/maleta.css" />
  <title>¿Qué puedo llevar en mi maleta?</title>
</head>

<body>
  <!--Inicio header-->
  <?php
  include ("header.php");
  ?>

<!--Fin header-->   
  <div class="back">
    <img src="../imagen/maleta/maleta2.png" alt="">
</div>
<div class="titulo">
    <p>¿Qué puedo llevar en mi maleta?</p>
</div>
  <div class="container-fluid bg-white p-4 border border-black border-1 w-25 my-3 text-center rounded-4" id="tipos">
    <p class="my-auto fs-5 my-3">Tipos de equipaje:</p>
  </div>
  <!---->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-6 border border-black border-1 w-25 bg-white rounded-4 text-center p-2 mx-auto">
        <p class="text-center fs-5"><b>Artículo personal</b></p>
        <img src="../imagen/maleta/articulo personal.png" alt="" class="w-75 ">
        <p>Puede ser una cartera, morral, pañalera, un bolso para llevar un portátil o un paquete.</p>
        <ul>
          <li>Medidas máximas: 45 x 35 x 25 cm (alto, largo y ancho).</li>
          <li>Asegúrate que puedas ubicarlo debajo del asiento delantero.</li>
          <li>En todas nuestras tarifas podrás llevar gratis un artículo personal.</li>
        </ul>
      </div>
      <!---->
      <div class="col-12 col-lg-6 border border-black border-1 w-25 bg-white rounded-4 text-center p-2 mx-auto">
        <p class="text-center fs-5"><b>Equipaje de mano</b></p>
        <img src="../imagen/maleta/equipaje de mano.png" alt="" class="w-75 my-5">
        <p>Puedes llevarlo contigo en la cabina del avión y ubicarlo en el compartimiento superior.</p>
        <ul>
          <li>Medidas máximas: 55 x 35 x 25 cm (alto, largo y ancho), incluyendo ruedas y manijas.</li>
          <li>
            Peso máximo: 10 kg. Si tu equipaje de mano no cumple con las condiciones, deberá registrarse como equipaje de bodega.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container-fluid border border-black border-1 my-5 w-50 bg-white rounded-4 text-center" id="equipaje">
    <div class="row">
      <div class="col-12 col-lg-6 my-auto"><img src="../imagen/maleta/equipaje de bodega.png" alt="" class="w-75"></div>
      <div class="col-12 col-lg-6 my-auto p-3">
        <h4>Equipaje de bodega</h4>
        <p class="">Regístralo en el counter del aeropuerto antes de ir a la sala de abordaje.</p>
        <ul>
          <li>Medidas máximas: no debe exceder los 158 cm de dimensión total (largo + ancho + alto).</li>
          <li>Peso máximo: 23 kg en Clase económica y 32 kg en Clase ejecutiva.</li>
        </ul>
      </div>
    </div>
  </div>
  <!---->
  <div class="container-fluid bg-white p-4 border border-black border-1 w-50 my-3 text-center rounded-4" id="tipos">
    <p class="my-auto fs-5">Objetos en el equipaje:</p>
  </div>
<div class="container-fluid mt-5">
  <div class="row w-75  rounded-4 mx-auto" id="liquidos">
    <div class="col-lg-6 col-12 text-white ps-5 py-0 ">
      <h4 class="text-center">¿Puedo llevar líquidos en mi equipaje de mano?</h4>
      <p class="">En tu equipaje de mano está permitido llevar líquidos en envases que no superen los 100 ml. Deberán ir dentro de una bolsa de plástico transparente con cierre adhesivo o cremallera cuya capacidad máxima sea 1 litro.</p>
      <p>Estos no deben superar las medidas establecidas de 100 ml por producto y 1 litro en el total de todos los productos.</p>
      <ul>
        <li>Geles</li>
        <li>Aerosoles</li>
        <li >Desinfectante de manos</li>
      </ul>
    </div>
    <div class="col-lg-6 col-12 p-0 text-center"->
      <img src="../imagen/maleta/liquidos_en_equipaje.png" alt="" class="w-75 float-end rounded-4 ms-0">
    </div>
  </div>
</div>
<div class="container-fluid my-5" id="restringidos">
  <div class="row w-75 bg-white mx-auto my-3 border border-black border-1 p-3 rounded-4">
    <h5 class="fs-3">¿Que articulos son restringidos en mi equipaje?</h5>
    <div class="col-12 col-lg-6 p-0">
      <ul>
        <li>Aerosoles inflamables</li>
        <li>Armas eléctricas (taser)</li>
        <li>Baterías extraíbles o baterías portátiles</li>
        <li>Bebidas alcohólicas</li>
        <li>Botellas de oxígeno llenas (pipetas)</li>
        <li>Combustibles</li>
        <li>Dispositivos de oxígeno líquido</li>
        <li>Elementos con baterías externas</li>
        <li>Elementos discapacitadores</li>
        <li>Equipos electrónicos dañados</li>
      </ul>
    </div>
    <div class="col-12 col-lg-6 p-0">
      <ul>
        <li>Fuegos artificiales</li>
        <li>Maletines, cajas y sacos de seguridad</li>
        <li>Pinturas</li>
        <li>Tanques</li>
        <li>Vehículos impulsados por baterías externas </li>
        <li>Artículos para niños</li>
        <li>Equipo motorizado</li>
        <li>MacBook Pro</li>
        <li>Oxígeno</li>
        <li>Repelente</li>
      </ul>
    </div>
  </div>
</div>
<!---->
<div class="container-fluid" id="restringidos">
  <div class="row w-75 bg-white mx-auto my-3 border border-black border-1 p-3 rounded-4">
    <h5 class="fs-3">¿Que articulos necesitan aprobacion para ir en el equipaje?</h5>
    <div class="col-12 col-lg-6 p-0">
      <ul>
        <li>Ayudas motrices accionadas</li>
        <li>Baterías de litio de repuesto</li>
        <li>Baterías de ion litio (recargables) </li>
        <li>Baterías de metal de litio (no recargables) </li>
        <li>Barómetros o termómetros de mercurio para usos meteorológicos </li>
        <li>Dispositivos accionados con pilas o baterías de litio (PED)</li>
        <li>Dispositivos de seguridad autoinflable con cartuchos pequeños </li>
      </ul>
    </div>
    <div class="col-12 col-lg-6 p-0">
      <ul>
<li>Chaleco salvavidas</li>
<li>Otros dispositivos permitidos</li>
<li>Drones</li>
<li>Equipo de supervisión de agentes químicos</li>
<li>Hielo seco</li>
<li>Hornillos para acampada y contenedores de combustible</li>
<li>Mochila de rescate para avalancha </li>
<li>Munición embalada en forma segura </li>
      </ul>
    </div>
  </div>
</div>
<!---->
<div class="container-fluid mt-5">
  <div class="row w-75  rounded-4 mx-auto" id="liquidos">
    <div class="col-lg-6 col-12 p-0 text-center"->
      <img src="../imagen/maleta/alimentos_en_equipaje.png" alt="" class="w-75 float-start rounded-4 ms-0 h-100">
    </div>
    <div class="col-lg-6 col-12 text-white pe-4 mx-auto my-auto ">
      <h4 class="text-center">¿Puedo llevar alimentos en mi equipaje?</h4>
      <ul>
        <li>Evita llevar alimentos perecederos como vegetales, carnes, frutas o leche. </li>
        <li>Solo podrás llevarlos en cantidades pequeñas y debidamente empacados, únicamente dentro del equipaje de mano.</li>
        <li >Evita llevar alimentos en piezas adicionales sujetas a espacio.</li>
          <li>En el equipaje de bodega o "Stand By" no está permitido llevar alimentos perecederos.</li>
          <li>Verifica en los formularios de aduana, si los alimentos que llevas deben ser declarados.</li>
      </ul>
    </div>
  </div>
</div>
<!---->
<?php
include ("pie.php");
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>