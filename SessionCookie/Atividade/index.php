<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="POST">
            <label>Login: </label>
            <input type="text" name="login"> <!--name: define o valor-->
            <br>
            <label>Senha: </label>
            <input type="text" name="senha">
            <br>
            <input type="submit" name="Logout" value="Logout">
            
            
            
            <input type="submit" value="Encerrar">
            <button type="submit">Salvar Cookie</button>
        </form>
    </div>
</body>
</html>

<?php
    require_once "login.php";
    Logout();