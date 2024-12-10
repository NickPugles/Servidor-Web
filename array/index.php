<?php
//é uma array com muitas informações, porém cada uma possui um id

    include_once('array.php');

    //Exemplo do is_array
    $variaveltexto = 'arthur';
    if(is_array($variaveltexto)){
        echo "é um array<br><br>";
    }else{
        echo "Não é um array<br><br>";
    }

    //Exemplo de uso do array_unshift e array_push
    array_unshift($estado); //adicionado no início
    array_push($estado, "Paraná"); //adicionado no fim

    foreach($estado as $estadoLinha){
        echo 'Estado: ' .$estadoLinha.'<br>';
    }
    echo '<br><br><br>';


     //Exemplo de uso do array_shift() e array_push()
     $removido = array_shift($estado); //remove do início
     echo $removido. '<br>';

     $removido = array_pop($estado); //remove do final
     echo $removido;


     //Exemplo de uso do in_array
     if(in_array("SP", $estado)){
        echo "Estado encontrado<br><br>";
     }

     //Exemplo de uso do array_key_exists()
     if(array_key_exists("SP", $estadoChaves)){
        echo "Estado encontrado - SP";
     }
?>



