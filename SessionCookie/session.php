<?php
session_start();

    $_SESSION['nome'] = 'Nicolli';
    $_SESSION['idade'] = '16';
    $_SESSION['altura'] = '1.65';
    $_SESSION['email'] = 'nicolli@pugles.com';
    $_SESSION['horario-login'] = time();
echo 'Variável criada com sucesso!';
?>