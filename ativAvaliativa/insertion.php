<?php
//Incluo a minha conexão com o banco de dados
include_once('connection.php');

$nome = $_POST['nome'];
$produto = $_POST['produto'];

//Inicio a inserção dos dados no Banco
$sql = "INSERT INTO funcionario (nome, produto) VALUES ('$nome', '$produto')";
if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('Location: index.php');
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}

?>