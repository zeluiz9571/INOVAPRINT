<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="../img/logo_branco.png">

</head>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/conexao.php";
    
    $sql = sprintf("SELECT * FROM usuarios
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $usuarios = $result->fetch_assoc();

    
    if ($usuarios) {
        
        if (password_verify($_POST["senha"], $usuarios["senha"])) {
            die("LOGIN SUCCESFULL");
        }
    }

}



?>
<body>

    <div class="main-div">
        <div class="images-div">
            <img src='../img/login-front.png'>
        </div>
        <div class="login-div">
            <a href='../codigo/index.php'>
            <img id='login-logo' src="../img/logo.png">
            </a>
            <h1 id='login-title'>LOGIN</h1>
            <form method="POST" action="login.php">
                <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Email" id="email">
                </div>
                <div class="form-group">
                <label for="email">Senha:</label>
                <input type="password" name="senha" placeholder="Senha" id="senha">
                </div>
                <button id='submit-btn' name="submit" type="submit">Entrar</button>
            </form>
            <div id='msg-login'>
                <p>Não tem uma conta?</p> <a href='registre.php'>Registre-se</a>
            </div>
        </div>
    </div>
</body>
</html>












<!-- -------------------------------------------------- -->
<?php
include('footer.php')
?>