<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="index.php" method="GET">
            <label>E-mail:</label>
            <input type="email" name="email" placeholder="E-mail" required>
            <label>Senha:</label>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <br><br><br>
        <?php
            include_once ('conexao.php');
            
            // Verifica se a conexão foi bem-sucedida
            if (!$conexao) {
                die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
            }

            // Verifica se o formulário foi enviado
            if (isset($_GET['email']) && isset($_GET['senha'])) {
                $email = $_GET['email'];
                $senha = $_GET['senha'];
                
                // Consulta para verificar o usuário
                $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
                $resultado = mysqli_query($conexao, $sql);
                
                // Verifica se encontrou o usuário
                if (mysqli_num_rows($resultado) > 0) {
                    // Redireciona para a página de produtos após login bem-sucedido
                    header("Location: produtos_usuario.php");
                    exit();
                } else {
                    echo "E-mail ou senha incorretos.";
                }
            }
        ?>
    </div>
</body>
</html>
