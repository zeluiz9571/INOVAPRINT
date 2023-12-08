<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registre1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="../img/logo_branco.png">

</head>

<?php
include_once('conexao.php');

    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome, email, senha) 
        VALUES('$nome', '$email', '$senha')");

        header("location:login.php");

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
            <h1 id='login-title'>REGISTRE-SE</h1>
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
                <label for="email">Senha:</label>
                <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <div class="form-group">
                <label for="email">Confirmar Senha:</label>
                <input type="password" placeholder="Confirmar Senha" required>
                </div>
                <button id='submit-btn' name="submit" type="submit">Entrar</button>
            </form>
            <div id='msg-login'>
                <p>Já tem uma conta?</p>
                <a href='login.php'>Faça Login</a>
            </div>
        </div>
    </div>
</body>
</html>




<!-- -------------------------------------------------- -->
<?php
include('footer.php')
?>