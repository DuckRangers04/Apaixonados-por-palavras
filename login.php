<?php

include('conexao.php');
if(empty(!empty($_POST) && $_POST['email']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
} 

    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
    $senha = mysqli_real_escape_string($mysqli,$_POST['senha']);

    $sql_code = "SELECT email, senha FROM user_com WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($mysqli, $sql_code);
    $quant = mysqli_num_rows($result);

    if($quant == 1) {
        if(!isset($_SESSION)) {
        session_start();
        $_SESSION['email'] = $email;}
        header("Location: painel.php");
        exit();

    } else {
        echo "<b style= 'color:red'>Falha ao logar! E-mail ou senha incorretos</b>";
        exit();
        header("Location: index.php");
        
        
    }
    


?>