<?php 
	include('conexao.php');
	include('protect.php');
	
	$sql = "SELECT * FROM historic ORDER BY dat_fin_emp DESC";
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

  
<form div class="container">
	
	<div class="table">
		<div class="table-header">
			<div class="header-item"><a id="matricula" class="headerText">Matrícula</a></div>
			<div class="header-item"><a id="livro" class="headerText">Título do livro</a></div>
			<div class="header-item"><a id="solicitaçao" class="headerText">Solicitação</a></div>
			<div class="header-item"><a id="devoluçao" class="headerText">Devolução</a></div>
		</div>
		<div class="table-content">	
			<div class="table-row">		
				<?php
					while($user_data = mysqli_fetch_assoc($result)){
						echo "<div class='table-data'>".$user_data['matri']; echo "</div>";
						echo "<div class='table-data'>".$user_data['nam_book']; echo "</div>";
						echo "<div class='table-data'>".$user_data['dat_ini_emp']; echo "</div>";
						echo "<div class='table-data'>".$user_data['dat_fin_emp']; echo "</div>";
						echo "<br>";
					}
				?>
			</div>
		</div>	
	</div>
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
  
