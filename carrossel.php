<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carrossel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Titulo</title>
</head>
<body>
<div id="carouselPrincipal" class="carousel slide carousel-fade" data-bs-ride="carousel">

<div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Img/IdosoModerno.jpg" class="d-block w-100" alt="Idoso usando aplicativo">

            <!-- Texto do banner -->
            <div class="carousel-caption text-left textoBanner">
                <h1>FAÇA JÁ O DOWNLOAD! </h1>
                <div class="ajs">
                <h3 class="inlineIcone"><a href=""><img src="Img/googlePlay.png" style="width: 150px;" alt="Google Play"></a></h3>
                <h3 class="inlineIcone"><a href=""><img src="Img/appleStore.png" style="width: 150px;" alt="Apple Store"></a>
                </div>
                <p class="subTexto">Controle sua Glicemia, Controle seu Horário, Controle-se. </p>
            </div>
        </div>

        <div class="carousel-item">
        <img src="Img/maeFilha.jpg" class="d-block w-100" alt="Pai e filho usando aplicativo">
        <div class="carousel-caption text-left textoBanner">
                <h1>FAÇA JÁ O DOWNLOAD!</h1>
                <div class="ajs">
                    <h3 class="inlineIcone "><a href=""><img src="Img/googlePlay.png" style="width: 150px;" alt="Google Play"></a></h3>
                    <h3 class="inlineIcone"><a href=""><img src="Img/appleStore.png" style="width: 150px;" alt="Apple Store"></a>
                </div>


                <p class="subTexto">Controle sua Glicemia, Controle seu Horário, Controle-se. </p>
            </div>
        </div>
</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselPrincipal" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselPrincipal" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>