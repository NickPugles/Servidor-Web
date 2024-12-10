<?php
    session_start();

    if (!isset($_SESSION['login']) and !isset($_SESSION['senha'])){
        header('Location: index.php');
        exit;
    }
    if (!isset)

    if (isset($_POST['logout'])){
        session_destroy();
        setcookie("login", "", time() -3600, '/');
        setcookie("senha", "", time() -3600, '/');
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<a href="logout.php">
    <button>Sair</button>
</a>
    <form method="POST" action="salvar_cookie.php">
        <label for="user">Nome:</label>
        <input type="text" name="user" id="user" required>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Salvar Cookie</button>
    </form>
</body>
</html>