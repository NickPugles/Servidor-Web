<?php

if (isset($_COOKIE['login']) and isset($_COOKIE['senha'])){
    $login = $_COOKIE['login'];
    $senha = $_COOKIE['senha'];
}else{
    $login = "Cookie não definido";
    $senha = "Cookie não definido";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Dados Salvos no Cookie</h1>
    <p><strong>Login: </strong> <?php echo $login; ?></p>
    <p><strong>Senha: </strong> <?php echo $senha; ?></p>
    <a href="login.php">Voltar para o Login</a>
</body>
</html>