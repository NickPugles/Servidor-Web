<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa-Login, Create e Read</title>
    <style>

    </style>
</head>
<body>
    <div class="Formulario">
        <h1>Bem-vindos a Floricultura</h1>
        <br>
            <label>Usuário: </label>
            <input type="text" name="usuário" required>
            <br>
            <label>Senha: </label>
            <input type="text" name="produtos">
            <br>
            <input type="submit" name="Logout">

            <?php
                    include_once('connection.php');
                    echo '<br>';
                    $sql = "SELECT * FROM usuario ";
                    $resultado = mysqli_query($conexao, $sql);
                    
                    // Verificar se há registros
                    if (mysqli_num_rows($resultado) > 0) {
                        while ($linha = mysqli_fetch_assoc($resultado)) {
                            echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
                        }
                    } else {
                        echo "Nenhum registro encontrado.";
                    }
            ?>
    </div>
    
</body>
</html>