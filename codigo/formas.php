<?php
    include("header.php")
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="formas.css">

</head>
<body>
    <br><br>
    <div class="title" align="center">
        <h3>Formas de pagamento</h3>
    </div>
        <br>
        <p>Cartão(crédito e débito)</p>
        <br>
        <div class="input-box">
            <label for="number">Número do cartão</label>
            <input id="number" name="number" placeholder="Número do cartão" required>
        </div>
        <br>
        <div class="input-box">
            <label for="date">Data de expiração</label>
            <input id="number" name="number" placeholder="MM/DD/YYYY" required>
            <label for="CVC">CVC</label>
            <input id="CVC" name="CVC" placeholder="***" required>
        </div>
        <br>
        <div class="input-box">
            <label for="name">Nome do titular</label>
            <input id="name" name="name" placeholder="Nome" required>
        </div>
        <br>
        <div class="input-box">
            <label for="boleto">Boleto</label>
            <input id="boleto" name="name" placeholder="*******" required>
        </div>
        <br>
        <div class="input-box">
            <label for="PIX">PIX</label>
            <input id="PIX" name="PIX" placeholder="*******" required>
        </div>
        <br>
        <div class="option">
        <p>não tem uma conta?<a href="#">Registre-se</a></p>
        </div>
</body>
</html>

<?php
include("footer.php")
?>