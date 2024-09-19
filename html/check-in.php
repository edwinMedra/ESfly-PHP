<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
  
  <!-- Tipografía y Bootstrap -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;600&display=swap" rel="stylesheet">

  <title>CHECK-IN</title>

  <style>
    body {
      font-family: 'Be Vietnam Pro', sans-serif;
      background-color: #f4f6f9;
      color: #333;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      height: 100%;
    }
    .card img {
      border-radius: 15px 15px 0 0;
      height: 180px;
      object-fit: cover;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
      transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .fs-5 {
      color: #007bff;
    }
    h5 {
      font-weight: 600;
    }
    .card-body p {
      font-size: 0.95rem;
      text-align: justify;
    }
    .row {
      display: flex;
    }
    * {
  padding: 0;
  margin: 0;
}
footer {
  background-color: #273758;
  width: 100%;
}
footer ul {
  list-style: none;
}
footer li{
  margin: 10px 0;
  font-size: 13px;
}
footer i{
  font-size: 14px;
}
footer .logo{
  width: 100px;
}
  </style>
</head>

<body>
<?php
    include("header.php");
    ?>

<div class="container mt-5 ">

<div class="texto-titulo container mt-5 mb-5"></div>
<div class="row g-4">

<div class="col-12 col-md-4 mt-5 mb-5">
    <div class="card h-100">
      <img src="../imagen/check-in/check.png" class="card-img-top" alt="Check-in Rápido">
      <div class="card-body text-center">
        <h5 class="card-title mb-5"><b>Realiza tu Check-in</b></h5>
        <p class="card-text">Haz tu check-in de manera rápida y sencilla en línea. Evita largas filas en el aeropuerto y obtén tu pase de abordar con anticipación.</p>
        <p class="card-text">El check-in en línea te permite seleccionar tu asiento con mayor comodidad y asegurarte de que todo esté en orden antes de llegar al aeropuerto.</p>
        <p class="card-text mb-5">No olvides tener a la mano tu código de reserva y documento de identidad para completar el proceso. ¡Tu viaje comienza aquí!</p>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-8 mt-5 mb-5">
    <div class="card h-100">
      <div class="card-body text-center">
        <h5 class="card-title mb-3 mt-5"><b>¿Qué es el Check-in?</b></h5>
        <p class="card-text">El check-in es el proceso que confirma tu abordaje en un vuelo. Te permite obtener tu pase de abordar y te asigna un asiento en cabina. Este procedimiento asegura que tu asiento esté reservado y preparado para tu llegada. Además, es tu garantía de que toda la documentación requerida ha sido revisada.</p>
        <p class="card-text mb-5">Realiza el check-in en línea con la mayor anticipación posible para evitar contratiempos en el aeropuerto.</p>

        <h5 class="card-title mt-4 mb-3"><b>Consejos para tu Viaje</b></h5>
        <p class="card-text ">Prepara tu viaje con estos consejos útiles: revisa las restricciones de equipaje, llega temprano al aeropuerto y lleva una copia de tus documentos importantes. Lleva una batería portátil para tus dispositivos electrónicos, un pequeño kit de emergencia y mantente al tanto de cualquier cambio en tu vuelo.</p>
        <p class="card-text">Sigue estos consejos para una experiencia de viaje más fluida y sin estrés, asegurando que todo esté bajo control antes y durante tu vuelo.</p>
      </div>
    </div>
  </div>
</div>
</div>

  <?php include("pie.php"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
