<?php
    //Criando um Cookie:
            //chave,      valor,    tempo+segundos,      raiz(pasta)
    setcookie("usuario", "Nicolli", time() + 7*24*(60*60), '/');
             
    //Destruindo um Cookie:
    setcookie("usuarioAntigo", "Pugles", -3600, '/');
    print_r($_COOKIE);
?>