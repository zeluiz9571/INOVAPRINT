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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
        $(function () {
            $("#datepicker").datepicker();
        });
    </script>

<!-- -------------------------------------------------- -->
<?php
include('header.php')
?>

</head>
<body >
        <div class="login-div">
            <a href='../codigo/index.php'>
            </a>
            <h1 id='login-title' style="padding: 3%;">AGENDAMENTO</h1>
            <form action="registre.php" method="POST">
            <div class="form-group">
                <label for="email">Nome completo:</label>
                <input type="text" name="nome" placeholder="Nome completo" required>
                </div>
                <label for="datepicker">SELECIONE UMA DATA:</label>
            <input type="text" id="datepicker">
            <br>
            <br>
            <br>
                <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Email" required>
                <label for="opcoes">Selecione uma opção de serviço:</label>
            <select id="opcoes">
            <option value="opcao1">Alugar máquina</option>
            <option value="opcao2">Fazer agendamento</option>
            </select>
                </div>
                <button id='submit-btn' name="submit" type="submit" style="margin-bottom: 10%;">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>




<!-- -------------------------------------------------- -->
<?php
include('footer.php')
?>