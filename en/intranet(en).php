<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CULTIGROW</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Roboto:wght@100&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Martian+Mono&family=Roboto:wght@100&display=swap"
    rel="stylesheet">
  <link rel="icon" href="./assets/img/icon.png" type="image">

</head>
<div id="index" class="pagina">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="jumbotron">
            <h1 class="display-4">CULTIGROW</h1>
            <h2>Cultivating futures</h2>
            <hr class="my-4">
            <p>Connecting Technology and Nature, Together in a Unique Botanical Experience.</p>
            <a class="btn btn-primary btn-lg"
              href="../logout.php"
              role="button">GO OUT</a>
            <img>
            <div id="carouselWithIndicators" class="carousel slide" data-bs-ride="carousel">
              <ul class="lista-carousel carousel-indicators">
                <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="2"></li>
              </ul>
              <div class="carousel-inner flex-container">
                <div class="carousel-item active">
                  <img src="./assets/img/cultivo1 (Mediana).jpeg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/cultivo2 (Mediana).jpeg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/cultivo3 (Mediana).jpeg" class="d-block w-100" alt="Slide 3">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselWithIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselWithIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>
            <div class="fondo mx-auto"></div>
          </div>
        </div>
      </div>
    </div>

          <div class="col-xs-12 col-md-4 order-2 order-md-1">
            <div class="footer-copyright-wrapper text-center">
              &copy; CULTIGROW
            </div>