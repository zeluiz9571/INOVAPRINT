<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("<p align='center'>Você não está logado</p><p align='center'><a href=\"login.php\">Entrar</a></p>");
}