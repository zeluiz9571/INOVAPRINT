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
    <br>
    <div class="title" align="center">
        <h3>Formas de pagamento:</h3>
    </div>
    <div class="content">
       <div class="title-a">
            <br>
            <p align="center">Cartão(crédito e débito)</p>
            <br>
            </div>
            <div class="forma">
                <div class="input-box">
                    <label for="number">Número do cartão</label>
                    <input id="number" name="number" placeholder="Número do cartão" required>
                </div>
                <br>
                <div class="input-box">
                    <label for="date">Data de expiração</label>
                    <input id="number" name="number" placeholder="MM/DD/YYYY" required>
                    <label for="CVC">CVC</label>
                    <input id="number" name="CVC" placeholder="***" required>
                </div>
                <br>
                <div class="input-box">
                    <label for="name">Nome do titular</label>
                    <input id="number" name="name" placeholder="Nome" required>
                </div>
                <br>
                <div class="input-box">
                    <label for="boleto">Boleto</label>
                    <input id="number" name="boleto" placeholder="*******" required>
                </div>
                <br>
                <div class="input-box">
                    <label for="PIX">PIX</label>
                    <input id="number" name="PIX" placeholder="*******" required>
                </div>
        </div>
                <br>
                <div class="option">
                    <p align="center">não tem uma conta?<a href="#">Registre-se</a></p>
                </div>
    </div>
</body>
</html>

<?php
include("footer.php")
?>