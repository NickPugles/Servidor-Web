<?php
session_start();

echo 'Nome do usuário: '.$_SESSION['nome'];
//empty: verifica se está vazio
//unset: apaga as variaveis, mas a sessão vai permanecer
//destroy: apaga tudo, incluindo a sessão
?>