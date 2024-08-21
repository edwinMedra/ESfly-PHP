<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Críticas y Sugerencias</title>

    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/headerr.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <style>

        body{
            font-family: "Be Vietnam Pro";
        }
        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .user-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px;
        }
        .user-info img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-bottom: 5px; 
        }
        .user-info h5 {
            margin-bottom: 5px; 
        }
        .user-info .date {
            color: lightgray;
            font-size: 0.9em;
        }
        .rating {
            margin-bottom: 10px;
        }
        .fa-star.checked {
            color: gold;
        }
        .rating span {
            cursor: pointer;
        }
        .like-button {
            cursor: pointer;
            color: gray;
            font-size: 1.5em;
        }
        .like-button.liked {
            color: red;
        }
    </style>
 
</head>



<body>
<?php 
include("header-log.php");
?>
    <div class="container mt-5">
        <!-- Formulario para agregar críticas -->
            
    <div class="mt-2 p-5" id="espacio"> </div>   
        <div class="mb-4 mt-5">
            <h3 class="card-title text-center mt-5 mb-5"><img src="../imagen/header/favicon.png" class="img-fluid me-3" width="35"></a> Comparte tu experiencia en ESfly: </h3>
            <form id="reviewForm">
                <div class="form-group">
                    <label for="userName">Nombre</label>
                    <input type="text" class="form-control mb-3" id="userName" disabled readonly value="<?php echo $nombreCompleto ?>">
                </div>

                <div class="form-group">
                    <label for="reviewText">Crítica</label>
                    <textarea class="form-control mb-3" id="reviewText" rows="3" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label>Calificación</label>
                    <div id="rating" class="rating">
                        <span class="fa fa-star" data-value="1"></span>
                        <span class="fa fa-star" data-value="2"></span>
                        <span class="fa fa-star" data-value="3"></span>
                        <span class="fa fa-star" data-value="4"></span>
                        <span class="fa fa-star" data-value="5"></span>
                    </div>
                    <input type="hidden" id="ratingValue" value="0">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Agregar Comentario</button>
            </form>
        </div>

         <div class=" texto-titulo container mt-5">
            <h5 id="search-flight-title">Mis comentarios ></h5>
        </div>

        

        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="user-info">
                        <?php echo'<img src="data:image/jpg;base64,' . base64_encode($foto) . '" class="rounded-circle my-auto border border-1 border-black mx-1" id="lupa" alt="" height="35px" width="35px" style="object-fit: cover;">' ?>
                        <div>
                            <?php echo' <h5 class="d-flex align-items-center">' . htmlspecialchars($nombreCompleto) .' </h5>';?>
                            <!-- Fecha de publicación -->
                            <p class="date">20 de Agosto, 2024</p> 
                        </div>
                    </div>
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p class="card-text">¡Este lugar es increíble! La atención es excelente y el ambiente es muy acogedor.</p>
                    <div class="d-flex align-items-center">
                        <span class="fa fa-heart like-button" data-likes="0"></span>
                        <span class="ml-2" data-likes="0">0 Likes</span>
                    </div>
                </div>
            </div>
        </div>


        <div class=" texto-titulo container mt-5">
            <h5 id="search-flight-title">Todos los comentario ></h5>
        </div>


        <!-- Contenedor de tarjetas -->
        <div id="reviewsContainer" class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="user-info">
                            <img src="user1.jpg" alt="Usuario 1">
                            <div>
                                <h5>Juan Pérez</h5>
                                <p class="date">20 de Agosto, 2024</p> 
                                <!-- Fecha de publicación -->
                            </div>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p class="card-text">¡Este lugar es increíble! La atención es excelente y el ambiente es muy acogedor.</p>
                        <div class="d-flex align-items-center">
                            <span class="fa fa-heart like-button" data-likes="0"></span>
                            <span class="ml-2" data-likes="0">0 Likes</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="user-info">
                            <img src="user2.jpg" alt="Usuario 2">
                            <div>
                                <h5>María López</h5>
                                <p class="date">18 de Agosto, 2024</p> 
                                <!-- Fecha de publicación -->
                            </div>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-half-o"></span>
                        </div>
                        <p class="card-text">La comida es deliciosa, pero el servicio podría mejorar un poco.</p>
                        <div class="d-flex align-items-center">
                            <span class="fa fa-heart like-button" data-likes="0"></span>
                            <span class="ml-2" data-likes="0">0 Likes</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="user-info">
                            <img src="user3.jpg" alt="Usuario 3">
                            <div>
                                <h5>Carlos García</h5>
                                <p class="date">15 de Agosto, 2024</p> <!-- Fecha de publicación -->
                            </div>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <p class="card-text">¡Un lugar fantástico! Recomiendo probar los postres, son exquisitos.</p>
                        <div class="d-flex align-items-center">
                            <span class="fa fa-heart like-button" data-likes="0"></span>
                            <span class="ml-2" data-likes="0">0 Likes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ESRELLAS Y LIKES -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Funcionalidad de estrellas
            const ratingStars = document.querySelectorAll('#rating .fa-star');
            let selectedRating = 0;

            ratingStars.forEach(star => {
                star.addEventListener('click', function () {
                    selectedRating = this.getAttribute('data-value');
                    ratingStars.forEach(star => {
                        if (star.getAttribute('data-value') <= selectedRating) {
                            star.classList.add('checked');
                        } else {
                            star.classList.remove('checked');
                        }
                    });
                    document.getElementById('ratingValue').value = selectedRating;
                });
            });

            // Agregar nueva crítica
            document.getElementById('reviewForm').addEventListener('submit', function (e) {
                e.preventDefault();
                
                const userName = document.getElementById('userName').value;
                const reviewText = document.getElementById('reviewText').value;
                const ratingValue = document.getElementById('ratingValue').value;
                
                // Obtener fecha actual
                const date = new Date().toLocaleDateString('es-ES', {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric'
                });

                const reviewsContainer = document.getElementById('reviewsContainer');
                const newCard = document.createElement('div');
                newCard.className = 'col-md-4 mb-4';
                newCard.innerHTML = `
                    <div class="card">
                        <div class="card-body">
                            <div class="user-info">
                                <img src="${userImage}" alt="${userName}">
                                <div>
                                    <h5>${userName}</h5>
                                    <p class="date">${date}</p> 
                                </div>
                            </div>
                            <div class="rating">
                                ${Array.from({ length: 5 }, (_, i) => i + 1).map(i =>
                                    `<span class="fa fa-star ${i <= ratingValue ? 'checked' : ''}"></span>`
                                ).join('')}
                            </div>
                            <p class="card-text">${reviewText}</p>
                            <div class="d-flex align-items-center">
                                <span class="fa fa-heart like-button" data-likes="0"></span>
                                <span class="ml-2" data-likes="0">0 Likes</span>
                            </div>
                        </div>
                    </div>
                `;
                reviewsContainer.appendChild(newCard);
                
                // Reset form
                document.getElementById('reviewForm').reset();
            });

            // Funcionalidad de "likes"
            document.getElementById('reviewsContainer').addEventListener('click', function (e) {
                if (e.target.classList.contains('like-button')) {
                    const likeButton = e.target;
                    const likeCountSpan = likeButton.nextElementSibling;
                    let likes = parseInt(likeButton.getAttribute('data-likes'), 10);

                    if (likeButton.classList.contains('liked')) {
                        likeButton.classList.remove('liked');
                        likeButton.style.color = 'gray';
                        likes--;
                    } else {
                        likeButton.classList.add('liked');
                        likeButton.style.color = 'red';
                        likes++;
                    }

                    likeButton.setAttribute('data-likes', likes);
                    likeCountSpan.textContent = `${likes} Likes`;
                }
            });
        });
    </script>

     <!-- fuente para el like y las estrellas -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

     <!-- Bootstrap JS -->



<div class="mt-2 p-5" id="espacio"> </div> 
<?php include("pie.php");?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</html>