<?php
    session_start();
    session_unset();
    session_destroy();
    // Limpa cookies
    setcookie("login", "", time() - 3600, "/");
    setcookie("senha", "", time() - 3600, "/");

    // salvar_cookie.php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Dados do usuário a serem salvos nos cookies
        $user = $_POST['user'] ?? 'Usuário';
        $email = $_POST['email'] ?? 'email@example.com';
        // Define os cookies por 30 dias
        setcookie("login", $user, time() + (7 * 24 * 60 * 60), "/");
        setcookie("senha", $email, time() + (7 * 24 * 60 * 60), "/");

        // Redireciona para a página de login
        header("Location: login.php");
        exit();
    }
?>