<?php 
	include('conexao.php');
	
	$sqlRequests = "SELECT * FROM requests ORDER BY matri DESC";
	$result = $mysqli -> query($sqlRequests);
	
?>

<?php
include('protectADM.php');
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
  <script src="script.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>

<body>
  <img class="logoImg" width="40px" height="40px" src="Images/robo.png">
  <div class="nomeTopo">Apaixonados <br>por palavras</div>

  <form class="container">
  <table id='notiTable'>
   

        <?php
        
					while($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$user_data['matri']; echo "</td>";
						echo "<td>".$user_data['nam_book']; echo "</td>";
            echo"<td>"; echo" <input type='button' value='Recebido' onclick='deleteRow(this)' class='buttonRecebido'>"; echo"</td>";
            echo "</tr>";
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

  <script>
    function deleteRow(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("notiTable").deleteRow(i);
    }
  </script>
</body>

</html>