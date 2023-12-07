<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InovaPrint</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="header1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">

</head>
<body>
<header>
<div class='main-header'>
  <a href="index.php">
<img src='../img/logo_branco.png' id='branco-logo'>
  </a>
<nav class="navbar navbar-expand-lg bg-body-tertiary" id='nav'>

  <div class="container-fluid">

    <div class='navbar'>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contato</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="produtos.php">Produtos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="sobre.php">Sobre</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Dúvidas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Aluguel</a>
            </li>
            <form class='form-busca' role="search">
            <input class="form-control me-2" id='busca' type="search" placeholder="Search" aria-label="Search">
            <button type="submit"><img src="../img/lupa.png"></button>
        </form>
        
        </ul>
        </div>
        
    </div>
<!-- Default dropstart button -->
<div class="btn-group dropstart">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Menu
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Conta</a></li>
    <li><a class="dropdown-item" href="#">Carrinho</a></li>
</div>


  </div>
</nav>
</div>

<div class='sub-navbar'>
<img src="../img/logo.png">
</div>
</header>

</body>
</html>