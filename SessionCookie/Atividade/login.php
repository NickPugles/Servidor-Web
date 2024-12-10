
<?php
     session_start();
     $loginCerto='Nicolli';
     $senhaCerto='123';
     //Verifica se veio do formulário
     if(isset($_POST['login'])){
         //Verefica se o formulário/login está correto
         if($loginCerto == $_POST['login'] and $senhaCerto == $_POST['senha']){
             $_SESSION['login'] = $_POST['login'];
             $_SESSION['senha'] = $_POST['senha'];  
         }
 
     }
     
     if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
         echo '<br>';
         echo $_POST['login'];
         echo '<br>';
         echo $_POST['senha'];
 
     }else{
         header('Location: index.php');
     }
     exit();
function Logout(){
    session_start();
    session_unset(); //apaga as variaveis
    session_destroy();
    header('Location: index.php');
}

if()

setcookie("usuario", "Nicolli", time() + 7*24*(60*60), '/');
?>