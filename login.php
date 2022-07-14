<?php

include('conexao.php');
$adm = false;
if(empty(!empty($_POST) && $_POST['email']) || empty($_POST['pass'])){
    header('Location: index.php');
    exit();
} 

    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
    $senha = mysqli_real_escape_string($mysqli,$_POST['pass']);
    if ($email=="" || $email==null){
        echo "Email não pode ser vazio.";
        exit();
    }

    if ($senha=="" || $senha==null){
        echo "Senha não pode ser vazia.";
        exit();
    }
    $sql_code = "SELECT email, pass FROM user_com WHERE email = '$email'";
    
    $result = mysqli_query($mysqli, $sql_code);
    
    $quant = mysqli_num_rows($result);
    
    $sql_exec = mysqli_query($mysqli,$sql_code) or die($mysqli->error);
    
    $user = $sql_exec->fetch_assoc();
    if(password_verify($senha, $user['pass'])){
        if($quant == 1) {
            if(!isset($_SESSION)) {
                session_start();
                $_SESSION['email'] = $email;}
                header("Location: principal.php");
                exit();

        }} else {
        $adm = true;
    }if($adm==true){
        $sql_code_adm = "SELECT email_inst,pass FROM user_adm WHERE email_inst = '$email' AND pass = '$senha'";
        $result_adm = mysqli_query($mysqli, $sql_code_adm);
        $sql_exec_adm = mysqli_query($mysqli,$sql_code_adm) or die($mysqli->error);
        $user_adm = $sql_exec_adm->fetch_assoc();
        $quant = mysqli_num_rows($result_adm);
        if($quant == 1) {
            if(!isset($_SESSION)) {
            session_start();
            $_SESSION['email_inst'] = $email;}
            header("Location: principalADM.php");
            exit();
    
        } else {
            echo "<b style= 'color:red'>Falha ao logar! E-mail ou senha incorretos</b>";
            exit();
            header("Location: index.html");
            
            
        }}else{
        echo "Falha ao logar, usuário ou email incorretos.";
          }
    


?>