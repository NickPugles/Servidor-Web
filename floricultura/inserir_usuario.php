<?php
include_once('conexao.php');

// Verifica se os dados foram enviados pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $Nome = $_POST['Nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Cria a consulta SQL para inserir os dados na tabela
    $sql = "INSERT INTO usuario (Nome, email, senha) VALUES ('$Nome', '$email', '$senha')";

    // Executa a consulta SQL
    if (mysqli_query($conexao, $sql)) {
        echo "Novo registro inserido com sucesso!";
        // Redireciona para a página de produtos após inserção
        header("Location: produtos_usuario.php");
        exit();
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Inserir Produto</title>
</head>
<body>
<div class="cliente">
    <h1>Adicionar Usuário</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="Nome" placeholder="Adicione o seu Nome" required>
        <label>E-mail:</label>
        <input type="text" name="email" placeholder="Adicione o seu E-mail" required>
        <label>Senha:</label>
        <input type="text" name="senha" placeholder="Adicione a sua Senha" required>
        <button type="submit">Salvar</button>
        
    </form>
    <center><?php echo'<a href="logout.php"><button>Logout</button></a>';?></center>
    </div>