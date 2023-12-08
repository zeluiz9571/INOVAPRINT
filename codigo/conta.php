<?php 

include('header.php');

include('protect.php');

if(!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="conta1.css">

</head>
<body>
    <div class='main-div'>
    <h1>Minha conta</h1>
    <h2>Informarções:</h2>
    <p>Nome: <?php echo $_SESSION['nome']; ?></p>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    <div class='senha-div'>
    <p>Senha:</p>
    <p id="senha"><?php echo $_SESSION['senha'];?></p><input type="checkbox" id="mostrarSenha"> 
    
    </div>
    <a href='logout.php'>Sair</a>
    <a href='delete.php'>Deletar conta</a>
    <a href='edit.php'>Editar</a>
    </div>
    

    <script>
    function ocultarSenha() {
      var paragrafo = document.getElementById("senha");
      paragrafo.innerHTML = "*".repeat(paragrafo.innerHTML.length);
    }

    window.addEventListener("load", function() {
      // Sua função será executada quando a janela estiver completamente carregada
      ocultarSenha();
    });

  </script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
      var senhaParagrafo = document.getElementById("senha");
      var mostrarSenhaCheckbox = document.getElementById("mostrarSenha");

      mostrarSenhaCheckbox.addEventListener("change", function() {
        // Alterna entre "text" e "password" com base na marcação do checkbox
        senhaParagrafo.innerHTML = this.checked ? "MinhaSenha123" : "********";
      });
    });
  </script>

</head>

<?php
include('footer.php')
?>

</html>