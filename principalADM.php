<?php    
  include('conexao.php');
  include('protectADM.php');
  $sql = "SELECT * FROM books ORDER BY id DESC";
	$result = $mysqli -> query($sql);
  
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

  <form method="GET">
  <?php
    while($books = mysqli_fetch_assoc($result)){
      
      echo"<div class='book'><button type='submit' class='textBlack' href='solicitar.php'>";
          echo "<img class='bookImg' width='150px' height='200px' src=".$books['capa'];echo">";
          echo "<div class='bookName' name='nomliv'>".$books['nomliv']; echo"</div>";
          echo "<div class='bookAutor' name='aut'>".$books['aut']; echo"</div>";
       echo" </button>";
      echo"</div>";
      
     // $nomliv = $books['nomliv'];
     // $aut = $books['aut'];
     // echo $aut;
     // echo $nomliv;
      
    }
    
    ?>
  </form>

  <div class="navbar">
    <a href="principalADM.php" class="navLink"> <img class="navIcon" width="34px" height="34px"
        src="Images/home.png"></a>

    <a href="notificaçoes.php" class="navLink"><img class="navIcon" width="34px" height="34px"
        src="Images/notificação.png"></a>

    <a href="addbook.php" class="navLink"><img class="navIcon" width="32px" height="32px"
        src="Images/adicionar.png"></a>

    <a href="historico.php" class="navLink"><img class="navIcon" width="32px" height="32px"
        src="Images/historico.png"></a>

    <a href="index.php" class="navLink"><img class="navIcon" width="32px" height="32px" src="Images/exit.png"></a>
  </div>

</body>

</html>