<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script src="script.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>login</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>

<body>

<header>
    <h1 class="login">
      LOGIN
    </h1>

    <img class="logo" src="Images/robo.png">

    <p class="nome">
      Apaixonados <br> por palavras
    </p>
  
  </header>
  <main>
<form method="post">
  <main>
    <div class="form">
      <p>
        Matrícula
      </p>
  
      <input class="inputLogin" type = "number" name="matri" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(this.minLenght, this.maxLength) ;"
  minlenght="7" maxlength = "7" placeholder="Digite sua matrícula (7 números)">
  
      <p>
        E-mail
      </p>

      <input class="inputLogin" type="text" name="email" placeholder="Máximo de 40 caracteres.">

      <p>
        Senha
      </p>

      <input class="inputLogin" name="senha" type="password" minlength="8" maxlength="16" placeholder="Máximo 16 caracteres">

    </div>

  </main>
 

  <footer>
    <div class="botoes">
      <button class="buttonCancelar"><a class="textWhite" href="index.php">Cancelar</a></button>
      <button class="buttonConfirmar" name="salvar"><a class="textWhite">Confirmar</button>
    </div>
    <?php
    include('conexao.php');
  if (isset($_POST['salvar'])&& isset($_POST['matri'])&& isset($_POST['email']) && isset($_POST['senha'])){
    
      $matri= mysqli_real_escape_string($mysqli,$_POST['matri']);
      $email= mysqli_real_escape_string($mysqli,$_POST['email']);
      $senha= mysqli_real_escape_string($mysqli,$_POST['senha']);
  
      //VALIDAÇÃO DE CAMPO VAZIO
      if ($matri=="" || $matri==null){
          echo "'Úsuario não pode ser vazio.";
          exit();
      }
  
      if ($email=="" || $email==null){
          echo "Email não pode ser vazio.";
          exit();
      }
  
      if ($senha=="" || $senha==null){
          echo "Senha não pode ser vazia.";
          exit();
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<b style='color:red'>Formato de email inválido!</b>";
          exit();
      }
      $result = $mysqli->query("SELECT COUNT(*) FROM user_com WHERE matri = '{$matri}'");
      $result2 = $mysqli->query("SELECT COUNT(*) FROM user_com WHERE email = '{$email}'");
      $row = $result->fetch_row();
      $row2 = $result2->fetch_row();
      if ($row[0] > 0 || $row2[0] > 0) {
      echo "<b style='color:red'>Esse usuário já existe.</b>";
      } else {
        $sql = $mysqli->prepare("INSERT INTO user_com(matri,email,senha) VALUES ('$matri','$email','$senha')");
        $sql->execute();
        echo "<b style='color:green'>Úsuario inserido com sucesso!</b>";
      }
   }
  ?>
  </footer>
  </form>
</html>

</body>

</html>