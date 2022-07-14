
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
<header>
    <h1 class="titulo">
      LOGIN
    </h1>

    <img class="logo" src="Images/robo.png">

    <p class="nome">
      Apaixonados <br> por palavras
    </p>
  </header>  
    <form action="login.php" class="textLogin" method="POST">
  <main>
  <div class="form">
    <p>Email</p>
    <input type = "email" class="inputLogin" name="email" maxlength = "40" placeholder="Digite seu email (Máximo de 40 caracteres)">
     <p>Senha</p>
    <input type="password" class="inputLogin" name="pass" minlength="8" maxlength="12"  placeholder="Digite  sua senha(máximo de 16 caracteres)">
      <button class = "buttonSenha"><a><p><u>Esqueci a senha</u></p></a>
    </button>
    </div>
    <footer>
    <div class="botoes">
    <a class="buttonText" href="cadastro.php"> <input type = "button" class="buttonCadastrar" value = "Cadastrar"></a>
    <a class="buttonText"> <input type = "submit" class="buttonEntrar" value = "Entrar"></a>

    </div>
  </footer>
    </form>
  </main>
  
  
</body>

</html>
  
