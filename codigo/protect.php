<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Você nao esta logado<p><a href=\"login.php\">Entrar</a></p>");
}