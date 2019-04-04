<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php
  session_start();
    session_destroy();

  ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Troca Almoço</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
        <div class="wrapper fadeInDown">
                <div id="formContent">
                  <div class="fadeIn first">
                    <img src="http://www.smn.com.br/content/img/logotipo/light-bg.svg" id="icon" alt="User Icon" style="width: 100px;height: 100px;" />
                  </div>
                  <form id="from-log" method="POST" action="php/login.php">
                    <input type="text" id="login" class="fadeIn second" name="user" placeholder="Usuario">
                    <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Senha">
                    <input type="submit" class="fadeIn fourth" value="Entrar">
                  </form>
                  <div id="formFooter">
                    <a class="underlineHover" href="#">Esqueceu a senha?</a>
                  </div>
              
                </div>
              </div>
            
</body>
</html>