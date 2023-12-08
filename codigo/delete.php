<?php
if(!isset($_SESSION)) {
    session_start();
}

    if(!empty($_SESSION['id']))
    {
        include_once('conexao.php');

        $id = $_SESSION['id'];

        $sqlSelect = "SELECT *  FROM usuarios WHERE id=$id";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
            $resultDelete = $mysqli->query($sqlDelete);
        }
    }
    session_destroy();
    header('Location: index.php');
   
?>