<?php
include 'conexao.php';

$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Produtos e Usuários</title>
</head>
<body>
    <div class="container">
        <h1>Produtos</h1>
        <a href="inserir_produto.php" style="margin-bottom: 20px; display: inline-block;">Inserir Novo Produto</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nome']; ?></td>
                    <td><?= $row['descricao']; ?></td>
                    <td>R$ <?= $row['preco']; ?></td>
                    <td><?= $row['quantidade']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <br>

    <?php
    include 'conexao.php';
    $sql = "SELECT * FROM usuario   ";
    $resultado = mysqli_query($conexao, $sql);
    ?>
    <div class="cliente">
        <h1>Usuários</h1>
        <a href="inserir_usuario.php" style="margin-bottom: 20px; display: inline-block;">Inserir Novo Usuário</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
                <tr>
                    
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nome']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['senha']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
