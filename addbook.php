<?php
include('protectADM.php');
require("conexao.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>principal</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>

<body>
    <img class="logoImg" width="40px" height="40px" src="Images/robo.png">
    <div class="nomeTopo">Apaixonados <br>por palavras</div>  

<form  enctype="multipart/form-data" method="POST" class = "livroCad">
  <label for="arquivo">Enviar imagem</label>
  <input type="file" name="capa" id="arquivo">
   <p>Título</p>
    <input class= "inputCad" name="nomliv" type="text">
     <p>Autor</p>
    <input class= "inputCad" name="aut"  type="text">
  <p>Sinopse</p>
    <input class= "inputCad" name="sinop"type="text" maxlength="1000">
    <p>Números de exemplares</p>
    <input class= "inputCadNum" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength) ;"
   maxlength = "1" name="quant"type="number">
    <div class = "buttons">
    <input type = "submit" class="buttonConfirmarCad" value = "Confirmar cadastro">
    </div>
    
</form>

<div class="navbar">
<a href="principalADM.php" class="navLink"> <img class="navIcon" width="34px" height="34px"
        src="Images/home.png"></a>

    <a href="notificaçoes.php" class="navLink"><img class="navIcon" width="34px" height="34px"
        src="Images/notificação.png"></a>

    <a href="addbook.html" class="navLink"><img class="navIcon" width="32px" height="32px"
        src="Images/adicionar.png"></a>

    <a href="historico.php" class="navLink"><img class="navIcon" width="32px" height="32px"
        src="Images/historico.png"></a>

    <a href="logout.php" class="navLink"><img class="navIcon" width="32px" height="32px" src="Images/exit.png"></a>
  </div>

<?php 
if(isset($_FILES['capa']) && isset($_POST['nomliv']) && isset($_POST['aut']) && isset($_POST['sinop']) && isset($_POST['quant'])){


    $arquivo = $_FILES['capa'];
    
    
    if($arquivo['error'])
        die("Falha ao enviar arquivo.");
    if($arquivo['size'] > 3145728)
        die("Arquivo muito grande.");
    $pasta = "capas/";
    $namoArq = $arquivo['name'];
    $newnaArq = uniqid();
    $ext = strtolower(pathinfo($namoArq, PATHINFO_EXTENSION));
    if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "png")
        die("Tipo de arquivo não aceito.");
    $nomliv= mysqli_real_escape_string($mysqli,$_POST['nomliv']);
    $autor= mysqli_real_escape_string($mysqli,$_POST['aut']);
    $sinop= mysqli_real_escape_string($mysqli,$_POST['sinop']);
    $quant= mysqli_real_escape_string($mysqli,$_POST['quant']);
    $path = $pasta . $newnaArq . "." . $ext;
    $deu_bom = move_uploaded_file($arquivo["tmp_name"], $path);
    //VALIDAÇÃO DE CAMPO VAZIO
    if ($nomliv=="" || $nomliv==null){
        echo "<b style='color=red'>Título não pode ser vazio.</b>";
        exit();
    }

    if ($autor=="" || $autor==null){
        echo "<b style='color=red'>Autor não pode ser vazio.</b>";
        exit(); 
    }

    if ($sinop=="" || $sinop==null){
        echo "<b style='color=red'>Sinopse não pode ser vazia.</b>";
        exit();
    }
    if($deu_bom){

        $sql = $mysqli->query("INSERT INTO books(nomliv, aut, sinop, quant, capa) VALUES ('$nomliv','$autor','$sinop','$quant', '$path')") or die($mysqli->error);
        header("principalADM.php");
        echo "<b style='color:green'>Livro inserido com sucesso!</b>";
    }
        else
            echo "deu ruim";
}
?>

</body>
</html>
