<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/d-uem.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../main/style.css">
    <title>Galería Volleyball femenino UEM</title>
</head>

<body>
<?php require '../main/header.php'?>
   
    <!-- GALERIA -->
    <div class="galeria gal1">
        <div class="columnaizq">
            <h1>Jornada 1</h1>
            <h2>UEM vs Politécnica</h2>
            <h3>10-12-2020</h3>
        </div>
        <div class="columnader">
            <div id="carouselJ1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../img/volleyF/J1/1.jpg">
                    </div>
                    <div class="item">
                        <img src="../img/volleyF/J1/2.jpg" loading="lazy">
                    </div>
                    <div class="item">
                        <img src="../img/volleyF/J1/3.jpg" loading="lazy">
                    </div>
                </div>
                <a class="left carousel-control" href="#carouselJ1" data-slide="prev" style="background:none !important">
                    <span class="fa-solid fa-angles-left slideizq"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carouselJ1" data-slide="next" style="background:none !important">
                    <span class="fa-solid fa-angles-right slideder"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="galeria">
        <div class="columnaizq">
            <h1>Jornada 2</h1>
            <h2>UEM vs Autónoma</h2>
            <h3>28-2-2021</h3>
        </div>
        <div class="columnader">
            <div id="carouselJ2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../img/volleyF/J2/1.jpg">
                    </div>
                    <div class="item">
                        <img src="../img/volleyF/J2/2.jpg" loading="lazy">
                    </div>
                    <div class="item">
                        <img src="../img/volleyF/J2/3.jpg" loading="lazy">
                    </div>
                </div>
                <a class="left carousel-control" href="#carouselJ2" data-slide="prev" style="background:none !important">
                    <span class="fa-solid fa-angles-left slideizq"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carouselJ2" data-slide="next" style="background:none !important">
                    <span class="fa-solid fa-angles-right slideder"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
</body>
<footer>
    <h1>Ignacio y Samuel, 2022</h1>
</footer>
</html>