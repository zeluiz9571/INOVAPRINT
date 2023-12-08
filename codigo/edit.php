<?php
include_once('conexao.php');

if(!isset($_SESSION)) {
    session_start();
}

    if(!empty($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $mysqli->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
            }
        }
        else
        {
        }
    }
    else
    {
    }
?>


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
<body>
    <div class="main-div">
        <div class="images-div">
            <img src='../img/login-front.png'>
        </div>
        
        <div class="login-div">
            <a href='../codigo/index.php'>
            <img id='login-logo' src="../img/logo.png">
            </a>
            <h1 id='login-title'>Editar Informações</h1>
            <form action="saveEdit.php" method="POST">
            <div class="form-group">
                <label for="email">Nome completo:</label>
                <input type="text" name="nome" placeholder="Nome completo" value='<?php echo $_SESSION['nome']; ?>' required>
                </div>
                <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Email" value='<?php echo $_SESSION['email']; ?>' required>
                </div>
                <div class="form-group">
                <label for="email">Senha:</label>
                <input type="text" name="senha" placeholder="Senha" value='<?php echo $_SESSION['senha']; ?>' required>
                </div>
                <div class="form-group">
                </div>
                <button id='submit-btn' name="update" type="submit">Editar</button>
            </form>
        </div>
    </div>
</body>
</html>




<!-- -------------------------------------------------- -->
<?php
include('footer.php')
?>