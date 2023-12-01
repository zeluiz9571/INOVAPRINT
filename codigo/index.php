<?php
    include_once('header.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="main.css">

</head>
<body>
  
</body>
</html>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/Back 1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/daicw.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/carrossel3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div id='principal-div'>
  <div id='main-div'>
    <h1 id='main-card-title'>Produtos em Destaque</h1>
    <div id="main-cards">
      <div class="card" style="width: 18rem;">
        <img src="../img/Creality Ender 3 V2.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Impressora 3D Creality Ender 3 V2</h5>
          <a href="#" class="btn btn-primary" id='card-btn'>R$2.899,00</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="../img/Dremel_Digilab_3D40_3D_Printer.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Impressora 3D Dremel Digilab 3D40 3D Printer - EDU Bundle</h5>
          <a href="#" class="btn btn-primary" id='card-btn'>R$9.799,99</a>
        </div>
      </div>
    </div>
    <a href="#" align='right'>Veja mais</a>
  </div>
  <div id='main-img-div'>
    <h1 id='img-text'>IMPRESSORAS 3D</h1>
  </div>
</div>

<div id='sub-main-div'>
  <h1 id='sub-main-title'>Produtos</h1>
  <div id='sub-cards'>
    <a id='prod-link' href="#">
    <div id='prod-card'>
      <img src="../img/Monoprice_Select_Mini_V2.jpeg">
      <p>Monoprice Select Mini V2</p>
    </div>
    </a>
    <a id='prod-link' href="#">
    <div id='prod-card'>
      <img src="../img/Monoprice_Select_Mini_V2.jpeg">
      <p>Monoprice Select Mini V2</p>
    </div>
    </a>
    <a id='prod-link' href="#">
    <div id='prod-card'>
      <img src="../img/Monoprice_Select_Mini_V2.jpeg">
      <p>Monoprice Select Mini V2</p>
    </div>
    </a>
    
  </div>
  <div id='sub-link'>
  <a href="#">Veja Mais</a>
  </div>
</div>
