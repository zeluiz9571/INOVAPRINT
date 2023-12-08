<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agendamento.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="../img/logo_branco.png">

<!-- -------------------------------------------------- -->
<?php
include('header.php')
?>

</head>
<body>
        <div class="login-div">
            <a href='../codigo/index.php'>
            </a>
            <h1 id='login-title' style="padding: 3%;">CONTATO</h1>
            <form action="registre.php" method="POST">
            <div class="form-group">
                <label for="email">Nome completo:</label>
                <input type="text" name="nome" placeholder="Nome completo" required>
                </div>
                <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                <label for="email">Sua mensagem:</label>
                <input type="text" name="mensagem" placeholder="Escreva aqui sua mensagem" required>
                </div>
                <button id='submit-btn' name="submit" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>




<!-- -------------------------------------------------- -->
<?php
include('footer.php')
?>