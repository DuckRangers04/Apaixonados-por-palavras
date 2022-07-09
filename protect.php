<?php 
 if(!isset($_SESSION['email'])){
    session_start();
}
if(!isset($_SESSION['email'])){
    die("Logue em sua conta para acessar esta página. <p><a href=\"index.php\"> Entrar</a></p>");
}
?>