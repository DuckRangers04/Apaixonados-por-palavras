<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script src="script.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>cadastro</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>

<body>

<header>
    <h1 class="titulo">
      Cadastro
    </h1>

    <img class="logo" src="Images/robo.png">

    <p class="nome">
      Apaixonados <br> por palavras
    </p>
  
  </header>
  <main>
<form class="textLogin" method="post">
  <main>
    <div class="form">
      <p>
        Matrícula
      </p>
  
      <input class="inputLogin" type = "number" name="matri" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength) ;"
   maxlength = "7" placeholder="Digite sua matrícula (7 números)">
  
      <p>
        E-mail
      </p>

      <input class="inputLogin" type="text" name="email" placeholder="Máximo de 40 caracteres.">

      <p>
        Senha
      </p>

      <input class="inputLogin" name="pass" type="password" minlength="8" maxlength="16" placeholder="Máximo 16 caracteres">

    </div>

  </main>
 

  <footer>
    <div class="botoes">
    <a class="buttonText" href="index.php"> <input type = "button" class="buttonCancelar" value = "Cancelar"></a>
    <a class="buttonText"><input type = "submit" class="buttonConfirmar" name = "salvar" value = "Confirmar"></a>
    </div>
    <?php
    include('conexao.php');
    if (isset($_POST['salvar'])&& isset($_POST['matri'])&& isset($_POST['email']) && isset($_POST['pass'])){
    
      $matri= mysqli_real_escape_string($mysqli,$_POST['matri']);
      $email= mysqli_real_escape_string($mysqli,$_POST['email']);
      $senha= mysqli_real_escape_string($mysqli,$_POST['pass']);
      $cripto= password_hash($senha, PASSWORD_DEFAULT);
  
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
        $sql = $mysqli->prepare("INSERT INTO user_com(matri,email,pass) VALUES ('$matri','$email','$cripto')");
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