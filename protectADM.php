<?php 
 if(!isset($_SESSION['email_inst'])){
    session_start();
}
if(!isset($_SESSION['email_inst'])){
    die("Logue em sua conta para acessar esta página. <p><a href=\"index.php\"> Entrar</a></p>");
}
?>