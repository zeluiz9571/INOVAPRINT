<?php
    include('conexao.php');

    if( isset($_POST['email']) || isset($_POST['senha'])) {
        if (strlen($_POST['email']) == 0) {

            echo '<script>alert("Preencha seu email");</script>';
            

        } else if(strlen($_POST['senha']) == 0){

            echo '<script>alert("Preencha sua senha");</script>';

        } else {

            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);


            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {

                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header('location:conta.php');

            } else {
                echo "<script>alert('Falha ao logar! Email ou senha incorretos');</script>";
            }
        }
    }

?>




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