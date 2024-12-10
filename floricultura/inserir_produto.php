<?php
include_once('conexao.php');

// Verifica se os dados foram enviados pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    // Cria a consulta SQL para inserir os dados na tabela
    $sql = "INSERT INTO produtos (nome, descricao, preco, quantidade) VALUES ('$nome', '$descricao', '$preco', '$quantidade')";

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
    <div class="container">
        <h1>Inserir Produto</h1>
        <form method="POST">
            <label>Nome do Produto:</label>
            <input type="text" name="nome" placeholder="Nome do Produto" required>
            <label>Descrição do Produto:</label>
            <!--textarea serve para aumentar o tamanho do campo-->
            <textarea name="descricao" placeholder="Descrição do Produto" required></textarea>
            <label>Preço do Produto:</label>
            <input type="number" name="preco" placeholder="Preço" step="0.01" required>
            <label>Quantidade do Produto:</label>
            <input type="number" name="quantidade" placeholder="Quantidade" required>
            <button type="submit">Salvar</button>
        </form>
        <center><?php echo"<a href='logout.php'><button>Logout</button></a>"?></center>

    </div>
</body>
</html>