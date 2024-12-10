<?php
$name = $_POST["usuario"];
$password = $_POST["senha"];

if ($name === "aluno" && $password === "sesi"){
    echo "<p>Autenticado com sucesso!</p>";
    }
else {
        echo "<p>Não autenticado</p>";
    }
?>