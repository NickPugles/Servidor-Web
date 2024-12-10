<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa-Login, Create e Read</title>
    <style>
        .horizontal{
            display: flex;
            padding: 20px;
            justify-content: center;
        }
        .horizontal div{
            padding: 20px;
            border: 1px solid lightgrey;
            justify-content: center;
        }
    </style>
    <!--quando é utilizado o display flex o justify-content serve para centralizar-->
</head>
<body>
    <center>
        <h1>Bem-vindos a Floricultura</h1>
    </center>
    <div class="horizontal">
        <div>
            <h1>Produtos</h1>
            <form action="insertion.php" method="POST">
                <label>Nome: </label>
                <input type="text" name="nome">
                <br>
                <label>Senha:</label>
                <input type="text" name="senha">
                <br>
                <center><input type="submit"></center>
            </form>
            <br><br><br>
            <?php
                include_once('connection.php');
                echo '<br>';
                $sql = "SELECT * FROM usuario ORDER BY nome ASC";
                $resultado = mysqli_query($conexao, $sql);
                
                // Verificar se há registros
                if (mysqli_num_rows($resultado) > 0) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
                    }
                } else {
                    echo "Nenhum registro encontrado.";
                }

                include_once('connection.php');
                echo '<br>';
                $sql = "SELECT * FROM produtos ORDER BY nome ASC";
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
        <div>
            <h1>Clientes</h1>
            <form action="index.php" method="GET">
                <label>Nome: </label>
                <input type="text" name="nome">
                <br>
                <center><input type="submit"></center>
            </form>
            <br><br><br>
            <?php
                echo '<br>';
                if(isset($_GET['nome'])){ // verificação se existi
                    $nome = $_GET['nome'];

                    //Exemplo de pesquisa simples, usando o "igual"
                    //$sql = "SELECT * FROM funcionario Where nome = '$nome'";

                    //Exemplo de pesquisa simples, usando o "LIKE"
                    $sql = "SELECT * FROM funcionario Where nome LIKE '$nome'";
                    $resultado = mysqli_query($conexao, $sql);
                    
                    // Verificar se há registros
                    if (mysqli_num_rows($resultado) > 0) {
                        while ($linha = mysqli_fetch_assoc($resultado)) {
                            echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
                        }
                    } else {
                        echo "Nenhum registro encontrado.";
                    }
                }
                
            ?>
        </div>
    </div>
</body>
</html>


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