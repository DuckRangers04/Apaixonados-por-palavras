
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script src="script.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-Edge">
  <meta name="viewport" content="width=device-width, initial-scale-1.0">
  <title>login</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>

<body>
  <form action="login.php" method="POST">
  <div class="upForm">
    <div class="titulo">LOGIN</div>
    <img class="logo" width="200px" src="Images/robo.png">
    <div class="nome">Apaixonados <br> por palavras</div>
  </div>
  <main>
  <form action="" method="POST">
  <div class="form">
    <p>Email</p>
    <input type = "email" class="inputLogin" name="email" maxlength = "40" placeholder="Digite seu email (Máximo de 40 caracteres)">
     <p>Senha</p>
    <input type="password" class="inputLogin" minlength="8" maxlength="12" name="senha" placeholder="Digite  sua senha(máximo de 16 caracteres)">
      <button class = "buttonSenha"><a><p><u>Esqueci a senha</u></p></a>
    </button>
    </div>
  <div class="form">
      <button class="buttonCadastrar"><a class="textWhite" href="cadastro.php">Cadastrar</a></button>
      <button class = "buttonEntrar" type="submit"><a class="textWhite">Entrar</a></button>
  </div>
  </form>
  </main>
</body>

</html>
  
