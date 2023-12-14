<?php
    include_once('conexao.php');

    if(!isset($_SESSION)) {
        session_start();
    }

    if(isset($_POST['update']))
    {
        $id = $_SESSION['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',email='$email'
        WHERE id=$id";
        $result = $mysqli->query($sqlInsert);
        print_r($result);
    }
    
    $id = $_SESSION['id'];

    $sql_code = "SELECT * FROM usuarios WHERE id = '$id' ";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['email'] = $usuario['email'];
                $_SESSION['senha'] = $usuario['senha'];
       
    header('Location: conta.php');


?>