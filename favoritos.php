<?php
include('protectADM.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>favoritos</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>

<body>
    <img class="logoImg" width="40px" height="40px" src="Images/robo.png">
    <div class="nomeTopo">Apaixonados <br>por palavras</div>

  <div class = "nomeFavoritos">
  <p>FAVORITOS</p>
  </div>

  <div class="navbar">
  <a href="principal.php" class = "navLink"> <img class="navIcon" width="34px" height="34px" src="Images/home.png"></a>
    <a href="favoritos.php" class = "navLink"><img class="navIcon" width="36px" height="36px" src="Images/favorito.png"></a>
    <a href="logout.php" class = "navLink"><img class="navIcon" width="32px" height="32px" src="Images/exit.png"></a>
  </div>

</body>
</html>